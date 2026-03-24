<?php
require "Animal.php";
class Cachorro extends Animal
{
    public function __construct(string $nome, string $cor, string $raca, string $tamanho, int $idade)
    {
        return parent::__construct($nome, $cor, $raca, $tamanho, $idade);
    }

    public function som(): void
    {
        echo ("Au Au");
    }
}

$bili = new Cachorro(nome: "bili", idade: 10, raca: "xauxicha", tamanho: "nanico", cor: "Marrom bombom");

$bili->som();