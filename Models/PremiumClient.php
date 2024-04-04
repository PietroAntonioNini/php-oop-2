<?php

require_once __DIR__ . '/Client.php';
require_once __DIR__ . "/Traits/DiscountTrait.php";
require_once __DIR__ . "/Exceptions/InvalidProductException.php";

class PremiumClient extends Client {

    use DiscountTrait;

    public $username;
    public $discount = 20;

    function __construct($email, $address, $username) {
        parent::__construct($email, $address);
        $this->username = $username;
    }

    public function getCartTotal() {
        $total = 0;
        // scorre tra tutti i prodotti del carrello e somma i prezzi tra di loro
        foreach ($this->cart as $product) {
            $total += $product->price;
        }

        // applico lo sconto al totale
        return $total - $total / 100 * $this->discount;
    }

    public function applyDiscountToCart($discount) {
        $total = $this->getCartTotal();
        return $this->applyDiscount($total, $discount);
    }

    public function addToCart(Product $product) {
        if (!$this->validateProduct($product)) {
            throw new InvalidProductException();
        }
        $this->cart[] = $product;
    }
    
    private function validateProduct(Product $product) {
        // Implementa la logica per validare il prodotto, se necessario
        return true; // Implementa la logica di validazione qui
    }
    
}