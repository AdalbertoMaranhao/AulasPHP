<?php
class SuperClasse
{
    readonly public string $nome;
    private int $idade;
    readonly public string $telefone;

    public function __construct(
        string $nome,
        int $idade,
        string $telefone
    ) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->telefone = $telefone;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }
    public function fazerAniversario(): void
    {
        $this->idade += 1;
    }
}
//instanciar -> criar um objeto na mémoria do computador e atribuir valor aos atributos do objeto
$pessoa = new SuperClasse("Boquinho", 9, "4002-8922");
$pessoa1 = new SuperClasse("Boquinho", 9, "4002-8922");
$pessoa2 = new SuperClasse("Boquinho", 9, "4002-8922");

echo ($pessoa->nome . "\n");
echo ($pessoa->getIdade() . "\n");
echo ($pessoa->telefone);

$pessoas = [$pessoa, $pessoa1, $pessoa2];
$pessoas[$i]->nome;
//var_dump($pessoa);