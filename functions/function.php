<?php
require_once("config/config.php");
    function getHeader(){
        require_once "inc/header.php";
    }
    function getBanner(){
            require_once "inc/banner.php";
        }

    function getHeadBread(){
            require_once "inc/headBread.php";
        }
    function getBread(){
            require_once "inc/bread.php";
        }
    function getContent(){
            require_once "inc/content.php";
        }
    function getFooter(){
            require_once "inc/footer.php";
        }
    function getPart($addPart){
            include_once "inc/".$addPart;
        }

    function validation($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function textShorten($text,$limit){
        $text = substr($text,0,$limit);
        $text = substr($text,0,strrpos($text,' '));
        return $text;
    }
    function checkUserEmail($email){
        global $con;
        $query = "SELECT * FROM tbl_admin_user where userEmail='$email'";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result) == 1){
            return true;
        }else{
            return false;
        }
    }
    function checkLogged(){
        if(isset($_SESSION['userId']) && isset($_SESSION['userEmail'])){
            return true;
        }else{
            return false;
        }
    }
    function formatDate($date){
         return date('F j, Y, g:i A',strtotime($date));
     }
    function getCurrentPage() {
    $link = explode('/', $_SERVER['PHP_SELF']);
    $page = $link[count($link) - 1];
    $page = explode('.',$page);
    $page = $page[0];
    return $page;
}

/*    function insert($table,$cols){
        $query = "INSERT INTO $table SET $cols";
        $result = mysqli_query($con,$query);
        if(mysqli_affected_rows($result) > 0){
            return true;
        }else{
            return false;
        }
    }*/

?>