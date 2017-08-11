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
    
    $userName = validation($_POST['userName']);
    $userGender = validation($_POST['userGender']);
    $userAddress = validation($_POST['userAddress']);
    $userCity = validation($_POST['userCity']);
    $userCountry = validation($_POST['userCountry']);
    $userNumber = validation($_POST['userNumber']);
    $roleId = validation($_POST['roleId']);
    $userComment = $_POST['userComment'];
    
    //$userPass = validation($_POST['userPass']);
    //$userRePass = validation($_POST['userRePass']);

    if(!empty($userName) || $roleId != 0){
        
            //$UserImage = 'user-'.time().'-'.rand(10000,100000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
                
                    $query = "update tbl_admin_user set userName='$userName',userNumber='$userNumber',userCity='$userCity',userCountry='$userCountry',userAddress='$userAddress',roleId='$roleId',userGender='$userGender',userComment='$userComment' where userId='$userId'";
                    if(mysqli_query($con,$query)){
                    //move_uploaded_file($file_temp,'uploads/'.$UserImage);
                    $userMsg = "User Information updated succesfully";
                }else{
                        $userMsg = "User Information Not Updated";
                    }
         
    }else{
            $userMsg = "Filed can't be empty";
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
                        <?php
                             $query = "SELECT * FROM tbl_admin_user WHERE userId='$userId'";
                             $adminResult = mysqli_query($con,$query);
                            
                             if($adminResult){
                                 $result = mysqli_fetch_array($adminResult);
                        ?>`   
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="userName" class="form-control" value="<?=$result['userName']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" value="<?=$result['userEmail']?>" disabled='disabled'>
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-8">
                              <div class="radio">
                                  <label>
                                    <input type="radio" name="userGender" <?php if($result['userGender'] == 1) echo "checked"?> id="" value="1">
                                    Male
                                  </label>
                                
                                  <label>
                                    <input type="radio" name="userGender" <?php if($result['userGender'] == 2) echo "checked"?> id="" value="2">
                                    Female
                                  </label>
                                
                                </div>
                            </div>
                          </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-8">
                                    <input type="text" name="userAddress" class="form-control" value="<?=$result['userAddress']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">City</label>
                                <div class="col-sm-8">
                                    <input type="text" name="userCity" class="form-control" value="<?=$result['userCity']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Country</label>
                                <div class="col-sm-8">
                                    <input type="text" name="userCountry" class="form-control" value="<?=$result['userCountry']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Number</label>
                                <div class="col-sm-8">
                                    <input type="text" name="userNumber" class="form-control" value="<?=$result['userNumber']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">User Role</label>
                                <div class="col-sm-4">
                                    <select class="form-control select_cus" name="roleId">
                                     <option value="0">Select Role</option>
                                      <?php
                                         $query = "SELECT * FROM tbl_admin_user_role";
                                         $roleResult = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                                         foreach($roleResult as $role){?>
                                            
                                            <option <?php if($result['roleId']==$role['roleId']){echo 'selected';}?> value="<?=$role['roleId'];?>"><?=$role['roleName'];?></option>
                                       <?php } ?>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Comment</label>
                                <div class="col-sm-8">
                                    <textarea name="userComment" class="form-control" rows="5"><?=$result['userComment'];?></textarea>
                                    <script>
                                        CKEDITOR.replace('userComment');
                                    </script>
                                </div>
                            </div>
                            <!--<div class="form-group">
                                <label for="" class="col-sm-3 control-label">Upload Image</label>
                                <div class="col-sm-8">
                                    <input type="file" name="userImage" />
                                </div>
                            </div>-->
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
