<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 3){
        header("Location:index.php");   
    }
?>
<?php
    if(isset($_GET['contactDeleteId']) && $_GET['contactDeleteId'] != NULL){
        $contactId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['contactDeleteId']);
        $delQuery = "delete from tbl_contact where contactId='$contactId'";
        if(mysqli_query($con,$delQuery)){
            $delMsg = "Message delete sucess";
        }else{
            $delMsg = "Message not deleted, something wrong";
        }
    }
?>
<?php
    if(isset($_GET['contactSeenId']) && $_GET['contactSeenId'] != NULL){
        $contactId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['contactSeenId']);
        $delQuery = "update tbl_contact set contactStatus='2' where contactId='$contactId'";
        if(mysqli_query($con,$delQuery)){
            $delMsg = "Message Send to seen box";
        }else{
            $delMsg = "Message not send in seen box, something wrong";
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
                                All Message View
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="allMessageSeen.php" class="btn btn-sm btn btn-primary"><i class="fa fa-sign-out"></i> Seen box </a>
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
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Manage</th>
                                    </tr>
                            	</thead>
                                <tbody>
                                 <?php
                                    $query = "SELECT * FROM tbl_contact where contactStatus='1' ORDER BY contactId DESC";
                                    $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                                    if($result){
                                        $i=0;
                                        foreach($result as $contact){
                                 ?>
                                	<tr>
                                       <td><?=++$i;?></td>
                                    	<td><?=$contact['contactName'];?></td>
                                        <td><?=$contact['contactEmail'];?></td>
                                        <td><?=$contact['contactSubject'];?></td>
                                        <td><?=textShorten($contact['contactMessage'],30);?>...</td>
                                        
                                        <td>
                                        	<a href="viewMessage.php?contactViewId=<?=$contact['contactId'];?>" title="View full message"><i class="fa fa-plus-square fa-lg"></i></a>
                                        	<!--<a href="viewcontact.php?contactMsgSentId=<?php //echo $contact['contactId'];?>"><i class="fa fa-sign-out fa-lg"></i></a>-->
                            
                                            <a onclick="return confirm('Are you sure to remove this Message');" href="?contactDeleteId=<?=$contact['contactId'];?>" title="Delete message"><i class="fa fa-trash fa-lg"></i></a>
                                            <a onclick="return confirm('Are you sure to transfer this Message in Seen box');" href="?contactSeenId=<?=$contact['contactId'];?>" title="Transfer to Unseen box"><i class="fa fa-sign-in fa-lg"></i></a>
                                        </td>
                                    </tr>
                                    <?php } } ?>
                                    
                                </tbody>
                          </table>
                      </div>
                      <div class="panel-footer">
                        <div class="col-md-4">
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