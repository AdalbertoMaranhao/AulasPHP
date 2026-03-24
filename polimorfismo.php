<?php
class Animal
{
    public function __construct(
        //Apenas a propria classe pode ver e alterar
        //usando métodos acessores como o SET e o GET
        private string $nome,
        //Todo mundo pode ver mas não alterar
        //Hoje em dia ele é recomendado antes do private
        readonly public string $idade,
        //Todo mundo consegue ver e alterar
        public string $tamanho
    ) {}

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function emitirSom(): void
    {
        echo ("exemplo");
    }
}

class Gato extends Animal
{
    public function emitirSom(): void
    {
        echo ("Miau!!!!!!!");
    }
}

class Cachorro extends Animal
{
    public function emitirSom(): void
    {
        echo ("Au Au Au AU");
    }
}

$animal = new Cachorro("Raimundo Neto", "4", "pequeno");
$a2 = new Cachorro("Neto", "4", "pequeno");

echo ($a2->idade);

//$animal->nome = "Neto de Raimundo";
$a2->setNome("Neto de Raimundo");
$animal->emitirSom();
var_dump($animal);

echo ($a2->getNome());
