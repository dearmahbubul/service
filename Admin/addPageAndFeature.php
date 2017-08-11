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
    
    $pTitle = validation($_POST['pTitle']);
    $pDetails = $_POST['pDetails'];
    $pIconClass = validation($_POST['pIconClass']);
    $pStatus = validation($_POST['pStatus']);
    $pCategory = validation($_POST['pCategory']);
    $pUploaderId = $_SESSION['userId'];
    $pUploaderName = $_SESSION['userName'];
    if(!empty($pTitle) && !empty($pDetails)){
        $query = "insert into tbl_pageandfeature(pTitle,pDetails,pIconClass,pStatus,pCategory,pUploaderId,pUploaderName) values('$pTitle','$pDetails','$pIconClass','$pStatus','$pCategory','$pUploaderId','$pUploaderName')";
        if (mysqli_query($con, $query)) {
            $Msg = "Uploaded succesfully";
        } else {
            $Msg = "Not Uploaded";
        } 
    }else{
            $Msg = "Filed can't be empty";
        }
}
?>
                <div class="col-md-12">
                    <form class="form-horizontal" action="" method="post">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="col-md-9 heading_title">
                                    Add Information
                                </div>
                                <div class="col-md-3 text-right">
                                    <a href="allPageAndFeature.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Feature And Page Information</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="panel-body">
                                <?php
                            if(isset($Msg)){
                                echo "<span style='color:green;font-size:20px'>".$Msg."</span>";
                            }
                        ?>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Title</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="pTitle" class="form-control" placeholder="Post title" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Feature Icon Class</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="pIconClass" class="form-control" placeholder='Ex: fa fa-desktop fa-3x'/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Details</label>
                                        <div class="col-sm-8">
                                            <textarea name="pDetails" id="pDetails" cols="80" rows="10"></textarea>
                                            <script>
                                                CKEDITOR.replace('pDetails');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Category</label>
                                        <div class="col-sm-4">
                                          <select class="form-control select_cus" name="pCategory">
                                              <option value="1">Feature Work</option>
                                              <option value="2">Page</option>
                                              
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control select_cus" name="pStatus">
                                              <option value="1">Unpublish</option>                  
                                              <option value="2">Publish</option>                       
                                            </select>
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="panel-footer text-center">
                                <button class="btn btn-sm btn-primary" name="uploade">Uploade</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--col-md-12 end-->
                <script src="ckeditor/ckeditor.js"></script>
                <?php
    getFooter();
?>
<!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum repudiandae culpa enim inventore nostrum delectus laboriosam laudantium atque temporibus repellendus ea tenetur, laborum ad quis! Obcaecati cum commodi, inventore sit fugit aut ipsum corporis nesciunt, quaerat ut mollitia molestiae rem a amet praesentium in error sint qui nam reprehenderit maiores ad. Repellendus sit ducimus eaque veritatis eum, obcaecati, repellat velit aliquid tempore ipsa dolorum ipsum ratione explicabo corporis amet, adipisci rem exercitationem dicta, cum eius. Ratione amet eaque vitae eveniet doloremque itaque odit voluptates beatae, quibusdam sapiente ex soluta ipsum aliquid praesentium facere iste, quas earum labore possimus id ut.-->