<?php
require "Animal.php";
class Gato extends Animal
{
    public function __construct(string $nome, string $cor, string $raca, string $tamanho, int $idade, public string $corDoOlho)
    {
        return parent::__construct($nome, $cor, $raca, $tamanho, $idade);
    }

    public function som(): void
    {
        echo ("Miau!");
    }
}
