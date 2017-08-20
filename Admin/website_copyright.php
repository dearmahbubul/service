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
    $copyright = validation($_POST['copyright']);
    if(!empty($copyright)){
        $query = "update tbl_description set copyright='$copyright' where value='copyright'";
        if(mysqli_query($con,$query)){
            $copyrightMsg = "Website copyright updated succesfully";
        }else{
            $copyrightMsg = "Website copyright not updated";
        }
    }else{
        $copyrightMsg = "Filed can't be empty";
    }
}
?>
<div class="col-md-12">
    <form class="form-horizontal" action="" method="post">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-9 heading_title">
                    Update website copyright
                </div>
                <div class="col-md-3 text-right">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <?php
                if(isset($copyrightMsg)){
                    echo "<script>alert('$copyrightMsg')</script>";
                    //echo "<span style='color:green;font-size:20px'>".$headingMsg."</span>";
                }
                ?>
                <?php
                $query = "SELECT copyright FROM tbl_description WHERE value='copyright'";
                $copyrightResult = mysqli_query($con,$query);

                if($copyrightResult){
                $result = mysqli_fetch_array($copyrightResult);
                ?>`
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Website copyright</label>
                    <div class="col-sm-8">
                        <input type="text" name="copyright" class="form-control" value="<?=$result['copyright'];?>" required>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button class="btn btn-sm btn-primary">Update copyright</button>
            </div>
            <?php } ?>
        </div>
    </form>
</div>
<!--col-md-12 end-->
<?php
getFooter();
?>
