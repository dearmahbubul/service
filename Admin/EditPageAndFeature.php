<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 3){
        header("Location:index.php");
    }
?>
<?php
    if(isset($_GET['pEditId']) && $_GET['pEditId'] != NULL){
        $pEditId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['pEditId']);
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
    
    $pTitle = validation($_POST['pTitle']);
    $pDetails = $_POST['pDetails'];
    $pIconClass = validation($_POST['pIconClass']);
    $pStatus = validation($_POST['pStatus']);
    $pCategory = validation($_POST['pCategory']);
    

    if(!empty($pTitle) && !empty($pDetails)){
        $query = "update tbl_pageandfeature set pTitle='$pTitle',pCategory='$pCategory',pDetails='$pDetails',pStatus='$pStatus',pIconClass='$pIconClass' where pId='$pEditId'";
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
                            <a href="allPageAndFeature.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Information</a>
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
                             $query = "SELECT * FROM tbl_pageandfeature WHERE pId='$pEditId'";
                             $Result = mysqli_query($con,$query);
                            
                             if($Result){
                                 $result = mysqli_fetch_array($Result);
                        ?>`   
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-8">
                                    <input type="text" name="pTitle" class="form-control" value="<?=$result['pTitle']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Feature Icon Class</label>
                                <div class="col-sm-8">
                                    <input type="text" name="pIconClass" class="form-control" value="<?=$result['pIconClass']?>" placeholder="Ex: fa fa-class fa-3x">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Details</label>
                                <div class="col-sm-8">
                                    <textarea name="pDetails" class="form-control" rows="5"><?=$result['pDetails'];?></textarea>
                                    <script>
                                        CKEDITOR.replace('pDetails');
                                    </script>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Category</label>
                                    <div class="col-sm-4">
                                      <select class="form-control select_cus" name="pCategory" >
                                          <option value="1" <?php if($result['pCategory'] == 1)echo "selected"; ?>>Feature Work</option>
                                          <option value="2" <?php if($result['pCategory'] == 2)echo "selected"; ?>>Page</option> 
                                      </select>
                                    </div>                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Status</label>
                                    <div class="col-sm-4">
                                      <select class="form-control select_cus" name="pStatus" >
                                          <option value="1" <?php if($result['pStatus'] == 1)echo "selected"; ?>>Unpublish</option>
                                          <option value="2" <?php if($result['pStatus'] == 2)echo "selected"; ?>>Publish</option> 
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
