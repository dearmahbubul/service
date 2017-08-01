<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 4){
        header("Location:index.php");   
    }
?>
<?php
    if(isset($_GET['bannerEditId']) && $_GET['bannerEditId'] != NULL){
        $bannerId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['bannerEditId']);
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
    $bannerTitle = validation($_POST['bannerTitle']);
    $bannerDetails = validation($_POST['bannerDetails']);
    $bannerButton = validation($_POST['bannerButton']);
    $bannerButtonUrl = validation($_POST['bannerButtonUrl']);
    $bannerType = validation($_POST['bannerType']);
    //$bannerImage = $_FILES['bannerImage'];
    //print_r($bannerImage);
    if(!empty($bannerButton) && !empty($bannerTitle) && !empty($bannerDetails)){
        $query = "update tbl_banner set bannerTitle='$bannerTitle',bannerDetails='$bannerDetails',bannerButton='$bannerButton',bannerButtonUrl='$bannerButtonUrl',bannerType='$bannerType' where bannerId='$bannerId'";
            if(mysqli_query($con,$query)){
            $bannerMsg = "banner Information updated succesfully";
            }else{
                $bannerMsg = "banner Information Not Updated,Something worng";
            }
        /*if(empty($bannerImage['name'])){                
            $query = "update tbl_banner set bannerTitle='$bannerTitle',bannerDetails='$bannerDetails',bannerButton='$bannerButton',bannerButtonUrl='$bannerButtonUrl',bannerType='$bannerType' where bannerId='$bannerId'";
            if(mysqli_query($con,$query)){
            $bannerMsg = "banner Information updated succesfully";
            }else{
                $bannerMsg = "banner Information Not Updated,Something worng";
            }
        }else{
            $imageName = 'banner-'.time().'-'.rand(10000,100000).'.'.pathinfo($bannerImage['name'],PATHINFO_EXTENSION);
            $query = "update tbl_banner set bannerTitle='$bannerTitle',bannerDetails='$bannerDetails',bannerButton='$bannerButton',bannerButtonUrl='$bannerButtonUrl',bannerType='$bannerType',bannerImage='$imageName' where bannerId='$bannerId'";
            if(mysqli_query($con,$query)){
                if(move_uploaded_file($bannerImage['tmp_name'],'uploads/bannerImage/'.$imageName)){
                    
                $bannerIMsg = "banner Information and image updated succesfully";
                }else{
                    $bannerIMsg = "Photu not uploaded";
                }
            }else{
                $bannerMsg = "banner Information Not Updated,Something worng";
            }
        }*/
    }else{
            $bannerMsg = "Filed can't be empty";
        }
}
?>
<?php
     $query = "SELECT * FROM tbl_banner WHERE bannerId='$bannerId'";
     $bannerResult = mysqli_query($con,$query);

     if($bannerResult){
         $result = mysqli_fetch_array($bannerResult);
         $delImage = "uploads/bannerImage/".$result['bannerImage'];
?>
        <div class="col-md-12">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="col-md-9 heading_title">
                            Banner Information
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            if(isset($bannerMsg)){
                               // unlink($delImage);
                                echo "<span style='color:green;font-size:20px'>".$bannerMsg."</span>";
                            }
                        ?>
                        `   
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Banner Title</label>
                                <div class="col-sm-8">
                                    <input type="text" name="bannerTitle" class="form-control" value="<?=$result['bannerTitle']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Button Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="bannerButton" value="<?=$result['bannerButton']?>">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Button Url</label>
                                <div class="col-sm-8">
                                    <input type="text" name="bannerButtonUrl" class="form-control" value="<?=$result['bannerButtonUrl']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Banner Details</label>
                                        <div class="col-sm-8">
                                            <textarea name="bannerDetails" class="form-control" rows="5"><?=$result['bannerDetails'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Banner Type</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select_cus" name="bannerType" required>
                                              <option value="1" <?php if($result['bannerType'] == 1) echo "selected"; ?>>Unpublish</option>                    
                                              <option value="2" <?php if($result['bannerType'] == 2) echo "selected"; ?>>Publish</option>                       
                                            </select>
                                        </div>
                                    </div>
                                    <!--<div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Upload Banner Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="bannerImage" class="form-control"/>
                                            <img src="uploads/bannerImage/<?php //echo $result['bannerImage'];?>" alt="" style="margin-top:20px;width:300px;height:100px;">

                                        </div>
                                    </div>-->
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
