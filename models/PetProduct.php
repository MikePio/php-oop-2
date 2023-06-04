<?php

class PetProduct {
  public $title;
  public $category;
  public $price;
  public $image;
  public $icon;


  function __construct($_title, $_category, $_price, $_image, $_icon){
    $this->title = $_title;
    $this->category = $_category;
    $this->price = $_price;
    $this->image = $_image;
    $this->icon = $_icon;
  }

  //GET
  public function getTitle(){
    return $this->title;
  }
  public function getCategory(){
    return $this->category;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getImage(){
    return $this->image;
  }
  public function getIcon(){
    return $this->icon;
  }



}












?>