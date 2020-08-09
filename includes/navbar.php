<body>
<link rel="stylesheet" href="assets/css/navbar.css">
<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
$activePag = basename($_SERVER['PHP_SELF'], ".php");
$activePa = basename($_SERVER['PHP_SELF'], ".php");
?>



<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" style="color:red;font-size:20px;">
  <a class="navbar-brand" href="index.php">
   <div style="display:inline-block;vertical-align:top;margin-top: 1rem;">
     <img src="assets/img/mainlogoo.png" alt="logo" width="50rem" class="logo"><br>
        </div>
        <div style="display:inline-block;margin-top: 1rem;">
        <p class="navlogo">CHOP</p> <p class="underlogo">BAR</p>
        </div>  
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?>">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item <?= ($activePage == 'shop') ? 'active':''; ?>">
        <a class="nav-link" href="shop.php">Shop</a>
      </li>
      <li class="nav-item dropdown <?= ($activePage == 'workout') ? 'active':''; ?>
      <?= ($activePage == 'diet') ? 'active':''; ?>
      <?= ($activePage == 'motivation') ? 'active':''; ?>">
      
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tips
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="workout.php">Workout</a>
          <a class="dropdown-item" href="diet.php">Dietary</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="motivation.php">Motivation</a>
        </div>
      </li>
      <li class="signins">
      <li class="nav-item">
        <?php
        session_start();
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        echo '<li><a href="logout.php" class="nav-link btn btn-warning shopbtn" style="color: white">Log Out</a></li>';
        }?>       
      </li>
      <!-- <li class="nav-item">
        <?php
        if(!isset($_SESSION["loggedin"])){
        echo '<li><a href="login.php" class="nav-link btn btn-warning shopbtn"  style="margin-left: -10rem;color: white;">Log In</a></li>';
        }?>       
      </li> -->
      <li class="nav-item">
        <?php  
        if(!isset($_SESSION["loggedin"])){
        echo '<li><a href="login.php" class="nav-link btn btn-warning shopbtn" style="color: white">Login</a></li>';
        }?>       
      </li>
      <li class="nav-item">
        <?php  
        if(!isset($_SESSION["loggedin"])){
        echo '<li><a href="signup.php" class="nav-link btn btn-warning shopbtn" style="color: white">Sign Up</a></li>';
        }?>       
      </li>
      </li>
      </ul>
  </div>
</nav>
</body>