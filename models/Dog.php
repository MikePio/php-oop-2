<?php

require_once __DIR__ . '/PetProduct.php';

//* extends indica che Dog è figlio di PetProduct
class Dog extends PetProduct {
  public $netWeight;
  public $ingredients;
  public $characteristics;
  public $dimensions;

  public function __construct($_title, $_category, $_price, $_netWeight, $_ingredients, $_characteristics, $_dimensions){
    //* ereditati dal genitore PetProduct
    parent::__construct($_title, $_category, $_price);

    $this->netWeight = $_netWeight;
    $this->ingredients = $_ingredients;
    $this->characteristics = $_characteristics;
    $this->dimensions = $_dimensions;

  }

}












?>