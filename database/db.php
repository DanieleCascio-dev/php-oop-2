<?php

require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Product.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Toys.php";
require_once __DIR__ . "/../Models/Kennel.php";

$category1 = new Category('Dog', 'assets/dog.png');
$category2 = new Category('Cat', 'assets/cat.png');

$dry_food = new Food();
$dry_food->setCategory($category1);
$dry_food->setName("Dry Food baby");
$dry_food->setPrice(9.99);
$dry_food->setImage("assets/dry_food.png");
$dry_food->setWeight(8);

/* var_dump($dry_food->getCategory()->get_animal()); */

$dry_food2 = new Food();
$dry_food2->setCategory($category2);
$dry_food2->setName("Dry Food baby");
$dry_food2->setPrice(8.99);
$dry_food2->setImage("assets/dry_food.png");
$dry_food2->setWeight(4);

/* var_dump($dry_food2); */

$toy1 = new Toys();
$toy1->setCategory($category1);
$toy1->setName("Rubber Ball");
$toy1->setPrice(3.99);
$toy1->setImage("assets/rubber_ball.png");
$toy1->setMaterial("Rubber");

/* var_dump($toy1); */

$toy2 = new Toys();
$toy2->setCategory($category2);
$toy2->setName("Mouse");
$toy2->setPrice(5.99);
$toy2->setImage("assets/mouse_toy.png");
$toy2->setMaterial("Plastic");

/* var_dump($toy2); */

$kennel = new Kennel();
$kennel->setCategory($category1);
$kennel->setName("Explore land");
$kennel->setPrice(34.99);
$kennel->setImage("assets/kennel.png");
$kennel->setSize("Medium");

/* var_dump($kennel); */