<div class="col-md-2 sidebar pd0">
            	<div class="side_user">
                   <?php 
                      $userId = $_SESSION['userId'];
                      $query = "SELECT * FROM tbl_admin_user WHERE userId='$userId'";
                      global $con;
                      $result = mysqli_query($con,$query);
                      $resultAdmin = mysqli_fetch_array($result);
                      if($resultAdmin['userImage'] != NULL){
                    ?>
                	<img class="img-responsive" src="uploads/<?=$resultAdmin['userImage'];?>"/>
                   <?php }else{ ?>
                	<img class="img-responsive" src="images/avatar.png"/>
                   <?php } ?>
                    <h4><?=$resultAdmin['userName'];?></h4>
                    <span><i class="fa fa-circle"></i> Online</span>
                </div>
                <h2>MAIN NAVIGATION</h2>
                <ul>
                	<li><a href="index.php"><i class="fa fa-university"></i> Dashboard</a></li>
                   <?php if($_SESSION['roleId'] <= 2){ ?>
                        <li><a href="allUser.php"><i class="fa fa-user-circle"></i> User</a></li>
                        <li><a href="allAdminRole.php"><i class="fa fa-list"></i> Admin Role</a></li>
                    <?php } ?>
                    <?php if($_SESSION['roleId'] <= 4){ ?>
                        <li><a href="allCategory.php"><i class="fa fa-table"></i> Category</a></li>
                    <?php } ?>
                    
                    <?php if($_SESSION['roleId'] <= 3){ ?>
                       <?php
                            global $con;
                            $query = "SELECT * FROM tbl_contact WHERE contactStatus='1'";
                            $messageResult = mysqli_query($con,$query);
                            $count = mysqli_num_rows($messageResult);
                        ?>
                        <li><a href="allMessage.php"><i class="fa fa-commenting-o"></i> All Message <?php if($count > 0){?><span style="border-radius:50%;background-color:red;padding:7px 15px;margin-left:35px;"><?=$count;?></span><?php }?></a></li>
                    <?php } ?>
                    
                    <li><a href="allBanner.php"><i class="fa fa-gamepad"></i> Banner</a></li>
                    <li><a href="allPost.php"><i class="fa fa-image"></i> Post</a></li>
                    <li><a href="allGallery.php"><i class="fa fa-heart"></i> Gallery</a></li>
                    <li><a href="userProfileMenu.php?userEditId=<?php echo $_SESSION['userId'];?>"><i class="fa fa-pencil-square fa-lg"></i> Edit Profile</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                    <li><a href="../index.php" target="_blank"><i class="fa fa-plane"></i> Live Visit Website</a></li>
                </ul>
            </div><!--sidebar end-->