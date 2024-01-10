<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/../Traits/Whasable.php";

class Product
{
  use Washable;
  protected $name;
  protected $price;
  protected $image;
  protected $category;

    /* CATEGORY */
    public function setCategory($_category)
    {
      $this->category = $_category;
    }

    public function getCategory()
    {
      return $this->category;
    }

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
      $this->price = $_price;
    } else{
      throw new Exception("Deve essere un valore positivo!");
    }
  }

  public function getPrice(){
    return $this->price . "€";
  }
  /* IMAGE */
  public function setImage($_image){

    if(is_file($_image)){
      $this->image = $_image;
    }

  }

  public function getImage(){
    
    return $this->image;
  }

  /* CATERGORY */

/*  public function setCategory($_category){
  $this->category = $_category;
 }

 public function getCategory(){
  return $this->category;
 } */

}