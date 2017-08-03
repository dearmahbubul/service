<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 3){
        header("Location:index.php");   
    }
?>
<?php
    if(isset($_GET['menuDeleteId']) && $_GET['menuDeleteId'] != NULL){
        $menuId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['menuDeleteId']);
        $delQuery = "delete from tbl_menu where menuId='$menuId'";
        if(mysqli_query($con,$delQuery)){
            $delMsg = "Menu delete success";
        }else{
            $delMsg = "Menu not deleted, something wrong";
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
                                All Menu Information View
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="addmenu.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add menu</a>
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
                                    	<th>menu position</th>
                                    	<th>menu name</th>
                                        <th>menu status</th>
                                        <th>menu URL</th>
                                        <th>menu uploaded</th>
                                        <th>Manage</th>
                                    </tr>
                            	</thead>
                                <tbody>
                                 <?php
                                    $query = "SELECT * FROM tbl_menu ORDER BY menuPosition ASC";
                                    $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                                    if($result){
                                        foreach($result as $menu){
                                 ?>
                                	<tr>
                                        <td><?php if(empty($menu['menuPosition'])){echo "Not define";}else{echo $menu['menuPosition'];}?></td>
                                    	<td><?=$menu['menuName'];?></td>
                                        <td><?php if($menu['menuStatus']==1){echo "Unpublish";}else{echo "Publish";}?></td>
                                        <td><?=$menu['menuUrl'];?></td>
                                        <td><?=formatDate($menu['menuUploadeDate']);?></td>
                                        
                                        <td>
                                        	
                                           <a href="Editmenu.php?menuEditId=<?=$menu['menuId'];?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                                            <a onclick="return confirm('Are you sure to remove this menu');" href="?menuDeleteId=<?=$menu['menuId'];?>"><i class="fa fa-trash fa-lg"></i></a>
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