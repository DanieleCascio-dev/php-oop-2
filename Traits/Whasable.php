<?php

trait Washable {
  protected $wash = true;

  function isWashable(){
    if($this->wash == true){
      return "Is washable";

    } else {
    return "Is not washable";
  }
}

  /**
   * Get the value of wash
   */ 
  public function getWash()
  {
    return $this->wash;
  }

  /**
   * Set the value of wash
   *
   *
   */ 
  public function setWash($wash)
  {
    $this->wash = $wash;
  }
}