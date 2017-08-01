<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 3){
        header("Location:index.php");   
    }
?>
    <?php
    if(isset($_GET['contactViewId']) && $_GET['contactViewId'] != NULL){
        $contactId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['contactViewId']);
    }
?>
<?php
    getHeader();
    getSidebar();
    getBread();
?>
<?php
    if(isset($_GET['contactDeleteId']) && $_GET['contactDeleteId'] != NULL){
        $contactId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['contactDeleteId']);
        $delQuery = "delete from tbl_contact where contactId='$contactId'";
        if(mysqli_query($con,$delQuery)){
            header("Location:allMessage.php");
        }else{
            echo "Message not deleted, something wrong";
        }
    }
?>
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="col-md-9 heading_title">
                            Personal Information
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="allMessage.php" class="btn btn-sm btn btn-primary"><i class="fa fa-sign-out"></i> All Message</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-9">
                            <?php
                            $query = "select * from tbl_contact where contactId='$contactId'";
                            $result = mysqli_query($con,$query);
                            if($result){
                            $contact = mysqli_fetch_array($result);
                              extract($contact);
                          ?>
                            
                                <table class="table table-hover table-striped table-responsive view_table_cus">
                                    <tr>
                                        <td>Name</td>
                                        <td>:</td>
                                        <td>
                                            <?=$contactName;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>
                                            <?=$contactEmail;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Subject</td>
                                        <td>:</td>
                                        <td>
                                            <?=$contactSubject;?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Message</td>
                                        <td>:</td>
                                        <td>
                                            <?=$contactMessage;?>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Message Time</td>
                                        <td>:</td>
                                        <td>
                                            <?=formatDate($contactMessageDate);?>
                                        </td>
                                    </tr>
                            </table>
                                      
                                
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="col-md-4">
                            <a href="messageReplay.php?contactId=<?=$contactId;?>" class="btn btn-sm btn-primary">Replay Message</a>
                            <a href="?contactDeleteId=<?=$contactId;?>" class="btn btn-sm btn-success">Delete</a>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">

                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?php  }else{echo "No data found";} ?>
                </div>
            </div>
            <!--col-md-12 end-->
            <?php
    getFooter();
?>
