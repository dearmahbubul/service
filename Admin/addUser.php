<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 2){
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
    $userEmail = validation($_POST['userEmail']);
    $userNumber = validation($_POST['userNumber']);
    $userGender = validation($_POST['userGender']);
    $userPass = validation($_POST['userPass']);
    $userRePass = validation($_POST['userRePass']);
    $roleId = validation($_POST['roleId']);
    if(!empty($userName) && !empty($userEmail) && !empty($userPass) &&  $roleId != 0 && $userGender != ''){
        if(!checkUserEmail($userEmail)){
            if($userPass == $userRePass){
                $userPass = md5($userPass);
            //$userImage = 'user-'.time().'-'.rand(10000,100000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
                
                    $query = "insert into tbl_admin_user(userName,userEmail,userNumber,userPass,roleId,userGender) values('$userName','$userEmail','$userNumber','$userPass','$roleId','$userGender')";
                    if(mysqli_query($con,$query)){
                    //move_uploaded_file($file_temp,'uploads/'.$userImage);
                    $userMsg = "User id created succesfully";
                }else{
                        $userMsg = "User not created";
                    }
            }else{
                $userMsg = "Your Password Not matched";
            }
        }else{
            $userMsg = "Email already exist";
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
                            Add User Information
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="allUser.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User Information</a>
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
                                <label for="" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="userName" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="userEmail" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-8">
                              <div class="radio">
                                  <label>
                                    <input type="radio" name="userGender" id="" value="1" required>
                                    Male
                                  </label>
                                  <label>
                                    <input type="radio" name="userGender" id="" value="2" required>
                                    Female
                                  </label>
                                </div>
                            </div>
                          </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="userPass" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Re-Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="userRePass" class="form-control" placeholder="Re-Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Number</label>
                                <div class="col-sm-8">
                                    <input type="text" name="userNumber" class="form-control" placeholder="Phone-Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">User Role</label>
                                <div class="col-sm-4">
                                  <select class="form-control select_cus" name="roleId" required>
                                      <option value="0">Select Role</option>
                                      <?php
                                         $query = "SELECT * FROM tbl_admin_user_role WHERE roleStatus='2'";
                                         $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                                         foreach($result as $role){?>
                                            <option value="<?=$role['roleId'];?>"><?=$role['roleName'];?></option>
                                       <?php } ?>
                                  </select>
                                </div>
                            </div>

                            <!--<div class="form-group">
                                <label for="" class="col-sm-3 control-label">Upload Image</label>
                                <div class="col-sm-8">
                                    <input type="file" name="image" />
                                </div>
                            </div>-->
                    </div>
                    <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="addUser">Add User</button>
                    </div>
                </div>
            </form>
        </div>
        <!--col-md-12 end-->
        <?php
    getFooter();
?>
