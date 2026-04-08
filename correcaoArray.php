<?php

$a = array("Maria" => "41,f", "Pedro" => "18,h", "João" => "58,h", "Joana" => "15,f");
$nomes = ["Pedro", "Fernando", "Joaquim", "Joana", "Estefan"];
$selecionados = [];

foreach ($nomes as $nome) {
    $encontrado = false;
    foreach ($a as $chave => $valor) {
        if ($chave === $nome) {
            $encontrado = true;
            break;
        }
    }
    if (!$encontrado) {
        $selecionados[] = $nome;
    }
}
var_dump($selecionados);
