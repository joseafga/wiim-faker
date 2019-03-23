<?php
/**
 * DESC
 *
 * @package    basesite
 * @subpackage includes
 *
 * @version    $Id:
 * @author     José Almeida <jose.afga@gmail.com>
 * @license    MIT, see LICENSE file for more details
 */
namespace Application;

/**
 * URI
 *
 * @package    basesite
 * @subpackage application
 */
class URI
{
	/**
	 * Current URL
	 *
	 * @var array
	 */
	protected static $_current = '';
	/**
	 * Base URI
	 *
	 * @var array
	 */
	protected static $_base = [];
	/**
	 * Root URI
	 *
	 * @var array
	 */
	protected static $_root = [];
	/**
	 * URI instances
	 *
	 * @var array
	 */
	protected static $instances = [];
	/**
	 * original URI
	 *
	 * @var string
	 */
	protected $_uri = null;
	/**
	 * Parsed URI
	 *
	 * @var array
	 */
	protected $_parts = [];

	/**
	 * Constructor
	 *
	 * @param string $uri
	 */
	private function __construct($uri = null)
	{
		if (null !== $uri) {
			// store original uri
			$this->_uri = $uri;

			// parse the uri
			$this->parse();
		}
	}

	/**
	 * Parse the object URI
	 */
	public function parse()
	{
		$this->_parts = parse_url($this->_uri);
	}

	/**
	 * Returns the URL for the request, minus the query.
	 *
	 * @return string
	 */
	public static function getCurrent()
	{
		// Get the current URL.
		if (empty(self::$_current)) {
			$uri = self::getInstance();

			self::$_current = $uri->getParts(['scheme', 'host', 'port', 'path']);
		}

		return self::$_current;
	}

	/**
	 * Get a URI instance or create if not exists
	 *
	 * @static
	 *
	 * @param string $uri
	 *
	 * @return URI object
	 */
	public static function getInstance($uri = 'DEFAULT')
	{
		if (empty(self::$instances[$uri])) {
			if ($uri == 'DEFAULT') {
				$ssl = isset($_SERVER['HTTPS']) && ! empty($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) != 'off');

				$uri = ($ssl ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] .
					(empty($_SERVER['REDIRECT_URL']) ?
						(empty($_SERVER['REQUEST_URI']) ? getenv('REQUEST_URI') : $_SERVER['REQUEST_URI']) : $_SERVER['REDIRECT_URL']);
			}

			// Create the new instance
			self::$instances[$uri] = new self($uri);
		}

		return self::$instances[$uri];
	}

	/**
	 * Returns URI parts
	 * No arguments return a array with all URI parts
	 * Pass a array return a string all specified URI parts
	 * Pass a string return specified part
	 *
	 * @param array|string|null $parts
	 *
	 * @return array|string
	 */
	public function getParts($parts = null)
	{
		$_parts = & $this->_parts;

		if (\is_array($parts)) {
			$uri = '';
			$uri .= \in_array('scheme', $parts) ? (isset($_parts['scheme']) ? $_parts['scheme'] . '://' : '') : '';
			$uri .= \in_array('user', $parts) ? (isset($_parts['user']) ? $_parts['user'] . (isset($_parts['pass']) ? ':' : '@') : '') : '';
			$uri .= \in_array('pass', $parts) ? (isset($_parts['pass']) ? $_parts['pass'] . '@' : '') : '';
			$uri .= \in_array('host', $parts) ? (isset($_parts['host']) ? $_parts['host'] : '') : '';
			$uri .= \in_array('port', $parts) ? (isset($_parts['port']) ? ':' . $_parts['port'] : '') : '';
			$uri .= \in_array('path', $parts) ? (isset($_parts['path']) ? $_parts['path'] : '') : '';
			$uri .= \in_array('query', $parts) ? (isset($_parts['query']) ? '?' . $_parts['query'] : '') : '';
			$uri .= \in_array('fragment', $parts) ? (! empty($_parts['fragment']) ? '#' . $_parts['fragment'] : '') : '';

			return (string) $uri;
		} elseif (\is_string($parts)) {
			return (string) isset($_parts[$parts]) ? $_parts[$parts] : '';
		}

		return $_parts;
	}

	/**
	 * Returns the root URI for the request.
	 *
	 * @param bool $relative If true return only path
	 * @param string $path The path
	 *
	 * @return string The root URI string.
	 */
	public static function getRoot($relative = false, $path = null)
	{
		if (empty(self::$_root)) {
			$uri = self::getInstance(self::getBase());

			self::$_root['prefix'] = $uri->getParts(['scheme', 'host', 'port']);
			self::$_root['path'] = rtrim($uri->getParts(['path']), '/\\');
		}

		// Get the scheme
		if (isset($path)) {
			self::$_root['path'] = $path;
		}

		return $relative === false ? self::$_root['prefix'] . self::$_root['path'] . '/' : self::$_root['path'] . '/';
	}

	/**
	 * get base path
	 *
	 * @param bool $relative If true return only path
	 *
	 * @return string
	 */
	public static function getBase($relative = false)
	{
		if (empty(self::$_base)) {
			$uri = self::getInstance();

			self::$_base['prefix'] = $uri->getParts(['scheme', 'host', 'port']);

			if (strpos(\PHP_SAPI, 'cgi') !== false && ! ini_get('cgi.fix_pathinfo') && ! empty($_SERVER['REQUEST_URI'])) {
				// PHP-CGI on Apache with "cgi.fix_pathinfo = 0"

				// We shouldn't have user-supplied PATH_INFO in PHP_SELF in this case
				// because PHP will not work with PATH_INFO at all.
				$script_name = $_SERVER['PHP_SELF'];
			} else {
				// Others
				$script_name = $_SERVER['SCRIPT_NAME'];
			}

			self::$_base['path'] = rtrim(\dirname($script_name), '/\\');
		}

		return ($relative === false || empty(self::$_base['path'])) ? self::$_base['prefix'] . self::$_base['path'] . '/' : self::$_base['path'] . '/';
	}

	/**
	 * Returns original URI
	 *
	 * @return string
	 */
	public function getUri()
	{
		return $this->_uri;
	}
}
