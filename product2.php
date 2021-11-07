<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/products.css">
<link rel="icon" href="assets/img/mainlogo.png">
<title>Chop-Bar</title>

<?php
include_once('includes/navbar.php');
?>

<?php
      $status="";
      if (isset($_POST['code']) && $_POST['code']!=""){
      $code = $_POST['code'];
      $result = mysqli_query($link,"SELECT * FROM `products` WHERE `code`='$code'");
      $row = mysqli_fetch_assoc($result);
      $name = $row['name'];
      $code = $row['code'];
      $price = $row['price'];
      $image = $row['image'];

      $cartArray = array(
        $code=>array(
        'name'=>$name,
        'code'=>$code,
        'price'=>$price,
        'quantity'=>1,
        'image'=>$image)
      );

      if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
      }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($code,$array_keys)) {
          $status = "<div class='box' style='color:red;'>
          Product is already added to your cart!</div>";	
        } else {
        $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
        $status = "<div class='box'>Product is added to your cart!</div>";
        }

        }
      }
?>

<body style="overflow-x: hidden">
<div class="container">
  <center>
    <div class="pt-4" style="width: 60%">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/img/whey.png" height="520rem" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/whey.png" height="520rem" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/img/whey.png" height="520rem" alt="Third slide">
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
  </center>
    
<br>

    <div class="">
        <h4>Whey Protein</h4>
        <p>Brand: Cross</p>
        <hr>
        <p><b>₦25,000</b> </p>
        <hr>
        <?php
        $result = mysqli_query($link,"SELECT * FROM `products` WHERE `name` = 'Cross Whey Protein'");
    while($row = mysqli_fetch_assoc($result)){
      echo "<div class='product_wrapper'>
          <form method='post' action=''>
          <input type='hidden' name='code' value=".$row['code']." />
          <div class='image' style='display: none;'><img src='".$row['image']."' /></div>
          <div class='name' style='display: none;>".$row['name']."</div>
            <div class='price'>$".$row['price']."</div>
            <a href='shop.php' class='btn btn-dark'>GO BACK</a>
            <input type='submit' class='btn' name='submit' style='background-color: #EF7B45; color: white' value='ADD TO CART'>
            </form>
            </div>";

          }
    mysqli_close($link);
    ?>

    <div class="card pb-4 pt-2" style="margin-bottom: -6rem">
      <div class="container">
        <h4>Details</h4>
        <hr>
          <p>Rock this Throne Of Grace printed hoodie to represent your faith in God's grace.

          The hoodie is made of thick, soft and comfortable hood material and is meant for both male and female.

          Please check our store out for more colours, designs and options.
          Thank you.</p>
      </div> 
    </div>
    <br><br>
<br><br>
    <hr>
        <p><b>Delivery Information</b><br>
            Normally delivered between Thursday 6 Aug and Tuesday 11 Aug.
            Please check exact dates in the Checkout page.
        </p>
        <p><b>Return Policy</b><br>
        Free return within 15 days for special items and 7 days for other eligible items.See more</p>
        </div>
    </div>    
</div>




  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
<?php include_once('includes/footer.php'); ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
