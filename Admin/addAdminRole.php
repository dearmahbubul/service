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
    
    $categoryName = validation($_POST['categoryName']);
    $categoryStatus = validation($_POST['categoryStatus']);
    
    if(!empty($categoryName)){
        $query = "insert into tbl_post_category(post_categoryName,post_categoryStatus) values('$categoryName','$categoryStatus')";
        if(mysqli_query($con,$query)){
            $categoryMsg = "category Uploaded succesfully";
        }else{
            $categoryMsg = "category not created";
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
                                    Add Category Information
                                </div>
                                <div class="col-md-3 text-right">
                                    <a href="allCategory.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Category Information</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <?php
                            if(isset($categoryMsg)){
                                echo "<span style='color:green;font-size:20px'>".$categoryMsg."</span>";
                            }
                        ?>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">category Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="categoryName" class="form-control" placeholder="Category name" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Category Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select_cus" name="categoryStatus">
                                              <option value="1">Unpublish</option>                    
                                              <option value="2">Publish</option>                       
                                            </select>
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn btn-sm btn-primary" name="addcategory">Add category</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--col-md-12 end-->
<?php
    getFooter();
?>
