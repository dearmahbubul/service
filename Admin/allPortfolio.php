<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 3){
        header("Location:index.php");   
    }
?>
<?php
    if(isset($_GET['portfolioDeleteId']) && $_GET['portfolioDeleteId'] != NULL){
        $portfolioId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['portfolioDeleteId']);
        $delQuery = "delete from tbl_portfolio where portfolioId='$portfolioId'";
        if(mysqli_query($con,$delQuery)){
            $delMsg = "Portfolio delete success";
        }else{
            $delMsg = "Portfolio not deleted, something wrong";
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
                                All Portfolio Information View
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="addPortfolio.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Portfolio</a>
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
                                    	<th>Portfolio Category</th>
                                        <th>Portfolio Status</th>
                                        <th class="hidden-xs">Portfolio Image</th>
                                        <th class="hidden-xs">Portfolio Title</th>
                                        <th>Manage</th>
                                    </tr>
                            	</thead>
                                <tbody>
                                 <?php
                                    $query = "SELECT * FROM tbl_portfolio ORDER BY portfolioId DESC";
                                    $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                                    if($result){
                                        $i=0;
                                        foreach($result as $portfolio){
                                 ?>
                                	<tr>
                                        <td><?=++$i;?></td>
                                        <td><?php if($portfolio['portfolio_categoryId']==1){echo "Web";}
                                            elseif($portfolio['portfolio_categoryId']==3){echo "Graphic";}
                                            elseif($portfolio['portfolio_categoryId']==2){echo "Icons";}
                                            else{echo "";}
                                            
                                            ?></td>
                                        <td><?php if($portfolio['portfolioStatus']==1){echo "Unpublish";}else{echo "Publish";}?></td>
                                        <td class="hidden-xs"><img src="uploads/portfolioImage/<?=$portfolio['portfolioImage'];?>" alt="" style="width:70px;height:50px;"></td>
                                        <td class="hidden-xs"><?=textShorten($portfolio['portfolioTitle'],50);?>...</td>
                                        
                                        <td>
                                        	<a href="viewportfolio.php?portfolioViewId=<?=$portfolio['portfolioId'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
                                           <a href="portfolioEdit.php?portfolioEditId=<?=$portfolio['portfolioId'];?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                           <?php if($_SESSION['roleId'] <= 2 || $portfolio['portfolioUploaderId'] == $_SESSION['userId']){ ?>
                                            <a onclick="return confirm('Are you sure to remove this portfolio');" href="?portfolioDeleteId=<?=$portfolio['portfolioId'];?>"><i class="fa fa-trash fa-lg"></i></a>
                                          <?php } ?>
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