<?php

date_default_timezone_set('UTC');

$id = $_GET['id'];
$since = empty($_GET['since']) ? false : $_GET['since'];

$rec_id = rand(100 , 2000);
$data = array();

function random_record($tag, $max = 1000, $n = 1, $margin = 0) {
    $t = microtime(true) - $margin;
    $micro = sprintf("%06d",($t - floor($t)) * 1000000);
    $d = new DateTime(date("m/d/Y H:i:s.".$micro, $t));

    if ($margin == 0)
        $t_opc = microtime(true); // exactly time
    else
        //$t_opc = microtime(true) - $margin - rand(0, 100)/100; // rand until 1 sec
        $t_opc = microtime(true) - $margin; // rand until 1 sec
    $micro_opc = sprintf("%06d",($t_opc - floor($t_opc)) * 1000000);
    $d_opc = new DateTime(date("m/d/Y H:i:s.".$micro_opc, $t_opc));


    $rec = array(
        "id" => $GLOBALS['rec_id']++,
        "quality" => "Good",
        "tag" => $tag,
        "time_db" => $d->format("Y-m-d\TH:i:s.u") . "+00:00",
        "time_opc" => $d_opc->format("Y-m-d\TH:i:s.u") . "+00:00",
        "value" => rand(80 , ($max * pow(10, $n)))/pow(10, $n), // multiply and divide to increse resolution
    );

    return $rec;
}

function many_records($quantity, $tag, $max = 1000, $n =1) {
    $recs = array();
    $pass = 1; // seconds
    $margin = $pass * $quantity;
    
    if ($GLOBALS['since']) {
        $recs[] = random_record($tag, $max, $n, 0);
    } else {
        for ($i=0; $i < $quantity; $i++) {
            $recs[] = random_record($tag, $max, $n, $margin);
            $margin -= $pass;
        }
    }
    
    return $recs;
}

// update check?
if ($since) {
    if(rand(0, 2) == 0) {
        $id = 0;
    }

    $rec_id = $since + 2;
}

if ($id == 10) {
    $data = many_records(20, 10, 256);
} elseif ($id == 13) {
    $data = many_records(60, 13, 1000);
} elseif ($id == 15) {
    $data = many_records(20, 15, 1000);
} elseif ($id == 18) {
    $data = many_records(20, 18, 100);
} elseif ($id == 92) {
    $data = many_records(20, 92, 250);
} elseif ($id == 53) {
    $data = many_records(20, 53, 5000);
} elseif ($id == 54) {
    $data = many_records(60, 54, 3000);
} elseif ($id == 60) {
    $data = many_records(20, 60, 6500);
} elseif ($id == 64) {
    $data = many_records(20, 64, 100);
} elseif ($id == 74) {
    $data = many_records(20, 74, 100);
} elseif ($id == 99) {
    $data = many_records(20, 99, 5000);
} elseif ($id == 152) {
    $data = many_records(20, 152, 100);
} elseif ($id == 153) {
    $data = many_records(20, 153, 200);
} elseif ($id == 154) {
    $data = many_records(20, 154, 100);
} elseif ($id == 155) {
    $data = many_records(20, 155, 1000);
} elseif ($id == 100) {
    $data = many_records(20, 100, 1500);
} elseif ($id == 156) {
    $data = many_records(20, 156, 1000);
} elseif ($id == 157) {
    $data = many_records(20, 157, 100);
} elseif ($id == 158) {
    $data = many_records(30, 158, 1000);
} elseif ($id == 159) {
    $data = many_records(20, 159, 1000);
} elseif ($id == 160) {
    $data = many_records(20, 160, 1000);
} elseif ($id == 161) {
    $data = many_records(20, 161, 100);
} elseif ($id == 162) {
    $data = many_records(60, 162, 1500);
} elseif ($id == 163) {
    $data = many_records(20, 163, 3000);
} elseif ($id == 164) {
    $data = many_records(20, 164, 100);
} elseif ($id == 165) {
    $data = many_records(20, 165, 1000);
}

header('Content-Type: application/json');
echo json_encode($data);
