<?
  if(isset($_GET['username'])){
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
    <h1 class="h3 mb-3 fw-normal">Verify</h1>
    <?
       $error_m="Otp resend successfully";
      if(isset($_GET['resendotp']) && $_GET['resendotp'] == '1' ){
    ?>
    <div class="alert alert-success" role="alert">
    <?
      echo $error_m;
    }?>
    <?
      if(isset($_GET['error'])){
        if($_GET['error']=='-1')
          $error_m="Otp experied";
        elseif($_GET['error']=='-2')
          $error_m="invalid otp";
    ?>
      <div class="alert alert-warning" role="alert">
    <?
      echo $error_m;
    }?>
    </div>
    <!--<img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
      <input type="hidden" name="auth_type" value="verify">
    <div class="form-floating">
      <input required minlength=4 maxlength= 4 type="nubmer" name="otp" class="form-control" id="floatingInput" placeholder="otp">
      <label for="floatingInput">Entre Otp</label>
    </div>
    <div>
    <br>
    <button class="w-100 btn btn-lg btn-success" type="submit" name="otp_b" value='<?echo isset($_GET['username'])?$_GET['username']:"0"?>'>Verify</button>
  </div>
  <br>
</form>
<form action="auth.php" method="POST">
  <div>
    <input type="hidden" name="auth_type" value="resendotp">
    <button class="w-100 btn btn-small btn-primary" type="submit" name="resend_otp" value='<?echo isset($_GET['username'])?$_GET['username']:"0";?>'>Resend OTP</button>
  </div>
</form>
</main>


    
  </body>
</html>
<?
}else
  header("location: login.php");
?>