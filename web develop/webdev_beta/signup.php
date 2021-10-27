<?
  include 'authentication.php';
  if(isset($_COOKIE['username']) && isset($_COOKIE['token'])){
    header("Location: home.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signup</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">-->

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signup.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signup">
  <form action="auth.php" method="POST">
    <input type="hidden" name="auth_type" value="signup">
    <!-- <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">Please signup :)</h1>
    <?
        if(isset($_GET['error']) and $_GET["error"]==1){
          ?>
        <div class="alert alert-warning" role="alert">
          <?
          $error_m="Username is alredy taken. Cannot signup!";
            if(isset($_GET['error_m']) and str_contains($_GET['error_m'],'user_name')){
              echo $error_m;
            }elseif(str_contains($_GET['error_m'],'user_mobile_number')){
              echo $error_m="Mobile number is alredy registerd. Please Login! ";
            }else
            echo $error_m=$_GET['error_m'];
          ?>
        </div>
    
    <?php
        }
    ?>

    <div class="form-floating">
      <input required maxlength="30" type="text" name="username" class="form-control" id="floatingInput" placeholder="username" value='<?echo isset($_GET['us'])? $_GET['us']:"";?>'>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input required maxlength="30" type="text" name="fullname" class="form-control" id="floatingInput" placeholder="fullname" value='<?echo isset($_GET['fn'])? $_GET['fn']:"";?>'>
      <label for="floatingInput">Fullname</label>
    </div>
    <br>
    <div class="form-floating">
      <input required minlength="7" maxlength="10" type="tel" name="mobile_number" class="form-control" id="floatingInput" placeholder="mobile number" value='<?echo isset($_GET['mob'])? $_GET['mob']:"";?>'
      >
      <label for="floatingInput">Mobile number</label>
    </div>
    <div class="form-floating">
      <input required minlength="8" maxlength="16" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Signup</button>
    </div>
    <br>
    <a class="w-100 btn btn-lg btn-success" href="login.php">Login</a>
    <p class="mt-5 mb-3 text-muted">&copy; GopiKrishnan</p>
  </form>
</main>


    
  </body>
</html>
