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
    $website_heading = validation($_POST['website_heading']);
    
    if(!empty($website_heading)){
              
        $query = "update tbl_description set website_heading='$website_heading' where value='website_heading'";
        if(mysqli_query($con,$query)){
            $headingMsg = "Website heading updated succesfully";
        }else{
            $headingMsg = "Website heading not updated";
        }

    }else{
        $headingMsg = "Filed can't be empty";
        }
}
?>
                <div class="col-md-12">
                    <form class="form-horizontal" action="" method="post">
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
                                if(isset($headingMsg)){
                                    echo "<script>alert('$headingMsg')</script>";
                                    //echo "<span style='color:green;font-size:20px'>".$headingMsg."</span>";
                                }
                            ?>
                            <?php
                                 $query = "SELECT website_heading FROM tbl_description WHERE value='website_heading'";
                                 $headingResult = mysqli_query($con,$query);

                                 if($headingResult){
                                     $result = mysqli_fetch_array($headingResult);
                            ?>` 
                                <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Website heading</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="website_heading" class="form-control" value="<?=$result['website_heading'];?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn btn-sm btn-primary">Update heading</button>
                            </div>
                            <?php } ?>
                        </div>
                    </form>
                </div>
                <!--col-md-12 end-->
<?php
    getFooter();
?>
