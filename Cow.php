<?php

require_once 'Animal.php';
require_once 'Milk.php';

// корова
class Cow extends Animal
{
    private string $id; // регистрационный номер

    // конструктор
    public function __construct()
    {
        $this->initCow();
    }

    // инициализация коровы
    private function initCow(): void
    {
        $this->id = 0;
    }

    // получить созданный продукт
    public function getFood(): Milk
    {
        $valueMilk = $this->getValueMilk();
        return new Milk($valueMilk);
    }

    // получить объём имеющегося у коровы молока
    public function getValueMilk(): int
    {
        return mt_rand(8,12);
    }

    // получить регистрационный номер
    public function getId(): string
    {
        return $this->id;
    }

    // изменить регистрационный номер
    public function setId(string $id): void
    {
        $this->id = $id;
    }
}