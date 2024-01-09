<?php

require_once __DIR__ . "/database/db.php";
 require_once __DIR__ . "/partials/head.php" 

?>


<body>
  <div class="container mt-5">
  <h2>E-COMMERCE</h2>
  <!-- CARD -->
  <div class="row d-flex">

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

</div>

</div>
  
</body>


