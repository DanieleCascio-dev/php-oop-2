<?php
require_once __DIR__ . "/Category.php";

class Product extends Category
{
  protected $name;
  protected $price;
  protected $image;
  protected $category;

  /* NAME */
  public function setName($_name)
  {
    $this->name = $_name;
  }
  public function getName()
  {
    return $this->name;
  }
  
  /* PRICE */
  public function setPrice($_price)
  {
    if($_price > 0 ){
      $this->price = $_price . "€";
    }
  }

  public function getPrice(){
    return $this->price;
  }

}