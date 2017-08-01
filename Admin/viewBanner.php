<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 4){
        header("Location:index.php");   
    }
?>
    <?php
    if(isset($_GET['bannerViewId']) && $_GET['bannerViewId'] != NULL){
        $bannerId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['bannerViewId']);
    }
?>
        <?php
    getHeader();
    getSidebar();
    getBread();
?>
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="col-md-9 heading_title">
                            Banner Information
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="allBanner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Banner Information</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-9">
                            <?php
                            $query = "select * from tbl_banner where bannerId='$bannerId'";
                            $result = mysqli_query($con,$query);
                            if($result){
                            $banner = mysqli_fetch_array($result);
                              extract($banner);
                          ?>
                                <div align='center'>
                                   <?php if($bannerImage){  ?>
                                    <img src="uploads/bannerImage/<?=$bannerImage;?>" alt="" style="height:300px;width:600px;margin-bottom:10px;">
                                    <?php }else{ ?>
                                    <img src="images/avatar.png" alt="" style="height:200px;width:350px;margin-bottom:10px;">
                                    <?php }  ?>
                                </div>
                                <table class="table table-hover table-striped table-responsive view_table_cus">
                                    <tr>
                                        <td>Banner Title</td>
                                        <td>:</td>
                                        <td>
                                            <?=$bannerTitle;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Banner Button</td>
                                        <td>:</td>
                                        <td>
                                            <?=$bannerButton;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Banner Details</td>
                                        <td>:</td>
                                        <td>
                                            <?=$bannerDetails;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Banner Button Url</td>
                                        <td>:</td>
                                        <td>
                                            <?=$bannerButtonUrl;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Banner Category</td>
                                        <td>:</td>
                                        <td>
                                            <?=$bannerCategory;?>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Banner Uploade Time</td>
                                        <td>:</td>
                                        <td>
                                            <?=formatDate($bannerUplodeDate);?>
                                        </td>
                                    </tr>
                                    <?php if($_SESSION['userId'] <= 2){ ?>
                                        <tr>
                                            <td>Banner Uploader</td>
                                            <td>:</td>
                                            <td>
                                                <a href="viewUser.php?userViewId=<?=$bannerUploaderId;?>"><?=$bannerUploaderName;?></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                            </table>
                                      <?php
                                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                                                $bannerType = validation($_POST['bannerType']);
                                                if(!empty($bannerType)){
                                                    $updateBannerQuery = "update tbl_banner set bannerType='$bannerType' where bannerId='$bannerId'";
                                                    if(mysqli_query($con,$updateBannerQuery)){
                                                        echo "<script>alert('Banner type Changed')</script>";
                                                    }
                                                      
                                                }
                                            }
                                
                                        ?>
                                       <form action="" method="post" class="form-horizontal">
                                        <div class="form-group">
                                            <label for="" class="col-sm-3 control-label">banner Type</label>
                                            <div class="col-sm-4">
                                              <select class="form-control select_cus" name="bannerType" required>
                                                 
                                                        <option value="1" <?php if($bannerType == 1){echo "selected";}else{echo "";} ?> >Unpublish</option>
                                                        <option value="2" <?php if($bannerType == 2){echo "selected";}else{echo "";} ?> >Publish</option>
                        
                                              </select>
                                               </div>
                                               <div class="col-sm-4">
                                                    <button class="btn btn-sm btn-primary" name="chngRole" style="display:inline-block;">Change Banner Type</button>
                                                </div>
                                           
                                        </div>
                                    </form>
                                <?php  }else{echo "No data found";} ?>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-sm btn-primary">PDF</a>
                            <a href="#" class="btn btn-sm btn-success">PRINT</a>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!--col-md-12 end-->
            <?php
    getFooter();
?>
