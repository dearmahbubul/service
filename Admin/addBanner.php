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
    
    $bannerTitle = validation($_POST['bannerTitle']);
    $bannerDetails = validation($_POST['bannerDetails']);
    $bannerButton = validation($_POST['bannerButton']);
    $bannerType = validation($_POST['bannerType']);
    $bannerUploaderName = $_SESSION['userName'];
    $bannerUploaderId = $_SESSION['userId'];
    $bannerImage = $_FILES['bannerImage'];
    
    if(!empty($bannerImage) && !empty($bannerButton) && !empty($bannerDetails) && !empty($bannerDetails)){
          
            $ImageName = 'banner-'.time().'-'.rand(10000,100000).'.'.pathinfo($bannerImage['name'],PATHINFO_EXTENSION);
    
            $query = "insert into tbl_banner(bannerTitle,bannerDetails,bannerButton,bannerUploaderId,bannerUploaderName,bannerImage,bannerType) values('$bannerTitle','$bannerDetails','$bannerButton','$bannerUploaderId','$bannerUploaderName','$ImageName','$bannerType')";
            if(mysqli_query($con,$query)){
            move_uploaded_file($bannerImage['tmp_name'],'uploads/bannerImage/'.$ImageName);
            $bannerMsg = "Banner Uploaded succesfully";
            }else{
                $bannerMsg = "Banner not created";
            }

    }else{
            $bannerMsg = "Filed can't be empty";
        }
}
?>
                <div class="col-md-12">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="col-md-9 heading_title">
                                    Add Banner Information
                                </div>
                                <div class="col-md-3 text-right">
                                    <a href="allBanner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Banner Information</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <?php
                            if(isset($bannerMsg)){
                                echo "<span style='color:green;font-size:20px'>".$bannerMsg."</span>";
                            }
                        ?>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Banner Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="bannerTitle" class="form-control" placeholder="Banner title" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Banner button name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="bannerButton" class="form-control" placeholder="Button Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Banner Details</label>
                                        <div class="col-sm-8">
                                            <textarea name="bannerDetails" class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Banner Type</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select_cus" name="bannerType" required>
                                              <option value="1">Unpublish</option>                    
                                              <option value="2">Publish</option>                       
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Upload Banner Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="bannerImage" class="form-control" required/>
                                        </div>
                                    </div>
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn btn-sm btn-primary" name="addBanner">Add Banner</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--col-md-12 end-->
                <?php
    getFooter();
?>
