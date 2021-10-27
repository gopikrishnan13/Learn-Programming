<?
    include 'authentication.php';
    //signup process
    if(isset($_POST["auth_type"])){
        if($_POST["auth_type"]=="signup"){
            $username=$_POST["username"];
            $fullname=$_POST["fullname"];
            $user_password=$_POST["password"];
            $mobile_number=$_POST["mobile_number"];

            
            $res=do_signup($username,$fullname,$user_password,$mobile_number);
                if($res==1)
                header("Location: verify.php?username=".urlencode($username));
                    else
                header("Location: signup.php?error=1&error_m=".urlencode($res)."&fn=".urlencode($fullname)."&mob=".urlencode($mobile_number)."&us=".urldecode($username));
        }
        //login process
        elseif($_POST["auth_type"]=="login"){
                $username=$_POST["username"];
                $user_password=$_POST["password"];
                $remember=isset($_POST['remember_me'])?$_POST['remember_me']:'0';
                $result=do_login($username,$user_password,$remember);
                if($result==1)
                    header("Location: home.php");
                elseif($result==-1)
                header("Location: login.php?error=-1&uname=".urlencode($username));
                elseif($result==-3){
                    if(logout($username,"logout_auto")){
                        header("Location: login.php?error=-7");
                    }else{
                        header("Location: login.php?error=-3");
                    }
                }
                else
                header("Location: login.php?error=-2");
        }
        //otp verfiy process
        elseif($_POST["auth_type"]=="verify"){
            $username=$_POST['otp_b'];    
            $result=verify($_POST['otp'],$username);
            if($result==1){
                header("Location: login.php?account_active=1");
            }elseif($result== -1){
                header("Location: verify.php?username=".urldecode($username)."&error=-1");
            }elseif($result== -2){
                header("Location: verify.php?username=".urldecode($username)."&error=-2");  
            }elseif($result== -5){
                header("Location: login.php");
            }
            }
        //otp resend process
        elseif($_POST["auth_type"]=="resendotp"){
                $username=$_POST['resend_otp'];
                if($username=='0'){
                    header("Location: login.php");
                }else{
               $result=resend_otp($username);
                if($result==1){
                    header("Location: verify.php?username=".urlencode($username)."&resendotp=1");
                }else
                    header("Location: signup.php");
                }
            //$otp=$_POST['otp'];
            //$username=$_POST['otp_b'];
        }


    }else
        header("Location: login.php")
?>