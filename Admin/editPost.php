<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 3){
        header("Location:index.php");
    }
?>
<?php
    if(isset($_GET['postEditId']) && $_GET['postEditId'] != NULL){
        $postId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['postEditId']);
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
    
    $post_postTitle = validation($_POST['post_postTitle']);
    $post_postDetails = $_POST['post_postDetails'];
    $post_postButtonText = validation($_POST['post_postButtonText']);
    $post_postStatus = validation($_POST['post_postStatus']);
    $post_categoryId = validation($_POST['post_categoryId']);
    
    if(!empty($post_postButtonText) && !empty($post_postDetails) && !empty($post_postTitle) && $post_categoryId != 0){
        $query = "update tbl_post set post_postTitle='$post_postTitle',post_postDetails='$post_postDetails',post_postButtonText='$post_postButtonText',post_postStatus='$post_postStatus',post_categoryId='$post_categoryId' where post_postId='$postId'";
        if(mysqli_query($con,$query)){
            $pMsg = "Information updated succesfully";
        }else{
            $pMsg = "Information Not Correct";
        }     
    }else{
            $pMsg = "Filed can't be empty";
    }
}
?>
        <div class="col-md-12">
            <form class="form-horizontal" action="" method="post">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="col-md-9 heading_title">
                            Page and Feature Information
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="allPost.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Post</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            if(isset($pMsg)){
                                echo "<span style='color:green;font-size:20px'>".$pMsg."</span>";
                            }
                        ?>
                        <?php
                             $query = "SELECT * FROM tbl_post WHERE post_postId='$postId'";
                             $Result = mysqli_query($con,$query);
                            
                             if($Result){
                                 $result = mysqli_fetch_array($Result);
                        ?>`   
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-8">
                                    <input type="text" name="post_postTitle" class="form-control" value="<?=$result['post_postTitle']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Button text</label>
                                <div class="col-sm-8">
                                    <input type="text" name="post_postButtonText" class="form-control" value="<?=$result['post_postButtonText']?>" placeholder="Ex: fa fa-class fa-3x">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Details</label>
                                <div class="col-sm-8">
                                    <textarea name="post_postDetails" class="form-control" rows="5"><?=$result['post_postDetails'];?></textarea>
                                    <script>
                                        CKEDITOR.replace('post_postDetails');
                                    </script>
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
                                                    <option <?=($result['post_categoryId']==$category['post_categoryId'])?'selected':''?> value="<?=$category['post_categoryId'];?>"><?=$category['post_categoryName'];?></option>
                                               <?php } ?>
                                          </select>
                                        </div>
                                    </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-4">
                                      <select class="form-control select_cus" name="post_postStatus" >
                                          <option value="1" <?php if($result['post_postStatus'] == 1)echo "selected"; ?>>Unpublish</option>
                                          <option value="2" <?php if($result['post_postStatus'] == 2)echo "selected"; ?>>Publish</option> 
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
