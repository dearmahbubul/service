<?php
    require_once "functions/function.php";
?>
<?php
/**
 * Created by PhpStorm.
 * User: Mahbubul Alam
 * Date: 8/6/2017
 * Time: 7:24 PM
 */
?>
<?php
getHeader();
getSidebar();
getBread();
?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $websiteLogo = $_FILES['websiteLogo'];

    if(!empty($websiteLogo)){
        $logoName='websiteLogo'.'.'.pathinfo($websiteLogo['name'],PATHINFO_EXTENSION);
        $query = "update tbl_description set websiteLogo='$logoName' where value='logo'";
        if(mysqli_query($con,$query)){
            move_uploaded_file($websiteLogo['tmp_name'],'uploads/'.$logoName);
            $logoMsg = "Website logo updated succesfully";
        }else{
            $logoMsg = "Website logo not updated";
        }
    }else{
        $logoMsg = "Filed can't be empty";
    }
}
?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Update website heading
                </div>
                <div class="col-md-3 text-right">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <?php
                if(isset($logoMsg)){
                    echo "<script>alert('$logoMsg')</script>";
                    //echo "<span style='color:green;font-size:20px'>".$headingMsg."</span>";
                }
                ?>
                <?php
                $query = "SELECT websiteLogo FROM tbl_description WHERE value='logo'";
                $logoResult = mysqli_query($con,$query);

                if($logoResult){
                $result = mysqli_fetch_array($logoResult);
                ?>`
                <div align="center">
                     <img src="uploads/<?=$result['websiteLogo'];?>" alt="" style="width:250px;height:250px;margin-bottom:10px;">
                   <?php } ?>

                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Website Logo</label>
                    <div class="col-sm-8">
                        <input type="file" name="websiteLogo" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button class="btn btn-sm btn-primary">Update Logo</button>
            </div>

        </div>
    </form>
</div>
<!--col-md-12 end-->
<?php
getFooter();
?>
