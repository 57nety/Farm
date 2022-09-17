<?php

require_once 'Barn.php';
require_once 'Fridge.php';
require_once 'Product.php';

// робот
class Robot
{
    private array $products; // собранные продукты

    // конструктор
    public function __construct()
    {
        $this->initRobot();
    }

    // инициализация робота
    private function initRobot(): void
    {
        $this->products = [];
    }

    // сбор продуктов у животных из хлева
    public function collectProductsFrom(Barn $building): void
    {
        // получил всех животных в хлеву
        $animals = $building->getAnimals();
        // получаю еду, которую произвели животные
        $this->getFoodFromAnimal($animals);
    }

    // получение еды
    public function getFoodFromAnimal(array $animals): void
    {
        for($i=0; $i<count($animals); $i++)
        {
            $this->products[] = $animals[$i]->getFood();
        }
    }

    // положить продукт в холодильник
    public function putFoodIn(Fridge $fridge): void
    {
        $fridge->putProducts($this->products);
        $this->products = [];
    }

    // получить информацию о животных в хлеве
    public function getAnimalInfo(Barn $barn): void
    {
        $info = $barn->getInfoAboutAnimals();
        $kindOfAnimal = array_keys($info);

        for($i=0; $i<count($kindOfAnimal); $i++)
        {
            echo $kindOfAnimal[$i].' - '.$info[$kindOfAnimal[$i]].' pieces'.PHP_EOL;
        }
    }

    // получить информацию о продуктах в холодильнике
    public function getProductsInfo(Fridge $fridge): void
    {
        $info = $fridge->getInfoAboutProducts();
        $kindOfProducts = array_keys($info);

        for($i=0; $i<count($kindOfProducts); $i++)
        {
            echo 'Amount of '.$kindOfProducts[$i].' - '.$info[$kindOfProducts[$i]].PHP_EOL;
        }
    }
}