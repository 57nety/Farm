<?php

require_once 'Cow.php';
require_once 'Chicken.php';

// рынок
class Market
{
    // Покупка живоных на рынке
    public function buyAnimal(string $nameAnimal, int $countAnimals): array
    {
        $animals = [];

        for($i=0; $i<$countAnimals; $i++)
        {
            $animals[] = new $nameAnimal();
        }

        return $animals;
    }
}