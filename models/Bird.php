<?php

require_once __DIR__ . '/PetProduct.php';

//* extends indica che Bird è figlio di PetProduct
class Bird extends PetProduct {
  public $materials;
  public $dimensions;

  public function __construct($_title, $_category, $_price, $_materials, $_dimensions){
    //* ereditati dal genitore PetProduct
    parent::__construct($_title, $_category, $_price);

    $this->materials = $_materials;
    $this->dimensions = $_dimensions;

  }







}












?>