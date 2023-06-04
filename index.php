<?php

require_once __DIR__ . '/models/PetProduct.php';
require_once __DIR__ . '/models/Bird.php';
require_once __DIR__ . '/models/Cat.php';
require_once __DIR__ . '/models/Dog.php';
require_once __DIR__ . '/models/Fish.php';

//! non si può scrivere in questo modo
// $dogCrunchyBites = new Dog('Crunchy Bites', 'Dogs', '€43,99', '545g', ['prosciutto, riso']);
//* da PetProduct.php
$dogCrunchyBites = new Dog('Crunchy Bites', 'Dogs', '€43,99');

//* da Dog che è il figlio di PetProduct.php
$dogCrunchyBites->setNetWeight('545g');
$dogCrunchyBites->setIngredients(['Ham', 'Rice']);

//* Stampo l'oggetto (il prodotto)
var_dump($dogCrunchyBites);

// Cibo per cani 2
$dogSalmonPeas = new Dog('Salmon and Peas', 'Dogs', '€44,99');
$dogSalmonPeas->setNetWeight('600g');
$dogSalmonPeas->setIngredients(['Salmon', 'Peas']);
// Cibo per gatti
$catChicken = new Cat('Chicken for cats', 'Cats', '€44,99');
$catChicken->setNetWeight('400g');
$catChicken->setIngredients('Chicken');
// Mangime per pesci
$fishFeed = new Fish('Fish feed', 'Fishes', '€2,95');
$fishFeed->setNetWeight('30g');
$fishFeed->setIngredients(['Cereals', 'Yeasts', 'Algae']);
// Voliera in legno
$birdAviary = new Bird('Bird aviary', 'Birds', '€184,99');
$birdAviary->setMaterials('Wood');
$birdAviary->setDimensions('83 x 67x 153');
// Kong classic
$dogToy = new Dog('Kong classic, Dog toy', 'Dogs', '€13,49');
$dogToy->setCharacteristics('Floats and bounces');
$dogToy->setDimensions('8,5 cm x 10 cm');
// Topo di peluche
$catPlushMouse = new Cat('Plush mouse, Cat toy', 'Cats', '€4,99');
$catPlushMouse->setCharacteristics('Soft with rope tail');
$catPlushMouse->setDimensions('8,5 cm x 10 cm');
// Acquario
$fishAquarius = new Fish('Aquarius', 'Fishes', '€55,99');
$fishAquarius->setMaterials(['Glass', 'Steel', 'Plastic']);
$fishAquarius->setDimensions('L23 cm x W10 cm x H27,5 cm');

// var_dump($dogSalmonPeas);
// var_dump($catChicken);
// var_dump($fishFeed);
// var_dump($birdAviary);
// var_dump($dogToy);
// var_dump($catPlushMouse);
// var_dump($fishAquarius);

$products = [

  $dogCrunchyBites,
  $dogSalmonPeas,
  $catChicken,
  $fishFeed,
  $birdAviary,
  $dogToy,
  $catPlushMouse,
  $fishAquarius,


];

//* Stampo tutti gli oggetti (i prodotti)
var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font-awesome -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <title>Pet Shop</title>
</head>

<body class="bg-dark text-white">

  <i class="fa-solid fa-crow"></i>
  <i class="fa-solid fa-dog"></i>
  <i class="fa-solid fa-cat"></i>
  <i class="fa-solid fa-fish"></i>


  <header class="bg-dark text-white text-start p-5">
    <h1>Pet Shop</h1>
  </header>

  <div class="container d-flex flex-wrap align-items-start my-5">


  </div>

  <footer class="bg-dark text-white text-center py-5">
    <a href="https://github.com/MikePio" style="color:white;">
      <div>By MikePi</div>
    </a>
  </footer>

</body>

</html>