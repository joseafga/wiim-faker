<?php

require __DIR__ . '/app/URI.php';

date_default_timezone_set('UTC');

$root = Application\URI::getRoot(false, '/images/icons/96');
$id = $_GET["id"];

if ($id == 1256) {
    $data = [[
        "alias" => "Válvula XYZ",
        "comment" => "Válvula de controle de alguma coisa, 8 bits.",
        "icon" => "valve",
        "icon_url" => $root . "valve.png",
        "id" => 10,
        "name" => "Random.Valve",
        "server" => 1,
        "unit" => "%"
    ], [
        "alias" => "Bomba",
        "comment" => "Comentário da bomba.",
        "icon" => "pump",
        "icon_url" => $root . "pump.png",
        "id" => 13,
        "name" => "Random.Bomba",
        "server" => 1,
        "unit" => "m³/s"
    ], [
        "alias" => "Refratômetro",
        "comment" => "Indice de refração de algo medido em graus de Brix.",
        "icon" => "sensor",
        "icon_url" => $root . "sensor.png",
        "id" => 15,
        "name" => "Random.Sensor",
        "server" => 2,
        "unit" => "ºBx"
    ], [
        "alias" => "Alguma coisa",
        "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis, felis vitae fermentum pulvinar, magna metus.",
        "icon" => "",
        "icon_url" => "",
        "id" => 18,
        "name" => "Random.xyz",
        "server" => 1,
        "unit" => "m/s²"
    ], [
        "alias" => "Manômetro",
        "comment" => "Medidor de pressão da entrada de alguma coisa",
        "icon" => "pressure",
        "icon_url" => $root . "pressure.png",
        "id" => 92,
        "name" => "Random.abc",
        "server" => 1,
        "unit" => "Bar"
    ]];
} elseif ($id == 2458) {
    $data = [[
        "alias" => "Termômetro",
        "comment" => "Comentário do Termômetro",
        "icon" => "thermometer",
        "icon_url" => $root . "thermometer.png",
        "id" => 53,
        "name" => "Random.Thermal",
        "server" => 1,
        "unit" => "K",
    ], [
        "alias" => "Motor M6",
        "comment" => "Comentário do motor",
        "icon" => "motor",
        "icon_url" => $root . "motor.png",
        "id" => 54,
        "name" => "Random.Motor",
        "server" => 1,
        "unit" => "rpm",
    ], [
        "alias" => "Sensor capacitivo",
        "comment" => "Sensor capacitivo com resolução de 16 bits, utilizado para distância x.",
        "icon" => "sensor",
        "icon_url" => $root . "sensor.png",
        "id" => 60,
        "name" => "Random.Sensor",
        "server" => 3,
        "unit" => "cm",
    ], [
        "alias" => "Corrente M6",
        "comment" => "Corrente do motor M6",
        "icon" => "multimeter",
        "icon_url" => $root . "multimeter.png",
        "id" => 64,
        "name" => "Random.Corrent",
        "server" => 3,
        "unit" => "A",
    ], [
        "alias" => "Bomba d'agua",
        "comment" => "Comentário da bomba",
        "icon" => "pump",
        "icon_url" => $root . "pump.png",
        "id" => 74,
        "name" => "Random.Bomba2",
        "server" => 2,
        "unit" => "m³/h",
    ], [
        "alias" => "Motor",
        "comment" => "Comentário do motor",
        "icon" => "motor",
        "icon_url" => $root . "motor.png",
        "id" => 99,
        "name" => "Random.motor",
        "server" => 1,
        "unit" => "rpm",
    ]];
} else {
    $data = [[
        "alias" => "Esteira",
        "comment" => "Comentário da esteira",
        "icon" => "conveyor-1",
        "icon_url" => $root . "conveyor-1.png",
        "id" => 152,
        "name" => "Random.Esteira",
        "server" => 1,
        "unit" => "m/s",
    ], [
        "alias" => "Bomba",
        "comment" => "Comentário da bomba",
        "icon" => "pump",
        "icon_url" => $root . "pump.png",
        "id" => 153,
        "name" => "Random.Bomba",
        "server" => 2,
        "unit" => "m³/h",
    ], [
        "alias" => "120 Caracteres",
        "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis, felis vitae fermentum pulvinar, magna metus.",
        "icon" => "valve",
        "icon_url" => $root . "valve.png",
        "id" => 154,
        "name" => "Random.qwert",
        "server" => 2,
        "unit" => "m³/h",
    ], [
        "alias" => "Alguma coisa",
        "comment" => "Comentário dessa coisa",
        "icon" => "",
        "icon_url" => "",
        "id" => 155,
        "name" => "Random.xyz",
        "server" => 3,
        "unit" => "m/s^2",
    ], [
        "alias" => "Termômetro",
        "comment" => "Comentário do Termômetro",
        "icon" => "thermometer",
        "icon_url" => $root . "thermometer.png",
        "id" => 153,
        "name" => "Random.abc",
        "server" => 1,
        "unit" => "ºC",
    ], [
        "alias" => "Motor",
        "comment" => "Comentário do motor",
        "icon" => "motor",
        "icon_url" => $root . "motor.png",
        "id" => 156,
        "name" => "Random.motor",
        "server" => 1,
        "unit" => "rpm",
    ], [
        "alias" => "Corrente entrada",
        "comment" => "Comentário da corrente entrada",
        "icon" => "multimeter",
        "icon_url" => $root . "multimeter.png",
        "id" => 157,
        "name" => "Random.corrente",
        "server" => 1,
        "unit" => "A",
    ], [
        "alias" => "Tensão saida",
        "comment" => "Comentário da tensão saida",
        "icon" => "multimeter",
        "icon_url" => $root . "multimeter.png",
        "id" => 158,
        "name" => "Random.tensao",
        "server" => 2,
        "unit" => "V",
    ], [
        "alias" => "Bomba",
        "comment" => "Comentário da bomba",
        "icon" => "pump",
        "icon_url" => $root . "pump.png",
        "id" => 159,
        "name" => "Random.Bomba",
        "server" => 1,
        "unit" => "m³/h",
    ], [
        "alias" => "Bomba d'agua",
        "comment" => "Comentário da bomba",
        "icon" => "pump",
        "icon_url" => $root . "pump.png",
        "id" => 160,
        "name" => "Random.Bomba2",
        "server" => 1,
        "unit" => "m³/h",
    ], [
        "alias" => "Alguma coisa",
        "comment" => "Comentário dessa coisa",
        "icon" => "",
        "icon_url" => "",
        "id" => 161,
        "name" => "Random.xyz",
        "server" => 1,
        "unit" => "m/s^2",
    ], [
        "alias" => "Termômetro",
        "comment" => "Comentário do Termômetro",
        "icon" => "thermometer",
        "icon_url" => $root . "thermometer.png",
        "id" => 162,
        "name" => "Random.abc",
        "server" => 2,
        "unit" => "ºC",
    ], [
        "alias" => "Motor",
        "comment" => "Comentário do motor",
        "icon" => "motor",
        "icon_url" => $root . "motor.png",
        "id" => 163,
        "name" => "Random.motor",
        "server" => 1,
        "unit" => "rpm",
    ], [
        "alias" => "Corrente entrada",
        "comment" => "Comentário da corrente entrada",
        "icon" => "multimeter",
        "icon_url" => $root . "multimeter.png",
        "id" => 164,
        "name" => "Random.corrente",
        "server" => 3,
        "unit" => "A",
    ], [
        "alias" => "Tensão saida",
        "comment" => "Comentário da tensão saida",
        "icon" => "multimeter",
        "icon_url" => $root . "multimeter.png",
        "id" => 165,
        "name" => "Random.tensao",
        "server" => 3,
        "unit" => "V",
    ]];
}

header('Content-Type: application/json');
echo json_encode($data);
