<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/shop.css">

<?php
include_once('includes/navbar.php');
?>

<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?> 
    <!-- <div class="page-header">
        <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to ChopBar.</h3>
    </div> -->

<br>

<body>

<div class="container p-2">

    <div class="row shoprow">
    <div class="col-3">
    <a href="products.php">
    <div class="card" >
    <div class="card-body two">
     <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true" href=""></i>
    </div>
    <div class="p-2"><b>Blue Desk Lamp</b> <p class="price d-flex align-items-center">₦50,000</p></div>
    </div></a>
    </div>

    <div class="col-3">
    <a href="products.php">
    <div class="card" >
    <div class="card-body three">
     <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
    </div>
    <div class="p-2"><b>Black Chair</b> <p class="price d-flex align-items-center">₦50,000</p></div>
    </div></a>
    </div>

    <div class="col-3">
    <a href="products.php">
    <div class="card" >
    <div class="card-body four">
     <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
    </div>
    <div class="p-2"> <b>White Sofa</b> <p class="price d-flex align-items-center">₦50,000</p></div>
    </div></a>
    </div>

    <div class="col-3">
    <a href="products.php">
    <div class="card" >
    <div class="card-body eleven">
      <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
    </div>
    <div class="p-2"><b>Combo Shelf</b> <p class="price d-flex align-items-center">₦240,000</p></div>
    </div></a>
    </div>
<div class="w-100"></div>
        <br><br><br>
    <div class="col-3">
    <a href="products.php">
    <div class="card" >
    <div class="card-body five">
     <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
    </div>
    <div class="p-2"> <b>Crystal Lamp</b> <p class="price d-flex align-items-center">₦90,000</p></div>
    </div></a>
    </div>

    <div class="col-3">
    <a href="products.php">
    <div class="card" >
    <div class="card-body six">
     <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
    </div>
    <div class="p-2"> <b>Senator Bed</b> <p class="price d-flex align-items-center">₦350,000</p></div>
    </div></a>
    </div>

    <div class="col-3">
    <a href="products.php">
        <div class="card" >
    <div class="card-body seven">
     <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
    </div>
    <div class="p-2"> <b>White Lamp</b> <p class="price d-flex align-items-center">₦90,000</p></div>
    </div></a>
    </div>

    <div class="col-3">
    <a href="products.php">
    <div class="card" >
    <div class="card-body twelve">
      <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
    </div>
    <div class="p-2"><b>Book Cases</b> <p class="price d-flex align-items-center">₦190,000</p></div>
    </div></a>
    </div>
<div class="w-100"></div>
        <br><br><br>
    <div class="col-3">
    <a href="products.php">
    <div class="card" >
    <div class="card-body eight">
      <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
    </div>
    <div class="p-2"> <b>Parlour Chair</b> <p class="price d-flex align-items-center">₦50,000</p></div>
    </div></a>
    </div>

    <div class="col-3">
    <a href="products.php">
    <div class="card" >
    <div class="card-body nine">
     <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
    </div>
    <div class="p-2"> <b>Deluxe Bed</b> <p class="price d-flex align-items-center">₦550,000</p></div>
    </div></a>
    </div>

    <div class="col-3">
    <a href="products.php">
    <div class="card" >
    <div class="card-body ten">
     <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
    </div>
    <div class="p-2"> <b>Blue Chair</b> <p class="price d-flex align-items-center">₦50,000</p></div>
    </div></a>
    </div>

  <div class="col-3">
  <a href="products.php">
  <div class="card" >
  <div class="card-body thirteen">
    <i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
  </div>
  <div class="p-2"><b>Bed</b> <p class="price d-flex align-items-center">₦400,000</p></div>
  </div></a>
  </div>
  <div class="w-100"></div>
  <br><br><br>
<div class="col-3">
<a href="products.php">
<div class="card" >
<div class="card-body five">
<i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
</div>
<div class="p-2"> <b>Crystal Lamp</b> <p class="price d-flex align-items-center">₦90,000</p></div>
</div></a>
</div>

<div class="col-3">
<a href="products.php">
<div class="card" >
<div class="card-body six">
<i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
</div>
<div class="p-2"> <b>Senator Bed</b> <p class="price d-flex align-items-center">₦350,000</p></div>
</div></a>
</div>

<div class="col-3">
<a href="products.php">
  <div class="card" >
<div class="card-body seven">
<i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
</div>
<div class="p-2"> <b>White Lamp</b> <p class="price d-flex align-items-center">₦90,000</p></div>
</div></a>
</div>

<div class="col-3">
<a href="products.php">
<div class="card" >
<div class="card-body fourteen">
<i class="fa fa-shopping-bag fa-2x bag-icon" aria-hidden="true"></i>
</div>
<div class="p-2"><b>Wire Frame Decor</b> <p class="price d-flex align-items-center">₦80,000</p></div>
</div></a>
</div>

</div></div>

<br>
</body>

<?php
    include_once('includes/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
