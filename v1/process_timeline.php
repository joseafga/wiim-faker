<?php

date_default_timezone_set('UTC');

$id = $_GET["id"];

function random_record($tag, $max = 1000, $n = 1) {    
    $t = microtime(true);
    $micro = sprintf("%06d",($t - floor($t)) * 1000000);
    $d = new DateTime(date("m/d/Y H:i:s.".$micro, $t));

    $t_opc = microtime(true) - rand(0, 100)/90;
    $micro_opc = sprintf("%06d",($t_opc - floor($t_opc)) * 1000000);
    $d_opc = new DateTime(date("m/d/Y H:i:s.".$micro_opc, $t_opc));


    $rec = array(
        "id" => rand(500 , 2000),
        "quality" => "Good",
        "tag" => $tag,
        "time_db" => $d->format("Y-m-d\TH:i:s.u") . "+00:00",
        "time_opc" => $d_opc->format("Y-m-d\TH:i:s.u") . "+00:00",
        "value" => rand(0 , ($max * pow(10, $n)))/pow(10, $n), // multiply and divide to increse resolution
    );

    return $rec;
}

if ($id == 1256) {
    $data = [array( 
        "record" => random_record(10, 256),
        "tag" => array(
            "alias" => "Válvula XYZ",
            "comment" => "Válvula de controle de alguma coisa, 8 bits.",
            "icon" => "valve",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/valve.png",
            "id" => 10,
            "name" => "Random.Valve",
            "server" => 1,
            "unit" => ""
        )
    ), array( 
        "record" => random_record(13, 1000),
        "tag" => array(
            "alias" => "Bomba",
            "comment" => "Comentário da bomba.",
            "icon" => "pump",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/pump.png",
            "id" => 13,
            "name" => "Random.Bomba",
            "server" => 1,
            "unit" => "m³/s"
        )
    ), array( 
        "record" => random_record(15, 1000),
        "tag" => array(
            "alias" => "Refratômetro",
            "comment" => "Indice de refração de algo medido em graus de Brix.",
            "icon" => "sensor",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/sensor.png",
            "id" => 15,
            "name" => "Random.Sensor",
            "server" => 2,
            "unit" => "ºBx"
        )
    ), array( 
        "record" => random_record(18, 100),
        "tag" => array(
            "alias" => "Alguma coisa",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis, felis vitae fermentum pulvinar, magna metus.",
            "icon" => "",
            "icon_url" => "",
            "id" => 18,
            "name" => "Random.xyz",
            "server" => 1,
            "unit" => "m/s²"
        )
    ), array( 
        "record" => random_record(92, 250),
        "tag" => array(
            "alias" => "Manômetro",
            "comment" => "Medidor de pressão da entrada de alguma coisa",
            "icon" => "pressure",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/pressure.png",
            "id" => 92,
            "name" => "Random.abc",
            "server" => 1,
            "unit" => "Bar"
        )
    )];
} elseif ($id == 2458) {
    $data = [array( 
        "record" => random_record(53, 5000),
        "tag" => array(
            "alias" => "Termômetro",
            "comment" => "Comentário do Termômetro",
            "icon" => "thermometer",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/thermometer.png",
            "id" => 53,
            "name" => "Random.Thermal",
            "server" => 1,
            "unit" => "K"
        )
    ), array( 
        "record" => random_record(54, 3000),
        "tag" => array(
            "alias" => "Motor M6",
            "comment" => "Comentário do motor",
            "icon" => "motor",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/motor.png",
            "id" => 54,
            "name" => "Random.Motor",
            "server" => 1,
            "unit" => "rpm"
        )
    ), array( 
        "record" => random_record(60, 65000),
        "tag" => array(
            "alias" => "Sensor capacitivo",
            "comment" => "Sensor capacitivo com resolução de 16 bits.",
            "icon" => "sensor",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/sensor.png",
            "id" => 60,
            "name" => "Random.Sensor",
            "server" => 3,
            "unit" => ""
        )
    ), array( 
        "record" => random_record(64, 100),
        "tag" => array(
            "alias" => "Corrente M6",
            "comment" => "Corrente do motor M6",
            "icon" => "multimeter",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/multimeter.png",
            "id" => 64,
            "name" => "Random.Corrent",
            "server" => 3,
            "unit" => "A"
        )
    ), array( 
        "record" => random_record(74, 100),
        "tag" => array(
            "alias" => "Bomba d'agua",
            "comment" => "Comentário da bomba",
            "icon" => "pump",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/pump.png",
            "id" => 74,
            "name" => "Random.Bomba2",
            "server" => 2,
            "unit" => "m³/h"
        )
    ), array( 
        "record" => random_record(99, 5000),
        "tag" => array(
            "alias" => "Motor",
            "comment" => "Comentário do motor",
            "icon" => "motor",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/motor.png",
            "id" => 99,
            "name" => "Random.motor",
            "server" => 1,
            "unit" => "rpm"
        )
    )];
} else {
    $data = [array( 
        "record" => random_record(152, 100),
        "tag" => array(
            "alias" => "Esteira",
            "comment" => "Comentário da esteira",
            "icon" => "conveyor-1",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/conveyor-1.png",
            "id" => 152,
            "name" => "Random.Esteira",
            "server" => 1,
            "unit" => "m/s"
        )
    ), array( 
        "record" => random_record(153, 200),
        "tag" => array(
            "alias" => "Bomba",
            "comment" => "Comentário da bomba",
            "icon" => "pump",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/pump.png",
            "id" => 153,
            "name" => "Random.Bomba",
            "server" => 2,
            "unit" => "m³/h"
        )
    ), array( 
        "record" => random_record(154, 100),
        "tag" => array(
            "alias" => "120 Caracteres",
            "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis, felis vitae fermentum pulvinar, magna metus.",
            "icon" => "valve",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/valve.png",
            "id" => 154,
            "name" => "Random.qwert",
            "server" => 2,
            "unit" => "m³/h"
        )
    ), array( 
        "record" => random_record(155, 1000),
        "tag" => array(
            "alias" => "Alguma coisa",
            "comment" => "Comentário dessa coisa",
            "icon" => "",
            "icon_url" => "",
            "id" => 155,
            "name" => "Random.xyz",
            "server" => 3,
            "unit" => "m/s^2"
        )
    ), array( 
        "record" => random_record(100, 1500),
        "tag" => array(
            "alias" => "Termômetro",
            "comment" => "Comentário do Termômetro",
            "icon" => "thermometer",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/thermometer.png",
            "id" => 100,
            "name" => "Random.abc",
            "server" => 1,
            "unit" => "ºC"
        )
    ), array( 
        "record" => random_record(156, 1000),
        "tag" => array(
            "alias" => "Motor",
            "comment" => "Comentário do motor",
            "icon" => "motor",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/motor.png",
            "id" => 156,
            "name" => "Random.motor",
            "server" => 1,
            "unit" => "rpm"
        )
    ), array( 
        "record" => random_record(157, 100),
        "tag" => array(
            "alias" => "Corrente entrada",
            "comment" => "Comentário da corrente entrada",
            "icon" => "multimeter",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/multimeter.png",
            "id" => 157,
            "name" => "Random.corrente",
            "server" => 1,
            "unit" => "A"
        )
    ), array( 
        "record" => random_record(158, 1000),
        "tag" => array(
            "alias" => "Tensão saida",
            "comment" => "Comentário da tensão saida",
            "icon" => "multimeter",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/multimeter.png",
            "id" => 158,
            "name" => "Random.tensao",
            "server" => 2,
            "unit" => "V"
        )
    ), array( 
        "record" => random_record(159, 1000),
        "tag" => array(
            "alias" => "Bomba",
            "comment" => "Comentário da bomba",
            "icon" => "pump",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/pump.png",
            "id" => 159,
            "name" => "Random.Bomba",
            "server" => 1,
            "unit" => "m³/h"
        )
    ), array( 
        "record" => random_record(160, 1000),
        "tag" => array(
            "alias" => "Bomba d'agua",
            "comment" => "Comentário da bomba",
            "icon" => "pump",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/pump.png",
            "id" => 160,
            "name" => "Random.Bomba2",
            "server" => 1,
            "unit" => "m³/h"
        )
    ), array( 
        "record" => random_record(161, 100),
        "tag" => array(
            "alias" => "Alguma coisa",
            "comment" => "Comentário dessa coisa",
            "icon" => "",
            "icon_url" => "",
            "id" => 161,
            "name" => "Random.xyz",
            "server" => 1,
            "unit" => "m/s^2"
        )
    ), array( 
        "record" => random_record(162, 1500),
        "tag" => array(
            "alias" => "Termômetro",
            "comment" => "Comentário do Termômetro",
            "icon" => "thermometer",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/thermometer.png",
            "id" => 162,
            "name" => "Random.abc",
            "server" => 2,
            "unit" => "ºC"
        )
    ), array( 
        "record" => random_record(163, 3000),
        "tag" => array(
            "alias" => "Motor",
            "comment" => "Comentário do motor",
            "icon" => "motor",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/motor.png",
            "id" => 163,
            "name" => "Random.motor",
            "server" => 1,
            "unit" => "rpm"
        )
    ), array( 
        "record" => random_record(164, 100),
        "tag" => array(
            "alias" => "Corrente entrada",
            "comment" => "Comentário da corrente entrada",
            "icon" => "multimeter",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/multimeter.png",
            "id" => 164,
            "name" => "Random.corrente",
            "server" => 3,
            "unit" => "A"
        )
    ), array( 
        "record" => random_record(165, 1000),
        "tag" => array(
            "alias" => "Tensão saida",
            "comment" => "Comentário da tensão saida",
            "icon" => "multimeter",
            "icon_url" => "http://joseafga.com.br/wiim/images/icons/96/multimeter.png",
            "id" => 165,
            "name" => "Random.tensao",
            "server" => 3,
            "unit" => "V"
        )
    )];
}

header('Content-Type: application/json');
echo json_encode($data);
