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
    
    $galleryUploaderName = $_SESSION['userName'];
    $galleryUploaderId = $_SESSION['userId'];
    $galleryURL = $_POST['galleryURL'];
    $galleryImage = $_FILES['galleryImage'];
    
    if(!empty($galleryImage)){
          
            $ImageName = 'gallery-'.time().'-'.rand(10000,100000).'.'.pathinfo($galleryImage['name'],PATHINFO_EXTENSION);
    
            $query = "insert into tbl_gallery(galleryImage,galleryUploaderName,galleryUploaderId,galleryURL) values('$ImageName','$galleryUploaderName','$galleryUploaderId','$galleryURL')";
            if(mysqli_query($con,$query)){
                move_uploaded_file($galleryImage['tmp_name'],'uploads/galleryImage/'.$ImageName);
                $galleryMsg = "Gallery Image Uploaded succesfully";
            }else{
                $galleryMsg = "gallery image not uploaded";
            }

    }else{
            $galleryMsg = "Filed can't be empty";
        }
}
?>
                <div class="col-md-12">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="col-md-9 heading_title">
                                    Add Gallery Information
                                </div>
                                <div class="col-md-3 text-right">
                                    <a href="allGallery.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Gallery Information</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <?php
                            if(isset($galleryMsg)){
                                echo "<span style='color:green;font-size:20px'>".$galleryMsg."</span>";
                            }
                        ?>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Gallery Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="galleryURL" class="form-control" placeholder="Gallery URL">
                                        </div>
                                    </div>
                        
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Gallery Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="galleryImage" class="form-control" required/>
                                        </div>
                                    </div>
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn btn-sm btn-primary" name="addGallery">Uplaode Image</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--col-md-12 end-->
<?php
    getFooter();
?>
