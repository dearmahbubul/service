<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 2){
        header("Location:index.php");   
    }
?>
<?php
    if(isset($_GET['userDeleteId']) && $_GET['userDeleteId'] != NULL){
        $userId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['userDeleteId']);
        $delQuery = "delete from tbl_admin_user where userId='$userId'";
        if(mysqli_query($con,$delQuery)){
            $delMsg = "User id delete success";
        }else{
            $delMsg = "User id not deleted, something wrong";
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
                                All Information View
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="addUser.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add User</a>
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
                                    	<th>Name</th>
                                        <th>Email</th>
                                        <th>User Role</th>
                                        <th class="hidden-xs">Address</th>
                                        <th class="hidden-xs">Phone</th>
                                        <th>Manage</th>
                                    </tr>
                            	</thead>
                                <tbody>
                                 <?php
                                    $query = "SELECT * FROM tbl_admin_user natural join tbl_admin_user_role ORDER BY roleId ASC";
                                    $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                                    if($result){
                                        $i=0;
                                        foreach($result as $user){
                                 ?>
                                	<tr>
                                       <td><?=++$i;?></td>
                                    	<td><?=$user['userName'];?></td>
                                        <td><?=$user['userEmail'];?></td>
                                        <td><?=$user['roleName'];?></td>
                                        <td class="hidden-xs"><?=$user['userAddress'];?></td>
                                        <td class="hidden-xs"><?=$user['userNumber'];?></td>
                                        
                                        <td>
                                        	<a href="viewUser.php?userViewId=<?=$user['userId'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
                            
                                            <a onclick="return confirm('Are you sure to remove this id');" href="?userDeleteId=<?=$user['userId'];?>"><i class="fa fa-trash fa-lg"></i></a>
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