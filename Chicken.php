<?php

require_once 'Animal.php';
require_once 'Egg.php';

// курица
class Chicken extends Animal
{
    private string $id; // регистрационный номер

    // конструктор
    public function __construct()
    {
        $this->initChicken();
    }

    // инициализация курицы
    private function initChicken(): void
    {
        $this->id = 0;
    }

    // получить созданный продукт
    public function getFood(): Egg
    {
        $countEggs = $this->getCountEggs();
        return new Egg($countEggs);
    }

    // получить число снесённых яиц
    public function getCountEggs(): int
    {
        return mt_rand(0,1);
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