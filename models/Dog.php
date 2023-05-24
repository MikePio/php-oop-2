<?php

require_once __DIR__ . '/PetProduct.php';

//* extends indica che Dog è figlio di PetProduct
class Dog extends PetProduct {
  public $netWeight;
  public $ingredients;
  public $characteristics;
  public $dimensions;

  public function __construct($_title, $_category, $_price){
    //* ereditati dal genitore PetProduct
    parent::__construct($_title, $_category, $_price);

    //? UTILE???????????????????????????????????????????????????????????????????
    // $this->setNetWeight('');
    // $this->setIngredients('');
    // $this->setCharacteristics('');
    // $this->setDimensions('');
  }

  //SET
  public function setNetWeight($_netWeight){
    $this->netWeight = $_netWeight;
  }
  public function setIngredients($_ingredients){
    $this->ingredients = $_ingredients;
  }
  public function setCharacteristics($_characteristics){
    $this->characteristics = $_characteristics;
  }
  public function setDimensions($_dimensions){
    $this->dimensions = $_dimensions;
  }
  
  //GET
  public function getNetWeight(){
    return $this->netWeight;
  }
  public function getIngredients(){
    return $this->ingredients;
  }
  public function getCharacteristics(){
    return $this->characteristics;
  }
  public function getDimensions(){
    return $this->dimensions;
  }








}












?>