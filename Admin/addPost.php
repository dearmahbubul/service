<?php
    require_once "functions/function.php";
?>
    <?php
    if($_SESSION['roleId'] > 4){
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
    
    $post_postTitle = validation($_POST['post_postTitle']);
    $post_postDetails = $_POST['post_postDetails'];
    $post_postButtonText = validation($_POST['post_postButtonText']);
    $post_postStatus = validation($_POST['post_postStatus']);
    $post_categoryId = validation($_POST['post_categoryId']);
    $post_postUploader = $_SESSION['roleName'];
    $post_postUploaderId = $_SESSION['userId'];
    $post_postImage = $_FILES['post_postImage'];
    
    if(!empty($post_postImage) && !empty($post_postButtonText) && !empty($post_postDetails) && !empty($post_postTitle) && $post_categoryId != 0){
          
            $ImageName = 'post-'.time().'-'.rand(10000,100000).'.'.pathinfo($post_postImage['name'],PATHINFO_EXTENSION);
    
            $query = "insert into tbl_post(post_postTitle,post_postDetails,post_postButtonText,post_postStatus,post_categoryId,post_postUploader,post_postUploaderId,post_postImage) values('$post_postTitle','$post_postDetails','$post_postButtonText','$post_postStatus','$post_categoryId','$post_postUploader','$post_postUploaderId','$ImageName')";
            if(mysqli_query($con,$query)){
            move_uploaded_file($post_postImage['tmp_name'],'uploads/postImage/'.$ImageName);
            $postMsg = "Post Uploaded succesfully";
            }else{
                $postMsg = "Post not Uploaded";
            }

    }else{
            $postMsg = "Filed can't be empty";
        }
}
?>
                <div class="col-md-12">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="col-md-9 heading_title">
                                    Add  Post Information
                                </div>
                                <div class="col-md-3 text-right">
                                    <a href="allPost.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Post Information</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <?php
                            if(isset($postMsg)){
                                echo "<span style='color:green;font-size:20px'>".$postMsg."</span>";
                            }
                        ?>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Post Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="post_postTitle" class="form-control" placeholder="Post title" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Post Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="post_postImage" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Post Details</label>
                                        <div class="col-sm-8">
                                            <textarea name="post_postDetails" id="post_postDetails" class="form-control" rows="5"></textarea>
                                            <script>
                                                CKEDITOR.replace('post_postDetails');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Post button text</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="post_postButtonText" class="form-control" placeholder="Button text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Post Category</label>
                                        <div class="col-sm-4">
                                          <select class="form-control select_cus" name="post_categoryId" required>
                                              <option value="0">Select Post Category</option>
                                              <?php
                                                 $catQuery = "SELECT * FROM tbl_post_category WHERE post_categoryStatus='2'";
                                                 $catResult = mysqli_query($con,$catQuery);
                                                // $fetchResult = mysqli_fetch_all($catResult);
                                                 while($category = $catResult->fetch_array()){?>
                                                    <option value="<?=$category['post_categoryId'];?>"><?=$category['post_categoryName'];?></option>
                                               <?php } ?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Post status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select_cus" name="post_postStatus" required>
                                              <option value="1">Unpublish</option>                  
                                              <option value="2">Publish</option>                       
                                            </select>
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn btn-sm btn-primary" name="addpost">Add Post</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--col-md-12 end-->
                <?php
    getFooter();
?>
