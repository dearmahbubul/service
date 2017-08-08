<?php
require_once "functions/function.php";
?>
<?php
/**
 * Created by PhpStorm.
 * User: Mahbubul Alam
 * Date: 8/6/2017
 * Time: 7:34 PM
 */?>
<?php
getHeader();
getSidebar();
getBread();
?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $companyName = validation($_POST['companyName']);
    $companyAddress = validation($_POST['companyAddress']);
    $companyPhone = validation($_POST['companyPhone']);
    $companyEmail = validation($_POST['companyEmail']);
    if(!empty($companyName) && !empty($companyAddress) && !empty($companyPhone) && !empty($companyEmail)){
        $query = "update tbl_description set companyName='$companyName',companyAddress='$companyAddress',companyPhone='$companyPhone',companyEmail='$companyEmail' where value='company_details'";
        if(mysqli_query($con,$query)){
            $companyMsg = "Company infomrmation updated succesfully";
        }else{
            $companyMsg = "Company information not updated";
        }
    }else{
        $companyMsg = "Filed can't be empty";
    }
}
?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Update Company Details
                </div>
                <div class="col-md-3 text-right">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <?php
                if(isset($companyMsg)){
                    echo "<script>alert('$companyMsg')</script>";
                    //echo "<span style='color:green;font-size:20px'>".$headingMsg."</span>";
                }
                ?>
                <?php
                $query = "SELECT * FROM tbl_description WHERE value='company_details'";
                $companyResult = mysqli_query($con,$query);

                if($companyResult){
                $result = mysqli_fetch_array($companyResult);
                ?>`
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Company Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="companyName" class="form-control" value="<?=$result['companyName'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Company Address</label>
                    <div class="col-sm-8">
                        <input type="text" name="companyAddress" class="form-control" value="<?=$result['companyAddress'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Company Phone</label>
                    <div class="col-sm-8">
                        <input type="text" name="companyPhone" class="form-control" value="<?=$result['companyPhone'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Company Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="companyEmail" class="form-control" value="<?=$result['companyEmail'];?>" required>
                    </div>
                </div>

            </div>
            <div class="panel-footer text-center">
                <button class="btn btn-sm btn-primary">Update Company Details</button>
            </div>
            <?php } ?>
        </div>
    </form>
</div>
<!--col-md-12 end-->
<?php
getFooter();
?>

