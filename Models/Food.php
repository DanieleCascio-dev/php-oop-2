<?php

require_once __DIR__ . "/Product.php";

class Food extends Product {
  protected $weigth;

  public function setWeight($_weight){
    if($_weight < 100 && $_weight > 0 ){
      $this->weigth = $_weight;
    }
  }

  public function getWeight(){
    return $this->weigth . "Kg";
  }
}