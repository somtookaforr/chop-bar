
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/products.css">
<link rel="icon" href="assets/img/mainlogo.png">
<title>Document</title>

<body>
    

<nav class="bg">
  <div class="container">
    <div class="row">
      <div class="col">
 <a class="navbar-brand" href="index.php">
      <div style="display:inline-block;vertical-align:top;margin-top: 1rem;">
      <img src="assets/img/mainlogo.png" alt="logo" width="50rem" class="logo"><br>
        </div>
        <div style="display:inline-block;margin-top: 1rem;">
        <p class="navlogo">CHOP</p> <p class="underlogo">BAR</p>
        </div>  
      </a>
      </div>
      <div class="col">
        <a href="cart.php">
      <h4 align="right" class="cartbtn">
          <span class="price" style="color:black">
            <i class="fa fa-shopping-cart" style="color: orange;"></i>
              <?php 
            include_once('includes/config.php');
            if($records = mysqli_query($link,"SELECT * FROM cart"))
            {
                $rowcount = mysqli_num_rows($records);
                printf("%d",$rowcount);
            }
              ?>
          </span>
        </h4>
        </a>
      </div>
    </div>
  </div>
</nav> 


<?php
include_once("includes/product_db.php")
?>
<body>
<div class="row">
    <div class="col-5">
 
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/img/weights.jpg" height="400rem" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/weights.jpg" height="400rem" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/img/weights.jpg" height="400rem" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    </div>
    <div class="col-7">
        <h4>Danami Throne Of Grace Printed Hoodie- Light Grey</h4>
        <p>Brand: Danami | Similar products from Danami</p>
        <hr>
        <p><b>₦80,000</b> </p>
        <hr>
        <p>SELECT VARIATION  Guide</p>
        <form action="" method="post">
<div class="form-group">
        <a href="shop.php" class="btn btn-dark">GO BACK</a>
        <input type="submit" class="btn btn-warning" name="submit" value="ADD TO CART">
    </div>
</form>
        <hr>
        <p>Delivery Information <br>
Normally delivered between Thursday 6 Aug and Tuesday 11 Aug. Please check exact dates in the Checkout page.See more
</p>
<p>Return Policy <br>
Free return within 15 days for Jumia Mall items and 7 days for other eligible items.See more</p>
    </div>
</div>    

<br>
    <div class="card">
        <h4>Project Details</h4>
        <hr>
        <p>Rock this Throne Of Grace printed hoodie to represent your faith in God's grace.

The hoodie is made of thick, soft and comfortable hood material and is meant for both male and female.

Please check our store out for more colours, designs and options at www.jumia.com.ng/danami
Thank you.</p>
    </div>

    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
