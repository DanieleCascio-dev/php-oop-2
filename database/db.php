<?php

require_once __DIR__ . "/../Models/Product.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Toys.php";


$dry_food = new Food("Dog","assets/dog.png");
$dry_food->setName("Dry Food baby");
$dry_food->setPrice(9.99);
/* $dry_food->setCategory("dog"); */
$dry_food->setImage("assets/dry_food.png");
$dry_food->setWeight(8);

var_dump($dry_food);

$dry_food2 = new Food("Cat","assets/cat.png");
$dry_food2->setName("Dry Food baby");
$dry_food2->setPrice(8.99);
/* $dry_food2->setCategory("cat"); */
$dry_food2->setImage("assets/dry_food.png");
$dry_food2->setWeight(4);

var_dump($dry_food2);

$toy1 = new Toys("Dog","assets/dog.png");
$toy1->setName("Rubber Ball");
$toy1->setPrice(3.99);
/* $toy1->setCategory("Dog"); */
$toy1->setImage("assets/rubber_ball.png");
$toy1->setMaterial("Rubber");

var_dump($toy1);

$toy2 = new Toys("Cat","assets/cat.png");
$toy2->setName("Mouse");
$toy2->setPrice(5.99);
$toy2->setImage("assets/mouse_toy.png");
$toy2->setMaterial("Plastic");

var_dump($toy2);