<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="icon" href="assets/img/mainlogo.png">
<link rel="stylesheet" href="assets/css/user.css">
<title>Chop Bar</title>

<?php include_once('includes/navbar.php');?>
<?php
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    ?> 
<body>    
  
<div class="container">
    <div class="card mt-5">
        <center><img class="my-4" src="assets/img/user.png" height="100px" width="100px" alt="profile picture"></center>
        <b class="mb-3"><?php
                echo htmlspecialchars($_SESSION["username"]);
        ?></b> 

        <a href="logout.php" class="btn btn-danger">Log Out</a>
    </div>
</div>


    <!-- <?php
                $str = '2013-08-21 20:26:12';
                echo date('d M ', strtotime($str));
                echo date('d M Y', strtotime($str));
                echo date('g:i A, l - d M Y', strtotime($str));
    ?> -->
</body>

<?php include_once('includes/footer.php'); ?>
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
