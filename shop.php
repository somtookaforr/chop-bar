<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/shop.css">
<link rel="icon" href="assets/img/mainlogo.png">

<?php
    include_once('includes/navbar.php');        
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    ?> 
<body>

<div class="container padding mt-5" style="margin-bottom: -3rem">
    <div class="row shoprow">
    <div class="col-lg-3 col-sm-6 col-6">
    <a href="product1.php">
    <div class="card card_one" >
    <div class="card-body five">
     <i class="fa fa-shopping-bag bag-icon" aria-hidden="true"></i>
    </div>
    </div></a>
    <div class="p-2 padding text-dark"> <b>Barbell Rack</b> <p class="price d-flex align-items-center">₦120,000</p></div>
    </div>

    <div class="col-lg-3 col-sm-6 col-6">
    <a href="product2.php">
    <div class="card card_two" >
    <div class="card-body six">
     <i class="fa fa-shopping-bag bag-icon" aria-hidden="true"></i>
    </div>
    </div></a>
    <div class="p-2 padding text-dark"> <b>Cross Whey Protein</b> <p class="price d-flex align-items-center">₦25,000</p></div>
    </div>

    <div class="col-lg-3 col-sm-6 col-6">
    <a href="product3.php">
        <div class="card card_three" >
    <div class="card-body seven">
     <i class="fa fa-shopping-bag bag-icon" aria-hidden="true"></i>
    </div>
    </div></a>
    <div class="p-2 padding text-dark"> <b>Fitbit Inspire 2</b> <p class="price d-flex align-items-center">₦40,000</p></div>
    </div>

    <div class="col-lg-3 col-sm-6 col-6">
    <a href="product4.php">
    <div class="card card_four" >
    <div class="card-body twelve">
      <i class="fa fa-shopping-bag bag-icon" aria-hidden="true"></i>
    </div>
    </div></a>
    <div class="p-2 padding text-dark"><b>Gym Gloves</b> <p class="price d-flex align-items-center">₦10,000</p></div>
    </div>
  </div></div>
</body>

<?php
    include_once('includes/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
