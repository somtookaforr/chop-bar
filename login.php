<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, maximum-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/user-forms.css">
<link rel="icon" href="assets/img/mainlogo.png">

<body class="login">
<?php include_once('db/login_db.php') ?>
<body class="body" style="overflow: hidden;">
        
<div class="container logincon">
<div class="row">

        <div class="col logo">
        <div style="display:inline-block;vertical-align:top;margin-top: 1rem;">
        <img src="assets/img/mainlogoo.png" alt="logo" width="150rem" class="mainlogo"><br>
        </div>
        <div style="display:inline-block;margin-top: 1rem;">
        <p class="navlogo">CHOP</p> <p class="underlogo">BAR</p>
        </div> 
        </div>    

        <div class="col loginform">
        <div class="card">
        <div class="card-body">

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
        <label for="exampleInputEmail1">Email</label>
        <input name="username" type="text" class="form-control" placeholder="Email" value="<?php echo $username; ?>">
        <span class="help-block text-danger"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="help-block text-danger"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group" align="center">
        <input type="submit" class="btn" style="background-color: #EF7B45; color: white" value="Login">     
        <a href="index.php" class="btn btn-dark">Cancel</a>
        </div>
        <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
        </form>

        </div>
        </div>
        </div>
        </div>
        </div>
    
</body>
