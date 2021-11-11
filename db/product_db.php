<?php
include_once('includes/navbar.php');

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

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
        $status = "<div class='alert alert-success' role='alert' style='text-align: center;'>Product is added to your cart!</div>";
      }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($code,$array_keys)) {
          $status = "<div class='alert alert-danger' role='alert' style='text-align: center;'>
          Product is already added to your cart!</div>";	
        } else {
        $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
        $status = "<div class='alert alert-success' role='alert' style='text-align: center;'>Product is added to your cart!</div>";
        }
        }
      }
?>