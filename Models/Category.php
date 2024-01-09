<?php

class Category
{
  protected $name;
  protected $icon;

  function __construct($_name,$_icon)
  {
    $this->name = $_name;
    $this->icon = $_icon;
  }

  public function set_name($_name){
    if(strlen($_name) < 20);
    $this->name = $_name;
  }

  public function get_name(){
    return $this->name;
  }
}