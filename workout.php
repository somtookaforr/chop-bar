<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/workout.css">
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

    <br>
<div class="text-center">
    <h5>WORKOUT TIPS</h5>
</div>   
    
<div class="container">
    <div class="row">
        <div class="col">
        <div class="card">
    <div class="card-body workone">
    <h5 class="card-title" style="color: #ef7b45">Abdominals</h5>
    <p class="card-text">
        <b style="color: #ef7b45">Stay in control.</b> Don't use momentum instead of your abs to do the work. Keep your middle muscles contracted throughout the entire range of motion. <br><br>
        <b style="color: #ef7b45">Fire 'em up.</b> To engage the deepest muscles of your abs during any exercise-or just sitting in a chair-try this: Inhale, then exhale and pull your belly button toward your spine, without hunching your shoulders forward (don't just suck in your belly).
    </p>
    </div>
    </div>
        </div>
        <div class="col">
        <div class="card">
    <div class="card-body worktwo">
    <h5 class="card-title" style="color: #ef7b45">Cardio</h5>
    <p class="card-text">
        <b style="color: #ef7b45">Always warm up and cool down.</b> This exercise tip will help you maintain your mobility and flexibility and prevent injury. Take 5-10 minutes to gradually raise your heart rate at the beginning of a workout and lower it afterward. Before strength training, do low-intensity cardio that recruits larger muscle groups like your legs, back, and core.
    </p>
    </div>
    </div>
        </div>
        <div class="col">
        <div class="card">
    <div class="card-body workthree">
    <h5 class="card-title" style="color: #ef7b45">Strength Training</h5>
    <p class="card-text">
        <b style="color: #ef7b45">Lift like you mean it.</b> If you can do the maximum number of suggested reps (usually 10-12) without feeling fatigued, add pounds (10-15 percent at a time). If you can't complete the minimum number of suggested reps (usually 8), reduce the weight in 10 percent increments until you can. Your last 1 or 2 reps should always feel tough, but doable.
    </p>
    </div>
    </div>
        </div>
</div>
</div>
<br><br>
    
</body>

<?php
    include_once('includes/footer.php');
    ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
