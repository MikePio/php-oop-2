<?php

require_once __DIR__ . '/PetProduct.php';

//* extends indica che Fish è figlio di PetProduct
class Fish extends PetProduct {
  public $netWeight;
  public $ingredients;
  public $materials;
  public $dimensions;

  public function __construct($_title, $_category, $_price, $_image, $_icon){
    //* ereditati dal genitore PetProduct
    parent::__construct($_title, $_category, $_price, $_image, $_icon);



  }

    //SET
    public function setNetWeight($_netWeight){
      $this->netWeight = $_netWeight;
    }
    public function setIngredients($_ingredients){
      $this->ingredients = $_ingredients;
    }
    public function setMaterials($_materials){
      $this->materials = $_materials;
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
    public function getMaterials(){
      return $this->materials;
    }
    public function getDimensions(){
      return $this->dimensions;
    }

}









?>