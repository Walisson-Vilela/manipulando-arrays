<?php

$notas = [
    'Walisson' => null,
    'Aryane' => 8,
    'Bianca' => 10,
    'Milena' => 7,
    'Laura' => 9,
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Laura fez a prova:' . PHP_EOL;
var_dump(isset($notas['Laura']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas, true));