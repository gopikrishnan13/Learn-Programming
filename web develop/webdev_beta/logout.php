<?
    include_once 'authentication.php';

    if(isset($_COOKIE['username']) and isset($_COOKIE['token'])){
        logout($_COOKIE['username'],$_COOKIE['token']);
    }
    setcookie('username','',time()-60);
    setcookie('token','',time()-60);
    header("Location: login.php");
?>