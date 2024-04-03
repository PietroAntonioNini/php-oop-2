<?php
class CartaDiCredito {
    protected $numero;
    protected $scadenza;

    public function __construct($numero, $scadenza) {
        $this->numero = $numero;
        $this->scadenza = $scadenza;
    }

    // Metodi getter
    public function getNumero() {
        return $this->numero;
    }

    public function getScadenza() {
        return $this->scadenza;
    }

    // Metodi setter
    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setScadenza($scadenza) {
        $this->scadenza = $scadenza;
    }
}