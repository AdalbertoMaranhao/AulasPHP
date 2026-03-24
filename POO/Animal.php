<?php

class Animal
{
    public function __construct(
        public string $nome,
        public string $cor,
        public string $raca,
        public string $tamanho,
        public int $idade,
    ) {}

    public function som(): void
    {
        echo ("Som");
    }
}