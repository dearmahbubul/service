<?php
    require_once "functions/function.php";
?>
<?php
    if(isset($_GET['userEditId']) && $_GET['userEditId'] != NULL){
        $userId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['userEditId']);
    }else{
        header("Location:index.php");
    }
?>
<?php
    getHeader();
    getSidebar();
    getBread(); 
?>
    <div align="center">
       <table class="table table-hover table-striped table-responsive view_table_cus">
       <tr>
           <td style="text-align:center;"><a href="userProfileImageEdit.php?userEditId=<?=$userId?>">Change profile picture</a></td>
       </tr>
       <tr>
           <td style="text-align:center;"><a href="userProfileInfoEdit.php?userEditId=<?=$userId?>">Change profile information</a></td>
       </tr>
       <tr>
           <td style="text-align:center;"><a href="userProfilePassEdit.php?userEditId=<?=$userId?>">Change password</a></td>
       </tr>
        </table>
    </div>
<?php
    getFooter();
?>
