<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/cart.css">
    <title>Document</title>

<?php
    include_once('includes/navbar.php');
        
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
?> 


<div class="container" style="margin-bottom: -3rem;">
<table class="table table-borderless table-striped mt-2 table-responsive w-100 d-block d-md-table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price(₦)</th>
      <th scope="col"> Action </th>
    </tr>
  </thead>

  <!-- Echoing out from DB -->
    <?php
      include_once("db/product_db.php");

    $records = mysqli_query($link,"SELECT * FROM cart"); // fetch data from database

    while($data = mysqli_fetch_array($records)){
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td><img src=".$data['image']." width='150' height='150''></td>";
    echo "<td>".$data['product_name']."</td>";
    echo "<td>".$data['price']."</td>";
    echo "<td><a class='btn btn-danger' href='deleteCart.php?id=".$data['id']."'>Delete</a></td>"; 
    echo "</tr>";
    }
    ?>
</table>


        <p align="right" style="margin-right: 12rem">Total = <span class="price" style="color:black">
        <b style="font-size: 22px">
        ₦
        <!-- Sum of Columns -->
      <?php
        include_once('db/config.php');
        $result = mysqli_query($link, 'SELECT SUM(price) AS total FROM cart'); 
        $row = mysqli_fetch_assoc($result); 
        $sum = $row['total'];
        echo $sum;
        ?>
      </b></span></p>
       


    <div class="footbtn" align="center">
    <a href="shop.php" class="btn btn-dark">Continue Shopping</a>
    <a href="checkout.html" class="btn" style="background-color: #EF7B45; color: white">Proceed To Checkout</a>
    </div>
</div>

<?php include_once('includes/footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>