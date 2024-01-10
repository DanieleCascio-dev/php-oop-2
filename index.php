<?php

require_once __DIR__ . "/database/db.php";
 require_once __DIR__ . "/partials/head.php" 

?>


<body>
  <div class="container mt-5 mb-5">
  <h2>E-COMMERCE</h2>
  <!-- CARD -->
  <div class="row d-flex gy-3">

  <div class="col-4">
  <div class="card">
  <img src="<?php echo $dry_food->getImage() ?>" class="card-img-top w-75 p-2" alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $dry_food->getName() ?></h5>
    <p class="card-text">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Animal: <?php echo $dry_food->getCategory()->get_animal() ?></li>
        <li class="list-group-item">Price: <?php echo $dry_food->getPrice() ?></li>
        <li class="list-group-item">Weight: <?php echo $dry_food->getWeight() ?></li>
      
       
        
      </ul>
    </p>
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
</div>
</div>

  <div class="col-4">
  <div class="card">
  <img src="<?php echo $dry_food2->getImage() ?>" class="card-img-top w-75 p-2" alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $dry_food2->getName() ?></h5>
    <p class="card-text">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Animal: <?php echo $dry_food2->getCategory()->get_animal() ?></li>
        <li class="list-group-item">Price: <?php echo $dry_food2->getPrice() ?></li>
        <li class="list-group-item">Weight: <?php echo $dry_food2->getWeight() ?></li>
        
      </ul>
    </p>
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
</div>
</div>

  <div class="col-4">
  <div class="card">
  <img src="<?php echo $toy1->getImage() ?>" class="card-img-top w-75 p-2" alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $toy1->getName() ?></h5>
    <p class="card-text">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Animal: <?php echo $toy1->getCategory()->get_animal() ?></li>
        <li class="list-group-item">Price: <?php echo $toy1->getPrice() ?></li>
        <li class="list-group-item">Material: <?php echo $toy1->getMaterial() ?></li>
        <li class="list-group-item">Washable: <?php echo $toy1->isWashable() ?></li>
        
      </ul>
    </p>
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
</div>
</div>

  <div class="col-4">
  <div class="card">
  <img src="<?php echo $toy2->getImage() ?>" class="card-img-top w-75 p-2" alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $toy2->getName() ?></h5>
    <p class="card-text">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Animal: <?php echo $toy2->getCategory()->get_animal() ?></li>
        <li class="list-group-item">Price: <?php echo $toy2->getPrice() ?></li>
        <li class="list-group-item">Material: <?php echo $toy2->getMaterial() ?></li>
        <li class="list-group-item">Washable: <?php echo $toy2->isWashable() ?></li>
        
      </ul>
    </p>
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
</div>
</div>

  <div class="col-4">
  <div class="card">
  <img src="<?php echo $kennel->getImage() ?>" class="card-img-top w-75 p-2" alt="">
  <div class="card-body">
    <h5 class="card-title"><?php echo $kennel->getName() ?></h5>
    <p class="card-text">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Animal: <?php echo $kennel->getCategory()->get_animal() ?></li>
        <li class="list-group-item">Price: <?php echo $kennel->getPrice() ?></li>
        <li class="list-group-item">Size: <?php echo $kennel->getSize() ?></li>
        <li class="list-group-item">Washable: <?php echo $kennel->isWashable() ?></li>
        
      </ul>
    </p>
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
</div>
</div>

</div>

</div>
  
</body>


