<?php require_once "functions/function.php";?>
<?php
    if(isset($_POST['searchValue']) && $_POST['searchValue'] != NULL){
        $searchValue = $_POST['searchValue'];
    }
    else{
        header("Location:404.php");
    }
?>
<?php  getHeader(); //You better know?>
<?php  getBread(); ?>
<?php
   $postQuery = "SELECT * FROM tbl_post WHERE post_postStatus='2' AND (post_postDetails like '%$searchValue%' or post_postTitle like '%$searchValue%')";
   $postResult = mysqli_query($con,$postQuery);
   if($postResult){ ?>
	<section id="content">
	<div class="container">
		<div class="row">
                <div class="col-lg-8">
               <?php  
                      while($post = $postResult->fetch_array()){
                          extract($post);
                 ?>
                    <article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="postView.php?postViewId=<?=$post_postId;?>"><?=$post_postTitle;?></a></h3>
							</div>
							<img src="Admin/uploads/postImage/<?=$post_postImage;?>" alt="" style="width:750px;height:300px;"/>
						</div>
						<p><?=textShorten($post_postDetails,280);?></p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> <?=formatDate($post_postUploadeDate);?></a></li>
								<li><i class="icon-user"></i><a href="#"> <?=$post_postUploader;?></a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
							<a href="postView.php?postViewId=<?=$post_postId;?>" class="pull-right"><?=$post_postButtonText;?> <i class="icon-angle-right"></i></a>
						</div>
				</article>
                    <?php } ?>
                </div>
                <div class="col-lg-8">
                    <?php
                    $bannerQuery = "SELECT * FROM tbl_banner WHERE bannerType='2' AND (bannerDetails like '%$searchValue%' or bannerTitle like '%$searchValue%')";
    
                    $bannerResult = mysqli_query($con,$bannerQuery);
                    if($bannerResult){
						while($banner = $bannerResult->fetch_array()){
                        
                            extract($banner);
                            ?>
                            <article>
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><?=$bannerTitle;?></h3>
                                    </div>
                                    <img src="Admin/uploads/bannerImage/<?=$bannerImage;?>" alt="" style="width:750px;height:300px;"/>
                                </div>
                                <p><?=textShorten($bannerDetails,280);?></p>
                                <div class="bottom-article">
                                    <ul class="meta-post">
                                        <li><i class="icon-calendar"></i><a href="#"> <?=formatDate($bannerUplodeDate);?></a></li>
                                        <li><i class="icon-user"></i><a href="#"> <?=$bannerUploaderName;?></a></li>
                                        <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                        <li><i class="icon-comments"></i><a href="#">No Comments</a></li>
                                    </ul>
                                </div>
        

                            </article>
                        <?php } }?>
                </div>
                
                
            </div>
        </div>
<?php getFooter(); ?>
<?php }else{echo "<b>Not post here</b>";}?>