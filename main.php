<?php

require_once 'Market.php';
require_once 'Farm.php';

// покупка на рынке 10 коров и 20 куриц
$market = new Market();

$cows = $market->buyAnimal('Cow',10);
$chicken = $market->buyAnimal('Chicken',20);

$animals = array_merge($cows,$chicken);

// помещение животных на ферме
$farm = new Farm();
$farm->addNewAnimalInBarn($animals);
echo PHP_EOL.'*** 1 week has passed ***'.PHP_EOL;
$farm->printAnimalInfo();

// симуляция 1-ой недели
$numberDays = 7;
$farm->startSimulation($numberDays);
$farm->printProductsInfo();

// покупка на рынке ещё 1 коровы и 5 кур
$cows = $market->buyAnimal('Cow',1);
$chicken = $market->buyAnimal('Chicken',5);

$animals = array_merge($cows,$chicken);

// добавление новых животных на ферму
$farm->addNewAnimalInBarn($animals);
echo PHP_EOL.'*** 2 week has passed ***'.PHP_EOL;
$farm->printAnimalInfo();

// симуляция 2-ой недели
$numberDays = 7;
$farm->startSimulation($numberDays);
$farm->printProductsInfo();