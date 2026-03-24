<?php
//Arrays - Conjunto de dados
//variavel que vai armazenar mais de 1 valor

$variavel = [
    2,
    3,
    134,
    "abobrinha"
];

$pessoa = [
    "Nome" => "Maria",
    "Idade" => 30,
    "Altura" => 1.6,
    "Telefone" => "4002-8922"
];

//TODO ARRAY NO PHP É INDEXADO OU SEJA POSSUI INDICES OU ENDEREÇOS PARA OS VALORES


//Buscar elemento no ARRAY
//$variavel[chave];
for ($i = 0; $i < 4; $i++) {
    echo ($variavel[$i] . "\n");
}
foreach ($variavel as $var) {
    echo ("$var\n");
}
foreach ($pessoa as $chave => $valor) {
    echo ("$chave: $valor \n");
}


$array = [
    'a' => 'cachorro',
    'b' => 'gato',
    'e' => 'elefante',
    'f' => 'ganso'
];
//Exibe o primeiro elemento do array
$firstValue = array_first($array);
var_dump($firstValue);
//Exibe o ultimo elemento do array
$lastValue = array_last($array);
var_dump($lastValue);

//Ordena em ordem crescente
var_dump(asort($array));
//Ordena em ordem decrescente
var_dump(arsort($array));

//Contar a quantidade de itens de um array
var_dump(count($array));
