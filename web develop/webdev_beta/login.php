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
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form action="auth.php" method="POST">
    <!--<img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
    <h1 class="h3 mb-3 fw-normal">Please login :)</h1>
    <?//set successfully accout created message
      if(isset($_GET['account_active'])and $_GET['account_active']=='1'){
    ?>
      <div class="alert alert-success" role="alert">
        account registerd successfully.
    <?}?>
    <?//set aleat message view
      $error_m="something worng!";
    if(isset($_GET['error'])){
      if($_GET['error']=='-1')
        $error_m="Password Worng!";
      elseif($_GET['error']=='-2')
        $error_m="user not found! Please signup.";
      elseif($_GET['error']=='-3')
        $error_m="Something Worng! Please contact admin.";
      elseif($_GET['error']='-7')
        $error_m="Missing Something! Please retype username and password";
    ?>
      <div class="alert alert-danger" role="alert">
    <?  
      echo $error_m;
    }
    ?>  
      </div>

      <input type="hidden" name="auth_type" value="login">
    <div class="form-floating">
      <input required maxlength="30" type="text" name="username" class="form-control" id="floatingInput" placeholder="name" value=<?echo isset($_GET['uname'])?$_GET['uname']:"";?>>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input required minlength="1" maxlength="16" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" name="remember_me" value="1"> Remember me
      </label>
    </div>
    <div>
    <button class="w-100 btn btn-lg btn-success" type="submit">Login</button>
  </div>
    <br>
    <a class="mt-1 w-100 btn btn-lg btn-primary" href="signup.php">Signup</a>  
    <br>
    <p class="mt-5 mb-3 text-muted">&copy; Gopikrishan</p>
  </form>
</main>


    
  </body>
</html>
