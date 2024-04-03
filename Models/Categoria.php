<?php

class Categoria {
    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    // Metodo getter
    public function getNome() {
        return $this->nome;
    }

    // Metodo setter
    public function setNome($nome) {
        $this->nome = $nome;
    }
}