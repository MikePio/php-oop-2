<?php

require_once __DIR__ . '/PetProduct.php';

//* extends indica che Bird è figlio di PetProduct
class Bird extends PetProduct {
  public $materials;
  public $dimensions;

  public function __construct($_title, $_category, $_price){
    //* ereditati dal genitore PetProduct
    parent::__construct($_title, $_category, $_price);



  }

  //SET
  public function setMaterials($_materials){
    $this->materials = $_materials;
  }
  public function setDimensions($_dimensions){
    $this->dimensions = $_dimensions;
  }
  
  //GET
  public function getMaterials(){
    return $this->materials;
  }
  public function getDimensions(){
    return $this->dimensions;
  }





}
