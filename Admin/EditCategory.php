<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 4){
        header("Location:index.php");
    }
?>
<?php
    if(isset($_GET['categoryEditId']) && $_GET['categoryEditId'] != NULL){
        $categoryId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['categoryEditId']);
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
    
    $categoryName = validation($_POST['categoryName']);
    $categoryStatus = validation($_POST['categoryStatus']);
    

    if(!empty($categoryName)){
        $query = "update tbl_post_category set post_categoryName='$categoryName',post_categoryStatus='$categoryStatus' where post_categoryId='$categoryId'";
        if(mysqli_query($con,$query)){
            $categoryMsg = "category Information updated succesfully";
        }else{
            $categoryMsg = "category Information Not Updated";
        }     
    }else{
            $categoryMsg = "Filed can't be empty";
    }
}
?>
        <div class="col-md-12">
            <form class="form-horizontal" action="" method="post">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="col-md-9 heading_title">
                            category Information
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            if(isset($categoryMsg)){
                                echo "<span style='color:green;font-size:20px'>".$categoryMsg."</span>";
                            }
                        ?>
                        <?php
                             $query = "SELECT * FROM tbl_post_category WHERE post_categoryId='$categoryId'";
                             $adminResult = mysqli_query($con,$query);
                            
                             if($adminResult){
                                 $result = mysqli_fetch_array($adminResult);
                        ?>`   
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">category Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="categoryName" class="form-control" value="<?=$result['post_categoryName']?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Category Status</label>
                                    <div class="col-sm-4">
                                      <select class="form-control select_cus" name="categoryStatus" >
                                          <option value="1" <?php if($result['post_categoryStatus'] == 1)echo "selected"; ?>>Unpublish</option>
                                          <option value="2" <?php if($result['post_categoryStatus'] == 2)echo "selected"; ?>>Publish</option>
                                          
                                      </select>
                                       </div>
                                      

                                </div>
                            </div>
                            
                        <?php }else{
                            echo "No data found";
                        }  ?>
                    </div>
                    <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="updateInfo">Update Category</button>
                    </div>
                </div>
            </form>
        </div>
        <!--col-md-12 end-->
        <?php
    getFooter();
?>
