<?php

require_once 'Barn.php';
require_once 'Robot.php';
require_once 'Fridge.php';

// ферма
class Farm
{
    private Barn $barn; // хлев
    private Fridge $fridge; // холодильник для продуктов
    private Robot $robot; // робот

    // конструктор
    public function __construct()
    {
        $this->initFarm();
    }

    // инициализация фермы
    private function initFarm(): void
    {
        $this->barn = new Barn();
        $this->fridge = new Fridge();
        $this->robot = new Robot();
    }

    // добавление нового животного в хлев
    public function addNewAnimalInBarn(array $animals): void
    {
        for($i=0; $i<count($animals); $i++)
        {
            // присвоил животному уникальный номер
            $animals[$i]->setId(uniqid());
            // добавил животного в хлев
            $this->barn->addNewAnimal($animals[$i]);
        }
    }

    // запуск симуляции
    public function startSimulation(int $numberDays): void
    {
        $barn = $this->barn; // хлев
        $fridge = $this->fridge; // холодильник

        for($i=0; $i<$numberDays; $i++)
        {
            $this->robot->collectProductsFrom($barn);
            $this->robot->putFoodIn($fridge);
        }
    }

    // вывод информации об животных в хлеву
    public function printAnimalInfo(): void
    {
        echo '# The farm has animals: '.PHP_EOL;
        $this->robot->getAnimalInfo($this->barn);
    }

    // вывод информации об продуктах в холодильнике
    public function printProductsInfo(): void
    {
        echo '# The farm has products: '.PHP_EOL;
        $this->robot->getProductsInfo($this->fridge);
    }
}