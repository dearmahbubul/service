bannerDeleteId<?php
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
    if(!empty($userPass)){
        $userPass = md5($userPass);
         $query = "SELECT * FROM tbl_admin_user WHERE userId='$userId'";
         $adminResult = mysqli_query($con,$query);
         if($adminResult){
             $result = mysqli_fetch_array($adminResult);
             $adminStorePass = $result['userPass'];
             if($adminStorePass == $userPass){
                 header("Location:userPassChange.php?userEditId=$userId");
             }else{
                 $userMsg = "Your Password not Matched";
             }
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
                                <label for="" class="col-sm-3 control-label">Previous Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="userPass" class="form-control" placeholder="Password" required/>
                                </div>
                            </div>
                    </div>
                    <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="okay">Okay</button>
                    </div>
                </div>
            </form>
        </div>
        <!--col-md-12 end-->
        <?php
    getFooter();
?>
