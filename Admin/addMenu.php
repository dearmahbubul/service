<?php
    require_once "functions/function.php";
?>

<?php
    getHeader();
    getSidebar();
    getBread(); 
?>
            <?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $menuUploaderId = $_SESSION['userId'];
    $menuUrl = $_POST['menuUrl'];
    $menuName = $_POST['menuName'];
    $menuStatus = $_POST['menuStatus'];
    
    if(!empty($menuName) && !empty($menuUrl)){
              
        $query = "insert into tbl_menu(menuName,menuStatus,menuUploaderId,menuUrl) values('$menuName','$menuStatus','$menuUploaderId','$menuUrl')";
        if(mysqli_query($con,$query)){
            $menuMsg = "Menu Uploaded succesfully";
        }else{
            $menuMsg = "Menu not uploaded";
        }

    }else{
            $menuMsg = "Filed can't be empty";
        }
}
?>
                <div class="col-md-12">
                    <form class="form-horizontal" action="" method="post">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="col-md-9 heading_title">
                                    Add menu information
                                </div>
                                <div class="col-md-3 text-right">
                                    <a href="allmenu.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All menu information</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <?php
                            if(isset($menuMsg)){
                                echo "<span style='color:green;font-size:20px'>".$menuMsg."</span>";
                            }
                        ?>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Menu URL</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="menuUrl" class="form-control" placeholder="Menu URL" required>
                                        </div>
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Menu Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="menuName" class="form-control" placeholder="Menu name" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Menu Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select_cus" name="menuStatus">
                                              <option value="1">Unpublish</option>                    
                                              <option value="2">Publish</option>                       
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn btn-sm btn-primary" name="addmenu">Uplaode menu</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--col-md-12 end-->
<?php
    getFooter();
?>
