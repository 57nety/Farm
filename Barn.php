<?php

require_once 'Animal.php';

// хлев
class Barn
{
    private array $animals; // все жиовтные в хлеве
    private array $informationAboutAnimals; // информация о животных

    // конструктор
    public function __construct()
    {
        $this->initBarn();
    }

    // инициализация хлева
    private function initBarn(): void
    {
        $this->animals = [];
        $this->informationAboutAnimals = [];
    }

    // добавление нового животного в хлев
    public function addNewAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
        $this->addNewInfo($animal);
    }

    // получить всех животных из хлева
    public function getAnimals(): array
    {
        return $this->animals;
    }

    // добавить информацию о новом животном
    public function addNewInfo(Animal $animal): void
    {
        $kindOfAnimal = get_class($animal); // вид животного

        if(array_key_exists($kindOfAnimal,$this->informationAboutAnimals))
        {
            $this->informationAboutAnimals[$kindOfAnimal] += 1;
        }
        else
        {
            $this->informationAboutAnimals[$kindOfAnimal] = 1;
        }
    }

    // получить информацию о животных в хлеву
    public function getInfoAboutAnimals(): array
    {
        return $this->informationAboutAnimals;
    }
}