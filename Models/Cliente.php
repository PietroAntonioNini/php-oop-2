<?php
class Cliente {

    protected $isRegistrato;
    protected $sconto;

    public function __construct($isRegistrato, $sconto) {
        $this->isRegistrato = $isRegistrato;
        $this->sconto = $sconto;
    }

    // Metodi getter
    public function getIsRegistrato() {
        return $this->isRegistrato;
    }

    public function getSconto() {
        return $this->sconto;
    }

    // Metodi setter
    public function setIsRegistrato($isRegistrato) {
        $this->isRegistrato = $isRegistrato;
    }

    public function setSconto($sconto) {
        $this->sconto = $sconto;
    }
}