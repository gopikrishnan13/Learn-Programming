<?
    include_once 'post.php';
    
    $db_name="lahtp_3";
    $server_name="localhost";
    $server_password="Gooopi87!";
    $sever_user_name="gopi";
    $db_connection=NULL;
    date_default_timezone_set("Asia/Calcutta");    

    function get_db_connection(){
        global $db_name;
        global $server_name;
        global $server_password;
        global $sever_user_name;
        global $db_connection; 
        
        if($db_connection!=NULL){
            return $db_connection;
        }else{
           $db_connection=mysqli_connect($server_name,$sever_user_name,$server_password,$db_name);
            if(!$db_connection){
                die("Connection failed:".mysqli_connect_error());
            }else
            return $db_connection;
        }
    }


    function do_signup($username,$fullname,$user_password,$mobile_number){
        $otp=rand(1000,9999);
        $user_password=hash_password($user_password);
        $qurey="INSERT INTO `lahtp_3`.`authentication` (`user_name`, `user_password`, `user_mobile_number`, `user_fullname`,`otp`) VALUES ('$username', '$user_password', '$mobile_number', '$fullname','$otp')";
        $db_conn=get_db_connection();
        $result=mysqli_query($db_conn,$qurey);
        if($result){
            return 1;
        }else

            return mysqli_error($db_conn);
    }
    
    function do_login($username,$user_password,$remember){
        $user_password=hash_password($user_password);
        $db_conn=get_db_connection();
        $qurey="select * from lahtp_3.authentication where user_name='$username';";
        $result=mysqli_query($db_conn,$qurey);
        //$row=mysqli_num_rows($result);
        if(mysqli_num_rows($result)=='1'){
            $row=mysqli_fetch_assoc($result);
                if($row['user_password']==$user_password){
                    return add_session($row['user_name'],$row['user_password'],$remember,$db_conn);
                }else return -1;
        }else
            return-2;

    }

    function add_session($username,$user_password,$remember,$db_conn){
        $token=hash_password($user_password.time());
        $qurey="INSERT INTO `lahtp_3`.`sessions` (`username`, `session_token`, `remember`) VALUES ('$username', '$token', '$remember');";
        $result=mysqli_query($db_conn,$qurey);
        if($result=='1'){
            if($remember=='1'){
                setcookie('username',$username,time()+24*60*60*7);//set cookie for 7day if remember is selected
                setcookie('token',$token,time()+24*60*60*7);
            }else{
                setcookie('username',$username,time()+24*60*60*1);//set cookie for 1day if remember is not selected
                setcookie('token',$token,time()+24*60*60*1);
            }
            return 1;
        }else return -3;//suma oru number;
    }

    function verify_session($username,$token){
        $qurey="SELECT * FROM lahtp_3.sessions WHERE username='$username' AND session_token= '$token';";
        $db_conn=get_db_connection();
        $result=mysqli_query($db_conn,$qurey);
        if($result){
            $row=mysqli_fetch_assoc($result);
            if($row['is_valid']=='1'){
                $time=strtotime($row['created_on']);
                if($row['remember']=='1'){
                    if(time() <= $time+24*60*60*7){
                        return TRUE;
                    }else return FALSE;
                }else{
                    if(time() <= $time+24*60*60*1){
                        return TRUE;
                    }else return FALSE;
                }
            } else return FALSE;
        }else{
            return FALSE;
        }
    }

    function logout($username,$token){
        if($token=="logout_auto"){
            $qurey="DELETE FROM `lahtp_3`.`sessions` WHERE (`username` = '$username');";
        }else{
            $qurey="DELETE FROM `lahtp_3`.`sessions` WHERE (`username` = '$username' AND `session_token` = '$token');";
        }
        $db_conn=get_db_connection();
        $result=mysqli_query($db_conn,$qurey);
        if($result)
            return TRUE;
        else return FALSE;
    }

    function verify($otp,$username){
        $db_conn=get_db_connection();
        $qurey="select * from lahtp_3.authentication where user_name='$username'";
        $result=mysqli_query($db_conn,$qurey);
        if(mysqli_num_rows($result)=='1'){
            $row=mysqli_fetch_assoc($result);
            if($row['otp']==$otp){//check otp is correct
                $otp_g=strtotime($row['otp_generated']);
                if((time()-$otp_g)<(60*3)){//check otp is valid time 3 minutes
                     return activate_account($username);
                }else return -1;
            }else return -2;
        }else return -5;
    }


    function activate_account($username){
        $db_conn=get_db_connection();
        $qurey="UPDATE `lahtp_3`.`authentication` SET `is_verify` = '1' WHERE (`user_name` = '$username')";
        return mysqli_query($db_conn,$qurey);
    }

    function resend_otp($username){
        $otp=rand(1111,9999);
        $db_conn=get_db_connection();
        $qurey="UPDATE `lahtp_3`.`authentication` SET `otp` = '$otp', `otp_generated` = CURRENT_TIMESTAMP() WHERE (`user_name` = '$username');";
        if(mysqli_query($db_conn,$qurey))
            return 1;
        else 
            return -1;
    }

    function hash_password($user_password){
            $salt="387dfa86610439deb4003bf900e37cb8";
            return strrev(md5($user_password.$salt));                      
    }
?>