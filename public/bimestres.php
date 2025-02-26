<?php

$notasBimestre1 = [
    'Walisson' => 6,
    'Aryane' => 8,
    'Bianca' => 10,
    'Milena' => 7,
    'Laura' => 9,
];

$notasBimestre2 = [
    'Aryane' => 8,
    'Bianca' => 7,
    'Milena' => 2,
    'Laura' => 9,
];

//Arraydiff mostra os resultados que estao em um array e nao estão no outro
//Ele considera somente o valor
var_dump(array_diff( $notasBimestre1, $notasBimestre2));

//Para fazer a diferenca entre arrays por chaves
var_dump(array_diff_key( $notasBimestre1, $notasBimestre2));

//Para verificar chaves e valores
var_dump(array_diff_assoc( $notasBimestre1, $notasBimestre2));

//Array flip inverte o que é chave e valor
var_dump(array_flip( $notasBimestre1));