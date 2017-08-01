<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 4){
        header("Location:index.php");   
    }
?>
    <?php
    if(isset($_GET['postViewId']) && $_GET['postViewId'] != NULL){
        $postId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['postViewId']);
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
                            Post Information
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="allPost.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Post Information</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-9">
                            <?php
                            $query = "select * from tbl_post where post_postId='$postId'";
                            $result = mysqli_query($con,$query);
                            if($result){
                            $post = mysqli_fetch_array($result);
                              extract($post);
                          ?>
                                <div align='center'>
                                   <?php if($post_postImage){  ?>
                                    <img src="uploads/postImage/<?=$post_postImage;?>" alt="" style="height:300px;width:600px;margin-bottom:10px;">
                                    <?php }else{ ?>
                                    <img src="images/avatar.png" alt="" style="height:200px;width:350px;margin-bottom:10px;">
                                    <?php }  ?>
                                </div>
                                <table class="table table-hover table-striped table-responsive view_table_cus">
                                    <tr>
                                        <td>Post Title</td>
                                        <td>:</td>
                                        <td>
                                            <?=$post_postTitle;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Post Button</td>
                                        <td>:</td>
                                        <td>
                                            <?=$post_postButtonText;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Post Details</td>
                                        <td>:</td>
                                        <td>
                                            <?=$post_postDetails;?>
                                        </td>
                                    </tr>
            
                                    <tr>
                                        <td>Post Category</td>
                                        <td>:</td>
                                        <td>
                                            <?php
                                                $postCatQuery = "SELECT * FROM tbl_post_category WHERE post_categoryId='$post_categoryId'";
                                                $catResult = mysqli_query($con,$postCatQuery);
                                                $fetchCatResult = mysqli_fetch_array($catResult);
                                                echo $fetchCatResult['post_categoryName'];                                       
                                            ?>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Post Uploade Time</td>
                                        <td>:</td>
                                        <td>
                                            <?=formatDate($post_postUploadeDate);?>
                                        </td>
                                    </tr>
                                    <?php if($_SESSION['userId'] <= 2){ ?>
                                        <tr>
                                            <td>Post Uploader</td>
                                            <td>:</td>
                                            <td>
                                                <a href="viewUser.php?userViewId=<?=$post_postUploaderId;?>"><?=$post_postUploader;?></a>
                                            </td>
                                        </tr>
                                    <?php }else{ ?>
                                          <tr>
                                            <td>Post Uploader</td>
                                            <td>:</td>
                                            <td>
                                                <?=$post_postUploader;?>
                                            </td>
                                        </tr>
                        <?php  } ?>
                            </table>
                                      <?php
                                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                                                $post_postStatus = validation($_POST['post_postStatus']);
                                                if(!empty($post_postStatus)){
                                                    $updatePostQuery = "update tbl_post_post set post_postStatus='$post_postStatus' where post_postId='$postId'";
                                                    if(mysqli_query($con,$updatePostQuery)){
                                                        echo "<script>alert('Post type Changed')</script>";
                                                    }
                                                      
                                                }
                                            }
                                
                                        ?>
                                        <?php
                                            if($_SESSION['roleId'] <= 3){
                                        ?>
                                       <form action="" method="post" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">Post Type</label>
                                            <div class="col-sm-4">
                                              <select class="form-control select_cus" name="post_postStatus">
                                                 
                                                        <option value="1" <?php if($post_postStatus == 1){echo "selected";}else{echo "";} ?> >Unpublish</option>
                                                        <option value="2" <?php if($post_postStatus == 2){echo "selected";}else{echo "";} ?> >Publish</option>
                        
                                              </select>
                                               </div>
                                               <div class="col-sm-4">
                                                    <button class="btn btn-sm btn-primary" name="chngStatus" style="display:inline-block;">Change Post Status</button>
                                                </div>
                                           
                                        </div>
                                    </form>
                                    <?php } ?>
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
