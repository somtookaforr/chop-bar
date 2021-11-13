<?php
  include_once('includes/navbar.php');
  include_once('db/cart_db.php');        
?>


<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/cart.css">
<link rel="icon" href="assets/img/mainlogo.png">
<title>Chop Bar | Cart</title>
<body>


<?php
  if(isset($_SESSION["shopping_cart"])){
      $total_price = 0;
?>	

<div class="container table-responsive" style="margin-bottom: -3rem;">
  <table class="table table-borderless table-striped mt-2">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Unit Price(₦)</th>
            <th scope="col">Quantity Price(₦)</th>
          <th scope="col"> Action </th>
          </tr>
        </thead>
      <?php		
        foreach ($_SESSION["shopping_cart"] as $product){
      ?>
      <tr>
      <td><img src='<?php echo $product["image"]; ?>' width="100" height="100" /></td>
      <td><?php echo $product["name"]; ?><br />
      </td>
      <td>
      <form method='post' action=''>
        <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
        <input type='hidden' name='action' value="change" />
        <select name='quantity' class='quantity form-control' onchange="this.form.submit()">
        <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
        <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
        <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
        <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
        <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
        </select>
      </form>
      </td>
      <td><?php echo "₦".$product["price"]; ?></td>
      <td><?php echo "₦".$product["price"]*$product["quantity"]; ?></td>
      <td>
        <form method='post' action=''>
          <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
          <input type='hidden' name='action' value="remove" />
          <button type='submit' class='remove btn btn-danger'>Remove</button>
        </form>
      </td>
      </tr>
      <?php
        $total_price += ($product["price"]*$product["quantity"]);
      }
      ?>
  </table>		

  <div colspan="5" align="right">
    <strong>TOTAL: <?php echo "₦".$total_price; ?></strong>
  </div>

  <div>
      <a class="btn" style='background-color: #EF7B45; color: white' href="checkout.php">Checkout</a>
  </div>
      <?php
    }else{
      echo
        "<center>
          <div class='bg-danger mt-5 text-light' style='width: 30%; height: 18%;'>
          <h3 style='font-size: 18px; padding-top: 3rem'>Your cart is empty!</h3>
          </div>
        </center>";
      }
    ?>
    
</div>

  <?php include_once('includes/footer.php'); ?>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>