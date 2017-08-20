<?php 
    require_once "functions/function.php";
    if(isset($_SESSION['userId']) && isset($_SESSION['userEmail'])){
        header("Location:index.php");
    }
?>
<?php   
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $bannerEmail = validation($_POST['userEmail']);
    $bannerPass = md5(validation($_POST['userPass']));
    if(!empty($bannerEmail) && !empty($bannerPass)){
        $query = "SELECT * FROM tbl_admin_user natural join tbl_admin_user_role WHERE userEmail='$bannerEmail' AND userPass='$bannerPass'";
        $result = mysqli_query($con,$query);
        $value = mysqli_fetch_array($result);
        if($value){
            $_SESSION['userId'] = $value['userId'];
            $_SESSION['userName'] = $value['userName'];
            $_SESSION['userEmail'] = $value['userEmail'];
            $_SESSION['roleId'] = $value['roleId'];
            $_SESSION['roleName'] = $value['roleName'];
            $_SESSION['userImage'] = $value['userImage'];
            header("Location:index.php");
        }else{
            $loginChk = "Your Email & Password Does't Matched";
        }
        
    }
}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1>Admin Login</h1>
                        <span style="color:red;font-size: 18px;">
                            <?php
                                if(isset($loginChk)){
                                echo $loginChk;
                                
                                }
                            ?>
                        </span>
			<div>
				<input type="text" placeholder="E-mail" required="" name="userEmail"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="userPass"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">&copy; Mahbubul Alam</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>