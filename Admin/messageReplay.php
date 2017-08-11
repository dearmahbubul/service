<?php
    require_once "functions/function.php";
?>
<?php
    if($_SESSION['roleId'] > 3){
        header("Location:index.php");   
    }
?>
<?php
    if(isset($_GET['contactId']) && $_GET['contactId'] != NULL){
        $contactId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['contactId']);
    }else{
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
    $tomsg = validation($_POST['tomsg']);
    $frommsg = validation($_POST['frommsg']);
    $message = validation($_POST['contactMessage']);
    $subject = validation($_POST['contactSubject']);
    if(empty($message)){
        $contactMsg = "Message field must not be emplty !";
    }else{
        $sendmail = mail($tomsg,$subject,$message,$frommsg);
        if($sendmail){
            $contactMsg = "Message send successfully";
        }else{
            $contactMsg = "Message not send";
        }

    }
}
?>
<?php
     $query = "SELECT * FROM tbl_contact WHERE contactId='$contactId'";
     $contactResult = mysqli_query($con,$query);

     if($contactResult){
         $result = mysqli_fetch_array($contactResult);
   
?>
        <div class="col-md-12">
            <form class="form-horizontal" action="" method="post">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="col-md-9 heading_title">
                            contact Information
                        </div>
                        <div class="col-md-3 text-right">
                            <a href="allMessage.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Message</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            if(isset($contactMsg)){
                                echo "<span style='color:green;font-size:20px'>".$contactMsg."</span>";
                            }
                        ?>
                        `   
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">To message</label>
                                <div class="col-sm-8">
                                    <input type="email" name="tomsg" class="form-control" value="<?=$result['contactEmail']?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">From message</label>
                                <div class="col-sm-8">
                                    <input type="email" name="frommsg" class="form-control" value="<?=$_SESSION['userEmail']?>" readonly>
                                </div> 
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="<?=$result['contactName']?>" readonly>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Subject</label>
                                <div class="col-sm-8">
                                    <input type="text" name="contactSubject" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Message</label>
                                <div class="col-sm-8">
                                    <textarea name="contactMessage" class="form-control" rows="5" required></textarea>
                                </div>
                            </div>

                                    
                        
                    </div>
                    <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary">Send mail</button>
                    </div>
                </div>
            </form>
            <?php }else{
                            echo "No data found";
                        }  ?>
        </div>
        <!--col-md-12 end-->
        <?php
    getFooter();
?>
