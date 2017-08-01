<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 4){
        header("Location:index.php");   
    }
?>
<?php
    if(isset($_GET['galleryDeleteId']) && $_GET['galleryDeleteId'] != NULL){
        $galleryId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['galleryDeleteId']);
        $delQuery = "delete from tbl_gallery where galleryId='$galleryId'";
        if(mysqli_query($con,$delQuery)){
            $delMsg = "Image delete success";
        }else{
            $delMsg = "Image not deleted, something wrong";
        }
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
                                All Gallery Information View
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="addGallery.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add gallery</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                         <?php
                            if(isset($delMsg)){
                                echo "<span style='color:green;font-size:20px'>".$delMsg."</span>";
                            }
                        ?>
                          <table class="table table-responsive table-striped table-hover table_cus">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>S.N</th>
                                    	<th>Image Uploader</th>
                                        <th>Image</th>
                                        <th>Uploade Date</th>
                                        <th>Manage</th>
                                    </tr>
                            	</thead>
                                <tbody>
                                 <?php
                                    $query = "SELECT * FROM tbl_gallery ORDER BY galleryId DESC";
                                    $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                                    if($result){
                                        $i=0;
                                        foreach($result as $gallery){
                                 ?>
                                	<tr>
                                        <td><?=++$i;?></td>
                                        <td><a href=""><?=$gallery['galleryButton'];?></a></td>
                                        <td><img src="uploads/galleryImage/<?=$gallery['galleryImage'];?>" alt="" style="width:70px;height:50px;"></td>
                                        <td class="hidden-xs"><?=textShorten($gallery['galleryDetails'],20);?>...</td>
                                        
                                        <td>
                                        	<a href="viewgallery.php?galleryViewId=<?=$gallery['galleryId'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                           <a href="galleryEdit.php?galleryEditId=<?=$gallery['galleryId'];?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                            <a onclick="return confirm('Are you sure to remove this gallery');" href="?galleryDeleteId=<?=$gallery['galleryId'];?>"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                    <?php } } ?>
                                    
                                </tbody>
                          </table>
                      </div>
                      <div class="panel-footer">
                        <div class="col-md-4">
                        	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                            <a href="#" class="btn btn-sm btn-primary">PDF</a>
                            <a href="#" class="btn btn-sm btn-danger">SVG</a>
                            <a href="#" class="btn btn-sm btn-success">PRINT</a>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">
                        	<nav aria-label="Page navigation">
                              <ul class="pagination pagina_cus">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                </div><!--col-md-12 end-->
<?php
    getFooter();
?>