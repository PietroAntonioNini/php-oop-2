<?php

class Carrello {
    protected $prodotti = [];
    protected $cliente;
    protected $cartaDiCredito;

    public function __construct($cliente, $cartaDiCredito) {
        $this->cliente = $cliente;
        $this->cartaDiCredito = $cartaDiCredito;
    }

    // Metodi getter
    public function getProdotti() {
        return $this->prodotti;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getCartaDiCredito() {
        return $this->cartaDiCredito;
    }

    // Metodi setter
    public function setProdotti($prodotti) {
        $this->prodotti = $prodotti;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setCartaDiCredito($cartaDiCredito) {
        $this->cartaDiCredito = $cartaDiCredito;
    }

    public function aggiungiProdotto($prodotto) {
        $this->prodotti[] = $prodotto;
    }
}
