<?
    require_once 'authentication.php';
    /* 
    TODO LIST:
    1.do_post($body,$image,usernaem)-return post  id
    2.delete_post($id)
    3.like_post($id,$useranme)
    4.get_all posts()
    5.get_like_count($post_id)
    6.has_liked($post_id)
    */

    function do_post($body,$image,$useranme){
        $qurey="INSERT INTO `lahtp_3`.`post` (`image`, `post_username`, `post_body`) VALUES ('$image', '$useranme', '$body');";
        $db_conn= get_db_connection();
        if(mysqli_query($db_conn,$qurey)){
            $post_id=mysqli_insert_id($db_conn);
            return $post_id;
        }else{
            return NULL;
        }
    }

    function get_all_posts(){
        $qurey="SELECT * FROM `lahtp_3`.`post`;";
        $db_conn=get_db_connection();
        $username=$_COOKIE['username'];//vlun

        $result = mysqli_query($db_conn,$qurey);
        if(mysqli_num_rows($result)){
            $posts=array();
            while($row=mysqli_fetch_assoc($result)){
                $posts[]=$row;
            }
            return $posts;
        }else return []; 
    }
?>