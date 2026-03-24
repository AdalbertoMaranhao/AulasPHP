<?php 
$altura = $argv[1];
$peso = $argv[2];

$imc = $peso / ($altura*$altura);
echo $imc;