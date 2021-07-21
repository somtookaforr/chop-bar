<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/motivation.css">
<link rel="icon" href="assets/img/mainlogo.png">

    <?php
    include_once('includes/navbar.php');
    ?>

    <?php
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
    ?> 

<body style="overflow-x: hidden">
    <section class="">
<br>
<div class="text-center">
    <h5>MOTIVATION</h5>
</div>   

<br>
<div class="card divcard p-2">
<br>
<div class="p-3">
    <img src="assets/img/unnamed.jpg" alt="John" width="25%" class="user">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>

<div class="p-3">
    <img src="assets/img/unnamed.jpg" alt="John" width="25%" class="user">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>

<div class="p-3">
    <img src="assets/img/unnamed.jpg" alt="John" width="25%" class="user">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>

<div class="p-3">
    <img src="assets/img/unnamed.jpg" alt="John" width="25%" class="user">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>

</div>

    <!-- Use col-{breakpoint}-auto classes to size columns based on the natural width of their content.
    eg; 'col-md-auto' --> 
    <!-- 'offset-md-4' for grid spacing -->

    </div>
    </section>
<br>
</body>

<?php
    include_once('includes/footer.php');
 ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
