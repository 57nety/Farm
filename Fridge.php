<?php

require_once 'Product.php';

// холодильник
class Fridge
{
    private array $products; // продукты хранящиеся в холодильнике

    // конструктор
    public function __construct()
    {
        $this->initFridge();
    }

    // инициализация холодильника
    private function initFridge(): void
    {
        $this->products = [];
    }

    // положить продукты в холодильник
    public function putProducts(array $products): void
    {
        $this->products = array_merge($this->products, $products);
    }

    // получить информацию о продуктах в холодильнике
    public function getInfoAboutProducts(): array
    {
        $informationAboutProducts = [];

        for($i=0; $i<count($this->products); $i++)
        {
            $kindOfProduct = get_class($this->products[$i]);
            if(array_key_exists($kindOfProduct,$informationAboutProducts))
            {
                $informationAboutProducts[$kindOfProduct] += $this->products[$i]->getValueProduct();
            }
            else
            {
                $informationAboutProducts[$kindOfProduct] = $this->products[$i]->getValueProduct();
            }
        }

        return $informationAboutProducts;
    }
}