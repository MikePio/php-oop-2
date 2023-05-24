<?php

require_once __DIR__ . '/PetProduct.php';

//* extends indica che Fish è figlio di PetProduct
class Fish extends PetProduct {
  public $netWeight;
  public $ingredients;
  public $materials;
  public $dimensions;

  public function __construct($_title, $_category, $_price, $_netWeight, $_ingredients, $_materials, $_dimensions){
    //* ereditati dal genitore PetProduct
    parent::__construct($_title, $_category, $_price);

    $this->netWeight = $_netWeight;
    $this->ingredients = $_ingredients;
    $this->materials = $_materials;
    $this->dimensions = $_dimensions;

  }

}









?>