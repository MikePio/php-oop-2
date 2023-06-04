<?php

require_once __DIR__ . '/models/PetProduct.php';
require_once __DIR__ . '/models/Bird.php';
require_once __DIR__ . '/models/Cat.php';
require_once __DIR__ . '/models/Dog.php';
require_once __DIR__ . '/models/Fish.php';

//! non si può scrivere in questo modo
// $dogCrunchyBites = new Dog('Crunchy Bites', 'Dogs', '€43,99', '545g', ['prosciutto, riso']);
//* da PetProduct.php
$dogCrunchyBites = new Dog('Crunchy Bites', 'Dogs', '€43,99', 'img/img1.jpg', 'fa-solid fa-dog');

//* da Dog che è il figlio di PetProduct.php
$dogCrunchyBites->setNetWeight('545g');
$dogCrunchyBites->setIngredients(['Ham', 'Rice']);

//* Stampo l'oggetto (il prodotto)
// var_dump($dogCrunchyBites);

// Cibo per cani 2
$dogSalmonPeas = new Dog('Salmon and Peas', 'Dogs', '€44,99', 'img/img2.webp', 'fa-solid fa-dog');
$dogSalmonPeas->setNetWeight('600g');
$dogSalmonPeas->setIngredients(['Salmon', 'Peas']);
// Cibo per gatti
$catChicken = new Cat('Chicken for cats', 'Cats', '€44,99', 'img/img3.png', 'fa-solid fa-cat');
$catChicken->setNetWeight('400g');
$catChicken->setIngredients('Chicken');
// Mangime per pesci
$fishFeed = new Fish('Fish feed', 'Fishes', '€2,95', 'img/img4.png', 'fa-solid fa-fish');
$fishFeed->setNetWeight('30g');
$fishFeed->setIngredients(['Cereals', 'Yeasts', 'Algae']);
// Voliera in legno
$birdAviary = new Bird('Bird aviary', 'Birds', '€184,99', 'img/img5.png', 'fa-solid fa-crow');
$birdAviary->setMaterials('Wood');
$birdAviary->setDimensions('83 x 67x 153');
// Kong classic
$dogToy = new Dog('Kong classic, Dog toy', 'Dogs', '€13,49', 'img/img6.jpg', 'fa-solid fa-dog');
$dogToy->setCharacteristics('Floats and bounces');
$dogToy->setDimensions('8,5 cm x 10 cm');
// Topo di peluche
$catPlushMouse = new Cat('Plush mouse, Cat toy', 'Cats', '€4,99', 'img/img7.jpg', 'fa-solid fa-cat');
$catPlushMouse->setCharacteristics('Soft with rope tail');
$catPlushMouse->setDimensions('8,5 cm x 10 cm');
// Acquario
$fishAquarius = new Fish('Aquarius', 'Fishes', '€55,99', 'img/img8.jpg', 'fa-solid fa-fish');
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
// var_dump($products);

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

  <header class="bg-dark text-white text-start p-5">
    <h1>Pet Shop</h1>
  </header>

  <main>

<div class="container d-flex flex-wrap align-items-start my-5">

  <!-- //* stampare con un ciclo foreach l'array $products -->
  <?php  foreach ($products as $product) : ?>
    <div class="text-black my-3 ms-4 me-4" style="width: calc(100%/3.38);">
      <div class="card" style="min-height: 575px;">
        <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="<?php echo $product->getTitle() ?>" style="height: 405px;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product->getTitle() ?></h5>
          <p class="card-text mb-1">Category: <i class="<?php echo $product->getIcon() ?>"></i> <?php echo $product->getCategory() ?></p>
          <p class="card-text mb-1">Price: <?php echo $product->getPrice() ?></p>
        </div>
      </div>
    </div>
  <?php  endforeach; ?>
</div>

</main>

  <footer class="bg-dark text-white text-center py-5">
    <a href="https://github.com/MikePio" style="color:white;">
      <div>By MikePi</div>
    </a>
  </footer>

</body>

</html>