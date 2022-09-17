<?php

require_once 'Product.php';

// яйцо
class Egg extends Product
{
    private int $countEggs; // число яиц

    // конструктор
    public function __construct(int $countEggs)
    {
        $this->countEggs = $countEggs;
    }

    // получить объём продукта
    public function getValueProduct(): int
    {
        return $this->countEggs;
    }
}