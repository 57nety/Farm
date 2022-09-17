<?php

require_once 'Product.php';

// молоко
class Milk extends Product
{
    private int $valueMilk; // объём молока

    // конструктор
    public function __construct(int $valueMilk)
    {
        $this->valueMilk = $valueMilk;
    }

    // получить объём продукта
    public function getValueProduct(): int
    {
        return $this->valueMilk;
    }
}