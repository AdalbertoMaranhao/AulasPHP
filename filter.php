<?php
function par($n)
{
    if ($n % 2 == 0) {
        return $n;
    }
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//Filtrando elementos do array usando a função par criada anteriormente
$filtrados = array_filter($array, "par");

foreach ($filtrados as $elemento) {
    echo ("$elemento\n");
}

//alternativa ao filter
foreach ($array as $a) {
    $filtrados[] = par($a);
}
