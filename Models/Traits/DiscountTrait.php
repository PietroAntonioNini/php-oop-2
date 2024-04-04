<?php

//sconto
trait DiscountTrait {
    public function applyDiscount($total, $discount) {
        return $total - $total / 100 * $discount;
    }
}
