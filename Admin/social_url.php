<?php
require_once "functions/function.php";
?>
<?php
/**
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
    $facebookUrl = validation($_POST['facebookUrl']);
    $linkedinUrl = validation($_POST['linkedinUrl']);
    $pinterestUrl = validation($_POST['pinterestUrl']);
    $googleplusUrl = validation($_POST['googleplusUrl']);

    $query = "update tbl_description set facebookUrl='$facebookUrl',linkedinUrl='$linkedinUrl',pinterestUrl='$pinterestUrl',googleplusUrl='$googleplusUrl' where value='social_url'";
    if(mysqli_query($con,$query)){
        $socialMsg = "Social infomrmation updated succesfully";
    }else{
        $socialMsg = "Social information not updated";
    }
}
?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Update Social Details
                </div>
                <div class="col-md-3 text-right">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <?php
                if(isset($socialMsg)){
                    echo "<script>alert('$socialMsg')</script>";
                    //echo "<span style='color:green;font-size:20px'>".$headingMsg."</span>";
                }
                ?>
                <?php
                $query = "SELECT * FROM tbl_description WHERE value='social_url'";
                $socialResult = mysqli_query($con,$query);

                if($socialResult){
                $result = mysqli_fetch_array($socialResult);
                ?>`
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Facebook URL</label>
                    <div class="col-sm-8">
                        <input type="text" name="facebookUrl" class="form-control" value="<?=$result['facebookUrl'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Linkedin URL</label>
                    <div class="col-sm-8">
                        <input type="text" name="linkedinUrl" class="form-control" value="<?=$result['linkedinUrl'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Pinterest URL</label>
                    <div class="col-sm-8">
                        <input type="text" name="pinterestUrl" class="form-control" value="<?=$result['pinterestUrl'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">GooglePlus URL</label>
                    <div class="col-sm-8">
                        <input type="text" name="googleplusUrl" class="form-control" value="<?=$result['googleplusUrl'];?>">
                    </div>
                </div>

            </div>
            <div class="panel-footer text-center">
                <button class="btn btn-sm btn-primary">Update Social URL</button>
            </div>
            <?php } ?>
        </div>
    </form>
</div>
<!--col-md-12 end-->
<?php
getFooter();
?>

