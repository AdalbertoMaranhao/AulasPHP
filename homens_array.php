<?php

$a = array(
    "Maria" => "41,f",
    "Pedro" => "18,h",
    "João" => "58,h",
    "Joana" => "15,f"
);

echo "=== Homens na lista ===\n\n";

foreach ($a as $nome => $dados) {
    // Separa idade e sexo
    $partes = explode(",", $dados);
    $idade = $partes[0];
    $sexo = $partes[1];

    // Verifica se é homem (h)
    if ($sexo == "h") {
        echo "Nome: $nome | Idade: $idade\n";
    }
}
