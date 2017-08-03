<?php
    require_once "functions/function.php";
?>
    <?php
    if($_SESSION['roleId'] > 3){
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
    
    $portfolioTitle = validation($_POST['portfolioTitle']);
    $portfolioName = validation($_POST['portfolioName']);
    $portfolioStatus = validation($_POST['portfolioStatus']);
    $portfolio_categoryId = validation($_POST['portfolio_categoryId']);
    $portfolioUploaderName = $_SESSION['userName'];
    $portfolioUploaderId = $_SESSION['userId'];
    $portfolioImage = $_FILES['portfolioImage'];
    
    if(!empty($portfolioImage) && !empty($portfolioName) && !empty($portfolioTitle) && $portfolio_categoryId != 0){
          
            $ImageName = 'portfolio-'.time().'-'.rand(10000,100000).'.'.pathinfo($portfolioImage['name'],PATHINFO_EXTENSION);
    
            $query = "insert into tbl_portfolio(portfolioTitle,portfolioName,portfolioStatus,portfolio_categoryId,portfolioUploaderId,portfolioUploaderName,portfolioImage) values('$portfolioTitle','$portfolioName','$portfolioStatus','$portfolio_categoryId','$portfolioUploaderId','$portfolioUploaderName','$ImageName')";
            if(mysqli_query($con,$query)){
            move_uploaded_file($portfolioImage['tmp_name'],'uploads/portfolioImage/'.$ImageName);
            $portfolioMsg = "Portfolio Uploaded succesfully";
            }else{
                $portfolioMsg = "Portfolio not Uploaded";
            }

    }else{
            $portfolioMsg = "Filed can't be empty";
        }
}
?>
                <div class="col-md-12">
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="col-md-9 heading_title">
                                    Add  Portfolio Information
                                </div>
                                <div class="col-md-3 text-right">
                                    <a href="allPortfolio.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Portfolio Information</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <?php
                            if(isset($portfolioMsg)){
                                echo "<span style='color:green;font-size:20px'>".$portfolioMsg."</span>";
                            }
                        ?>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Portfolio Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="portfolioName" class="form-control" placeholder="Portfolio Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Portfolio Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="portfolioTitle" class="form-control" placeholder="Portfolio title" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Portfolio Image</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="portfolioImage" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Portfolio Category</label>
                                        <div class="col-sm-4">
                                          <select class="form-control select_cus" name="portfolio_categoryId" required>
                                              <option value="0">Select Portfolio Category</option>
                                              <option value="1">Web</option>
                                              <option value="2">Graphics</option>
                                              <option value="3">Icon</option>
                                              
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Portfolio status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select_cus" name="portfolioStatus" required>
                                              <option value="1">Unpublish</option>                  
                                              <option value="2">Publish</option>                       
                                            </select>
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn btn-sm btn-primary" name="addPortfolio">Add Portfolio</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--col-md-12 end-->
                <?php
    getFooter();
?>
