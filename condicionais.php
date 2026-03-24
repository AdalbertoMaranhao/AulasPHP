<?php
$codigo = 3;
$resultado;

$resultado = match($codigo){
    1 => "Aguardando Pagamento",
    2 => "Pago",
    3 => "Em Transporte",
    4 => "Entregue",
};
echo($resultado);