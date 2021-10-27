
<?php
//     include "authentication.php";
//     $db_conn=get_db_connection();
//     $qur="SELECT user_name='gopi' and user_password='password' from lahtp_3.authentication;";
//     $qurey="select * from lahtp_3.authentication where user_name='gopi' and user_password='password';";
//     $qurey_password="select user_password from lahtp_3.authentication where user_name='gopi';";
//     if ($result=mysqli_query($db_conn,$qurey_password))
// {
// // Return the number of rows in result set
// //$rowcount=mysqli_num_rows($result);
// $pass=mysqli_fetch_assoc($result);
// //printf("Result set has %d rows.\n",$rowcount);
// print_r($pass);
// // Free result set
// mysqli_free_result($result);
// }

// mysqli_close($db_conn);

//select hashedPassword from users where username=?
 //date_default_timezone_set("Asia/Calcutta");
// $check=strtotime('14:23:32');
// echo "db=$check\n";
// echo "cur=".time();
// echo "\n".date("Y-m-d H:i:s");
// echo "\n".time()-$check;
//$username="gopi";
//setcookie('username',$username, time()+5);
//include 'home.php';
//print_r($_COOKIE);
//echo "gopi krishnan";
$db_name="lahtp_3";
$server_name="localhost";
$server_password="";
$sever_user_name="root";
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
    $db_conn= get_db_connection();
    if($db_conn)
        echo "gopi krishnan";
?> 
