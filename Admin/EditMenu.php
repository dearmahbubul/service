<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 3){
        header("Location:index.php");
    }
?>
<?php
    if(isset($_GET['menuEditId']) && $_GET['menuEditId'] != NULL){
        $menuId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['menuEditId']);
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
    
    $menuName = validation($_POST['menuName']);
    $menuPosition = validation($_POST['menuPosition']);
    $menuUrl = validation($_POST['menuUrl']);
    $menuStatus = validation($_POST['menuStatus']);
    

    if(!empty($menuName) && !empty($menuUrl)){
        $query = "update tbl_menu set menuName='$menuName',menuPosition='$menuPosition',menuStatus='$menuStatus',menuUrl='$menuUrl' where menuId='$menuId'";
        if(mysqli_query($con,$query)){
            $menuMsg = "Menu Information updated succesfully";
        }else{
            $menuMsg = "Menu Information Not Correct";
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
                            Menu Information
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            if(isset($menuMsg)){
                                echo "<span style='color:green;font-size:20px'>".$menuMsg."</span>";
                            }
                        ?>
                        <?php
                             $query = "SELECT * FROM tbl_menu WHERE menuId='$menuId'";
                             $adminResult = mysqli_query($con,$query);
                            
                             if($adminResult){
                                 $result = mysqli_fetch_array($adminResult);
                        ?>`   
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Menu Position</label>
                                <div class="col-sm-8">
                                    <input type="text" name="menuPosition" class="form-control" value="<?=$result['menuPosition']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Menu URL</label>
                                <div class="col-sm-8">
                                    <input type="text" name="menuUrl" class="form-control" value="<?=$result['menuUrl']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Menu Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="menuName" class="form-control" value="<?=$result['menuName']?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Menu Status</label>
                                    <div class="col-sm-4">
                                      <select class="form-control select_cus" name="menuStatus" >
                                          <option value="1" <?php if($result['menuStatus'] == 1)echo "selected"; ?>>Unpublish</option>
                                          <option value="2" <?php if($result['menuStatus'] == 2)echo "selected"; ?>>Publish</option>
                                          
                                      </select>
                                       </div>
                                      

                                </div>
                            </div>
                            
                        <?php }else{
                            echo "No data found";
                        }  ?>
                    </div>
                    <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="updateInfo">Update menu</button>
                    </div>
                </div>
            </form>
        </div>
        <!--col-md-12 end-->
        <?php
    getFooter();
?>
