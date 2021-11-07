<?php
require_once "db/config.php";
 
$product_name = "Danami Throne Of Grace Printed Hoodie- Light Grey";
$product_type = "clothing";
$price = "8000";
$err = "";
$product_name_err = "";
?>

<form action="" method="post">
<div class="form-group">
    <input type="hidden" name="product_name"  value="">
    </div>

    <div class="form-group">
    <input type="hidden" name="product_type" value="">
    </div>

    <div class="form-group">
    <input type="hidden" name="price" value="">
    </div>
</form>


<?php
if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3  
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

 
    $dst = "./image_db/".$var3.$fnm;  // storing image path into the {image_db} folder with 32 characters hex number and file name
    $dst_db = "image_db/jelmer-assink-gzeTjGu3b_k-unsplash.jpg"; // storing image path into the database with 32 characters hex number and file name

    // move_uploaded_file($_FILES["image"]["product_name"]["product_type"]["price"],$dst);  // move image into the {image_db} folder with 32 characters hex number and image name
	
    $check = mysqli_query($link,"INSERT INTO cart (image,product_name,product_type,price) values('$dst_db','$product_name','$product_type','$price')");  // executing insert query
		
    if($check)
    {
        // header("location: cart.php");
        header("location: carter.php");

        echo '<script type="text/javascript"> alert("Data Inserted Successfully!"); </script>';  // alert message
      
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
    // mysqli_close($link);
}

?>