<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/cart.css">
<link rel="icon" href="assets/img/mainlogo.png">
    <title>Document</title>

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
      <h4 align="right" class="cartbtn">
          <span class="price" style="color:black">
            <i class="fa fa-shopping-cart" style="color: orange;"></i>
            <!-- Counting rows in DB -->
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
      </div>
    </div>
  </div>
</nav> 

<table class="table table-borderless table-hover" border="1" style="margin-top: -1rem;">
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
      include_once("includes/product_db.php");

    $records = mysqli_query($link,"SELECT * FROM cart"); // fetch data from database

    while($data = mysqli_fetch_array($records)){
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td><img src=".$data['image']." width='150' height='150''></td>";
    echo "<td>".$data['product_name']."</td>";
    echo "<td>".$data['price']."</td>";
    echo "<td><a class='btn btn-danger' href='delete.php?id=".$data['id']."'>Delete</a></td>"; 
    echo "</tr>";
    }
    ?>
</table>


        <p align="right" style="margin-right: 12rem">Total = <span class="price" style="color:black">
        <b style="font-size: 22px">
        ₦
        <!-- Sum of Columns -->
      <?php
        include_once('includes/config.php');
        $result = mysqli_query($link, 'SELECT SUM(price) AS total FROM cart'); 
        $row = mysqli_fetch_assoc($result); 
        $sum = $row['total'];
        echo $sum;
        ?>
      </b></span></p>
       


    <div class="footbtn" align="center">
    <a href="shop.php" class="btn btn-dark">Continue Shopping</a>
    <a href="checkout.html" class="btn btn-warning">Proceed To Checkout</a>
    </div>
    <!-- <tr>
      <td><?php echo $data['id']; ?></td>
      <td><img src="<?php echo $data['image']; ?>" width="150" height="150"></td>
      <td><?php echo $data['product_name']; ?></td>
      <td><?php echo $data['price']; ?></td>
      <td><?php echo $data; ?><a class="btn btn-dark" href='delete.php?id=".$data['id']."'>Delete</a></td>
    </tr>	 -->
