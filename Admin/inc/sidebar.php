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
                        <li><a href="allPageAndFeature.php"><i class="fa fa-file-text-o"></i> Page And Feature</a></li>

                    <?php } ?>
                    
                    <?php if($_SESSION['roleId'] <= 3){ ?>
                       <li><a href="allMenu.php"><i class="fa fa-venus-double" aria-hidden="true"></i> Menu</a></li>
                       <li><a href="allPortfolio.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Portfolio</a></li>
                       <li><a href="allPage.php"><i class="fa fa-venus-double" aria-hidden="true"></i> Menu</a></li>
                       <li><a href="allPortfolio.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Portfolio</a></li>
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
                    <?php if($_SESSION['roleId'] <= 2){ ?>
                        <li><a href="website_heading.php"><i class="fa fa-bandcamp"></i> Website Heading</a></li>
                        <li><a href="website_logo.php"><i class="fa fa-compass" aria-hidden="true"></i> Website Logo</a></li>
                        <li><a href="website_copyright.php"><i class="fa fa-copyright"></i> Copyright</a></li>
                        <li><a href="company_details.php"><i class="fa fa-building" aria-hidden="true"></i> Company details</a></li>
                        <li><a href="social_url.php"><i class="fa fa-share-square-o"></i> Social</a></li>
                    <?php } ?>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                    <li><a href="../index.php" target="_blank"><i class="fa fa-plane"></i> Live Visit Website</a></li>
                </ul>
            </div><!--sidebar end-->
            <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, facilis, illum soluta voluptatum odit dignissimos dolore nam earum rem ipsa ipsam cupiditate deleniti delectus porro harum deserunt molestiae aliquam. Doloribus, aperiam. Voluptas nisi consectetur eveniet pariatur dignissimos culpa nemo omnis, aut consequatur atque, consequuntur illo quidem. Quas consectetur, ipsam. Provident quaerat minus delectus dolore, doloribus amet, ullam saepe. Facilis blanditiis aliquid, optio deleniti suscipit odit enim hic vero laudantium ex vel dolorem velit ipsa harum aperiam fuga id reprehenderit sed laboriosam nobis quaerat aspernatur. Accusantium itaque perspiciatis odit doloribus odio sed, numquam, rem rerum, debitis nam et quibusdam molestias dignissimos?-->