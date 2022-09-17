<?php

// абстрактное животное
abstract class Animal
{
    // получить созданный продукт
    abstract public function getFood();

    // получить регистрационный номер
    abstract public function getId();

    // изменить регистрационный номер
    abstract public function setId(string $id);

}