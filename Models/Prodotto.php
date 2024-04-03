<?php

class Prodotto {
    protected $immagine;
    protected $titolo;
    protected $prezzo;
    protected $categoria;
    protected $tipo;

    public function __construct($immagine, $titolo, $prezzo, $categoria, $tipo) {
        $this->immagine = $immagine;
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->tipo = $tipo;
    }

    // Metodi getter
    public function getImmagine() {
        return $this->immagine;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getTipo() {
        return $this->tipo;
    }

    // Metodi setter
    public function setImmagine($immagine) {
        $this->immagine = $immagine;
    }

    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }

    public function setPrezzo($prezzo) {
        $this->prezzo = $prezzo;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
}