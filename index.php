<?php

require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";

$dry_food = new Food("dog","dog.png");
$dry_food->setName("Dry Food baby");
$dry_food->setPrice(9.99);

var_dump($dry_food);


