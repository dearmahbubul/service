<?php
    require_once "functions/function.php";
?>
<?php
    if(isset($_GET['userEditId']) && $_GET['userEditId'] != NULL){
        $userId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['userEditId']);
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
    $userQuery = "SELECT * FROM tbl_admin_user WHERE userId='$userId'";
    $userResult = mysqli_query($con,$userQuery);
    $uData = mysqli_fetch_array($userResult);
    $delImage = $uData['userImage'];
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $image = $_FILES['image'];
        if(!empty($image)){
             $ImageName='user-'.time().'-'.rand(10000, 100000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
             $query = "UPDATE tbl_admin_user SET userImage='$ImageName' WHERE userId='$userId'";
             
             $adminResult = mysqli_query($con,$query);
             if($adminResult){
                 move_uploaded_file($image['tmp_name'],'uploads/'.$ImageName);
                 $userMsg = "Your profile picture has been changed";
                 if($delImage != NULL){
                 $delImage = 'uploads/'.$delImage;
                 unlink($delImage);
                 }
             }
    }else{
        $userMsg ="Field must not be empty!";
    }
}
?>
        <div class="col-md-12">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="col-md-9 heading_title">
                            Your Information
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            if(isset($userMsg)){
                                echo "<span style='color:green;font-size:20px'>".$userMsg."</span>";
                            }
                        ?>  
                            <div align="center">
                                <?php
                                    if(isset($uData['userImage']) && $uData['userImage'] != NULL && !empty($uData['userImage'])){
                                ?>
                                <img src="uploads/<?=$uData['userImage'];?>" alt="" style="width:250px;height:250px;margin-bottom:10px;">
                                <?php } else{ ?>
                                <img src="images/avatar.png" alt="" style="width:250px;height:250px;margin-bottom:10px;">
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Profile image</label>
                                <div class="col-sm-8">
                                    <input type="file" name="image" class="form-control" required/>
                                </div>
                            </div>
                            
                    </div>
                    <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="changeImage">Change profile image</button>
                    </div>
                </div>
            </form>
        </div>
        <!--col-md-12 end-->
        <?php
    getFooter();
?>
