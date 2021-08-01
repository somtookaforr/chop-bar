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

<body>
    <section class="">
<br>
<div class="text-center">
    <h5>MOTIVATION</h4>
</div>   

<br>
<div class="card divcard p-2">
<br>
<div class="p-3">
    <img src="assets/img/unnamed.jpg" alt="John" width="25%" class="user">
    <h4 class="card-title mt-3">- Arnold Schwarzenegger</h4>
    <h6 class="card-text mb-5">
        “The last three or four reps is what makes the muscle grow. This area of pain divides a champion from someone who is not a champion.”
    </h6>
</div>

<div class="p-3">
    <img src="assets/img/unnamed.jpg" alt="John" width="25%" class="user">
    <h4 class="card-title mt-3">– Vince Lombardi</h4>
    <h6 class="card-text mb-5">
        ¨Most people fail, not because of lack of desire, but, because of lack of commitment.¨ 
    </h6>
</div>

<div class="p-3">
    <img src="assets/img/unnamed.jpg" alt="John" width="25%" class="user">
    <h4 class="card-title mt-3"> – William Shakespeare</h4>
    <h6 class="card-text mb-5">
        ¨Our bodies are our gardens – our wills are our gardeners.¨
    </h6>
</div>

<div class="p-3">
    <img src="assets/img/unnamed.jpg" alt="John" width="25%" class="user">
    <h4 class="card-title mt-3">- Vidal Sassoon</h4>
    <h6 class="card-text mb-5">
        “The only place where success comes before work is in the dictionary.”
    </h6>
</div>

<div class="p-3">
    <img src="assets/img/unnamed.jpg" alt="John" width="25%" class="user">
    <h4 class="card-title mt-3"> – John F. Kennedy</h4>
    <h6 class="card-text mb-5">
        ¨Physical fitness is not only one of the most important keys to a healthy body, it is the basis of dynamic and creative intellectual activity.¨
    </h6>
</div>

<div class="p-3">
    <img src="assets/img/unnamed.jpg" alt="John" width="25%" class="user">
    <h4 class="card-title mt-3"> – Mike Ditka</h4>
    <h6 class="card-text mb-5">
     ¨Here’s what I tell anybody and this is what I believe. The greatest gift we have is the gift of life. <br> We understand that. That comes from our Creator. We’re given a body. Now you may not like it, but you can maximize that body the best it can be maximized.¨
    </h6>
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
