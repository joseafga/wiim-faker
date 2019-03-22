<?php

date_default_timezone_set('UTC');

$data = [array(
    "comment" => "Processo de embebição da cana.",
    "id" => 1256,
    "name" => "Embebição",
    "tags" => [31, 32, 33, 34, 55, 66, 65],
    "zone" => array(
        "comment" => "Orci at erat vestibulum, rutrum justo in tempor etiam congue nisl.",
        "id" => 2,
        "name" => "Proin vitae ipsum"
    )
), array(
    "comment" => "Controle do nível de baçado por sensores capacitivos.",
    "id" => 2458,
    "name" => "Nível Chute Donelly",
    "tags" => [41, 42 , 43, 51, 56, 57, 58, 59, 60, 61, 62],
    "zone" => array(
        "comment" => "Amet placerat ligula in fermentum non litora aliquam blandit.",
        "id" => 3,
        "name" => "Moenda"
    )
), array(
    "comment" => "Processo genérico para testes, o comentário pode ter até 120 caracteres :)",
    "id" => 2656,
    "name" => "Processo qualquer",
    "tags" => [2, 5, 6, 12],
    "zone" => array(
        "comment" => "Luctus donec phasellus turpis tempor ut, fames elit diam.",
        "id" => 4,
        "name" => "zona do processo"
    )
), array(
    "comment" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "id" => 3256,
    "name" => "Desfibrilador",
    "tags" => [8, 9, 10, 15, 20],
    "zone" => array(
        "comment" => "Fringilla imperdiet ornare nisl, laoreet elementum sociosqu magna, lacinia condimentum etiam iaculis.",
        "id" => 5,
        "name" => "Moenda"
    )
), array(
    "comment" => "Ut mollis odio quis risus ornare, eget scelerisque neque venenatis.",
    "id" => 5892,
    "name" => "Tratamento água",
    "tags" => [21, 22, 23, 28, 31],
    "zone" => array(
        "comment" => "Dui cras condimentum viverra sodales vestibulum mi.",
        "id" => 8,
        "name" => "Area 51"
    )
)];

header('Content-Type: application/json');
echo json_encode($data);
