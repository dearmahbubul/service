<?php
    require_once "functions/function.php";
?>
<?php
    if(isset($_GET['userEditId']) && $_GET['userEditId'] != NULL){
        $userId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['userEditId']);
    }else{
        header("Location:index.php");
    }
?>
<?php
    getHeader();
    getSidebar();
    getBread(); 
?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $userPass = validation($_POST['userPass']);
    $userRePass = validation($_POST['userRePass']);
    if(!empty($userPass) && !empty($userRePass)){
        if($userPass == $userRePass){
            $userPass = md5($userPass);
             $query = "UPDATE tbl_admin_user SET userPass='$userPass' WHERE userId='$userId'";
             $adminResult = mysqli_query($con,$query);
             if($adminResult){
                 $userMsg = "Your password has been changed";
             }else{
                 $userMsg = "Password not changed";
             }
        }else{
            $userMsg = "Your Password Not Matched";
        }
    }else{
        $userMsg ="Field must not be empty!";
    }
}
?>
        <div class="col-md-12">
            <form class="form-horizontal" action="" method="post">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="col-md-9 heading_title">
                            Your Information
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            if(isset($userMsg)){
                                echo "<span style='color:green;font-size:20px'>".$userMsg."</span>";
                            }
                        ?>  
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">New Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="userPass" class="form-control" placeholder="Password" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Confirm Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="userRePass" class="form-control" placeholder="Re-Password" required/>
                                </div>
                            </div>
                            
                    </div>
                    <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="changePassword">Change Password</button>
                    </div>
                </div>
            </form>
        </div>
        <!--col-md-12 end-->
        <?php
    getFooter();
?>
