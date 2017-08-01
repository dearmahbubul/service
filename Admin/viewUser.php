<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 2){
        header("Location:index.php");   
    }
?>
    <?php
    if(isset($_GET['userViewId']) && $_GET['userViewId'] != NULL){
        $userId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['userViewId']);
    }
?>
        <?php
    getHeader();
    getSidebar();
    getBread();
?>
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="col-md-9 heading_title">
                            Personal Information
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="allUser.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Information</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-9">
                            <?php
                            $query = "select * from tbl_admin_user natural join tbl_admin_user_role where userId='$userId'";
                            $result = mysqli_query($con,$query);
                            if($result){
                            $user = mysqli_fetch_array($result);
                              extract($user);
                          ?>
                                <div align='center'>
                                   <?php if($userImage){  ?>
                                    <img src="uploads/<?=$userImage;?>" alt="" style="height:200px;width:250px;margin-bottom:10px;">
                                    <?php }else{ ?>
                                    <img src="images/avatar.png" alt="" style="height:200px;width:250px;margin-bottom:10px;">
                                    <?php }  ?>
                                </div>
                                <table class="table table-hover table-striped table-responsive view_table_cus">
                                    <tr>
                                        <td>Name</td>
                                        <td>:</td>
                                        <td>
                                            <?=$userName;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>
                                            <?=$userEmail;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:</td>
                                        <td>
                                            <?=$userNumber;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>:</td>
                                        <td>
                                            <?=$userAddress;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Location</td>
                                        <td>:</td>
                                        <td>
                                            <?=$userCity;?>,
                                                <?=$userCountry;?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Gender</td>
                                        <td>:</td>
                                        <td>
                                            <?php if($userGender == 1){echo "Male";} else {echo "Female";}?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Comment</td>
                                        <td>:</td>
                                        <td>
                                            <?=$userComment;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Registration Time</td>
                                        <td>:</td>
                                        <td>
                                            <?=formatDate($userAddDate);?>
                                        </td>
                                    </tr>
                            </table>
                                      <?php
                                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                                                $userRoleId = validation($_POST['roleId']);
                                                if($userRoleId != 0){
                                                    $updateRoleQuery = "update tbl_admin_user set roleId='$userRoleId' where userId='$userId'";
                                                    mysqli_query($con,$updateRoleQuery);
                                                      
                                                }
                                            }
                                
                                        ?>
                                       <form action="" method="post" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">User Role</label>
                                            <div class="col-sm-4">
                                              <select class="form-control select_cus" name="roleId" required>
                                                  <option value="0">Select Role</option>
                                                  <?php
                                                     $query = "SELECT * FROM tbl_admin_user_role WHERE roleStatus='2'";
                                                     $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                                                     foreach($result as $role){?>
                                                        <option value="<?=$role['roleId'];?>" <?php if($roleId == $role['roleId']){echo "selected";}else{echo "";} ?> ><?=$role['roleName'];?></option>
                                                   <?php } ?>
                                              </select>
                                               </div>
                                               <div class="col-sm-4">
                                                    <button class="btn btn-sm btn-primary" name="chngRole" style="display:inline-block;">Change Role</button>
                                                </div>
                                           
                                        </div>
                                    </form>
                                <?php  }else{echo "No data found";} ?>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-sm btn-primary">PDF</a>
                            <a href="#" class="btn btn-sm btn-success">PRINT</a>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--col-md-12 end-->
            <?php
    getFooter();
?>
