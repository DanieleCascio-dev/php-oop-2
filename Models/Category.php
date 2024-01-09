<?php

class Category
{
  protected $animal;
  protected $icon;

  function __construct($_animal,$_icon)
  {
    $this->animal = $_animal;
    if(is_file($_icon)){
      $this->icon = $_icon;
    }
  }

  public function set_animal($_animal){
    if(strlen($_animal) < 20);
    $this->animal = $_animal;
  }

  public function get_animal(){
    return $this->animal;
  }

  public function get_icon(){
    return $this->icon;
  }
}