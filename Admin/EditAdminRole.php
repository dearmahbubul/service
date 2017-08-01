<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 2){
        header("Location:index.php");
    }
?>
<?php
    if(isset($_GET['roleEditId']) && $_GET['roleEditId'] != NULL){
        $roleId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['roleEditId']);
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
    
    $roleName = validation($_POST['roleName']);
    $roleStatus = validation($_POST['roleStatus']);
    

    if(!empty($roleName)){
        $query = "update tbl_admin_user_role set roleName='$roleName',roleStatus='$roleStatus' where roleId='$roleId'";
        if(mysqli_query($con,$query)){
            $roleMsg = "role Information updated succesfully";
        }else{
            $roleMsg = "role Information Not Updated";
        }     
    }else{
            $roleMsg = "Filed can't be empty";
    }
}
?>
        <div class="col-md-12">
            <form class="form-horizontal" action="" method="post">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="col-md-9 heading_title">
                            Role Information
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            if(isset($roleMsg)){
                                echo "<span style='color:green;font-size:20px'>".$roleMsg."</span>";
                            }
                        ?>
                        <?php
                             $query = "SELECT * FROM tbl_admin_user_role WHERE roleId='$roleId'";
                             $adminResult = mysqli_query($con,$query);
                            
                             if($adminResult){
                                 $result = mysqli_fetch_array($adminResult);
                        ?>`   
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Role Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="roleName" class="form-control" value="<?=$result['roleName']?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">User Status</label>
                                    <div class="col-sm-4">
                                      <select class="form-control select_cus" name="roleStatus" >
                                          <option value="1" <?php if($result['roleStatus'] == 1)echo "selected"; ?>>Unpublish</option>
                                          <option value="2" <?php if($result['roleStatus'] == 2)echo "selected"; ?>>Publish</option>
                                          
                                      </select>
                                       </div>
                                      

                                </div>
                            </div>
                            
                        <?php }else{
                            echo "No data found";
                        }  ?>
                    </div>
                    <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="updateInfo">Update Information</button>
                    </div>
                </div>
            </form>
        </div>
        <!--col-md-12 end-->
        <?php
    getFooter();
?>
