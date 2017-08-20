<?php require_once "functions/function.php";?>
<?php
    if(isset($_GET['postViewId']) && $_GET['postViewId'] != NULL){
        $postId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['postViewId']);
    }elseif(isset($_GET['catId']) && $_GET['catId'] != NULL){
        $catId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['catId']);
    }elseif(isset($_GET['bannerId']) && $_GET['bannerId'] != NULL){
        $bannerId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['bannerId']);
    }elseif(isset($_GET['pageId']) && $_GET['pageId'] != NULL){
        $pageId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['pageId']);
    }elseif(isset($_GET['featureId']) && $_GET['featureId'] != NULL){
        $featureId = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['featureId']);
    }
    else{
        header("Location:404.php");
    }
?>
<?php  getHeader(); ?>
<?php  getBread(); ?>

	<section id="content">
	<div class="container">
		<div class="row">
            <?php
            if(isset($postId)){
            ?>
                <div class="col-lg-8">
                 <?php
                   $postQuery = "SELECT * FROM tbl_post WHERE post_postId='$postId'";
                   $postResult = mysqli_query($con,$postQuery);
                   if($postResult){
                      while($post = $postResult->fetch_array()){
                          extract($post);
                 ?>
                    <article>
                            <div class="post-image">
                                <div class="post-heading">
                                    <h3><?=$post_postTitle;?></h3>
                                </div>
                                <img src="Admin/uploads/postImage/<?=$post_postImage;?>" alt="" style="width:730px;height:350px;"/>
                            </div>
                        <div class="bottom-article">
                            <ul class="meta-post">
                                <li><i class="icon-calendar"></i><a href="#"> <?=formatDate($post_postUploadeDate);?></a></li>
                                <li><i class="icon-user"></i><a href="#"> <?=$post_postUploader;?></a></li>
                                <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                <li><i class="icon-comments"></i><a href="#">No Comments</a></li>
                            </ul>
                        </div>
                            <p><?=$post_postDetails;?></p>

                    </article>
                    <?php } }else{echo "Not post here";}?>
                </div>
            <?php }elseif(isset($catId)){ ?>

                <div class="col-lg-8">
                    <?php
                    $postQuery = "SELECT * FROM tbl_post WHERE post_categoryId='$catId'";
                    $postResult = mysqli_query($con,$postQuery);
                    if($postResult){
                        while($post = $postResult->fetch_array()){
                            extract($post);
                            ?>
                            <article>
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><?=$post_postTitle;?></h3>
                                    </div>
                                    <img src="Admin/uploads/postImage/<?=$post_postImage;?>" alt="" style="width:730px;height:350px;"/>
                                </div>
                                <div class="bottom-article">
                                    <ul class="meta-post">
                                        <li><i class="icon-calendar"></i><a href="#"> <?=formatDate($post_postUploadeDate);?></a></li>
                                        <li><i class="icon-user"></i><a href="#"> <?=$post_postUploader;?></a></li>
                                        <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                        <li><i class="icon-comments"></i><a href="#">No Comments</a></li>
                                    </ul>
                                    <a href="postView.php?postViewId=<?=$post_postId;?>" class="pull-right"><?=$post_postButtonText;?> <i class="icon-angle-right"></i></a>

                                </div>
                                <p><?=textShorten($post_postDetails,280);?></p>

                            </article>
                        <?php } }else{echo "No category post here";}?>
                </div>

           <?php }elseif(isset($bannerId)){?>
                <div class="col-lg-8">
                    <?php
                    $bannerQuery = "SELECT * FROM tbl_banner WHERE bannerId='$bannerId'";
                    $bannerResult = mysqli_query($con,$bannerQuery);
                    if($bannerResult){
                        $banner = $bannerResult->fetch_array();
                            extract($banner);
                            ?>
                            <article>
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h3><?=$bannerTitle;?></h3>
                                    </div>
                                    <img src="Admin/uploads/bannerImage/<?=$bannerImage;?>" alt="" style="width:730px;height:350px;"/>
                                </div>
                                <div class="bottom-article">
                                    <ul class="meta-post">
                                        <li><i class="icon-calendar"></i><a href="#"> <?=formatDate($bannerUplodeDate);?></a></li>
                                        <li><i class="icon-user"></i><a href="#"> <?=$bannerUploaderName;?></a></li>
                                        <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                        <li><i class="icon-comments"></i><a href="#">No Comments</a></li>
                                    </ul>
                                </div>
                                <?=$bannerDetails;?>

                            </article>
                        <?php  }else{echo "No banner here";}?>
                </div>

           <?php }elseif(isset($pageId)){?>

            <div class="col-lg-8">
                <?php
                $pageQuery = "SELECT * FROM tbl_pageandfeature WHERE pId='$pageId'";
                $pageResult = mysqli_query($con,$pageQuery);
                if($pageResult){
                    $page = $pageResult->fetch_array();
                    extract($page);
                    ?>
                    <article>
                        <div class="post-image">
                            <div class="post-heading">
                                <h3><?=$pTitle;?></h3>
                            </div>
                        </div>
                        <div class="bottom-article">
                            <ul class="meta-post">
                                <li><i class="icon-calendar"></i><a href="#"> <?=formatDate($pUploadedDate);?></a></li>
                                <li><i class="icon-user"></i><a href="#"> <?=$pUploaderName;?></a></li>
                                <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                <li><i class="icon-comments"></i><a href="#">No Comments</a></li>
                            </ul>
                        </div>
                        <?=$pDetails;?>

                    </article>
                <?php  }else{echo "No banner here";}?>
            </div>
            <?php }elseif(isset($featureId)){ ?>
                <div class="col-lg-8">
                    <?php
                    $featureQuery = "SELECT * FROM tbl_pageandfeature WHERE pId='$featureId'";
                    $featureResult = mysqli_query($con,$featureQuery);
                    if($featureResult){
                        $feature = $featureResult->fetch_array();
                        extract($feature);
                        ?>
                        <article>
                            <div class="post-image">
                                <div class="post-heading">
                                    <h3><?=$pTitle;?></h3>
                                </div>
                            </div>
                            <i class="<?=$pIconClass;?>" style="display: block;text-align: center;font-size: 150px;"></i><br/>
                            <div class="bottom-article">
                                <ul class="meta-post">
                                    <li><i class="icon-calendar"></i><a href="#"> <?=formatDate($pUploadedDate);?></a></li>
                                    <li><i class="icon-user"></i><a href="#"> <?=$pUploaderName;?></a></li>
                                    <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                    <li><i class="icon-comments"></i><a href="#">No Comments</a></li>
                                </ul>
                            </div>
                            <?=$pDetails;?>
                        </article>
                    <?php  }else{echo "No banner here";}?>
                </div>
            <?php  }else{echo "Nothing";}?>
            <div class="col-lg-4">
                <aside class="right-sidebar">
                    <div class="widget">
                        <form class="form-search" action="searchView.php" method="post">
                            <input class="form-control" type="text" name="searchValue" placeholder="Search..">
                        </form>
                    </div>
            <?php getPart("postCategory.php"); ?>
            <?php getPart("postLatest.php"); ?>
<?php getFooter(); ?>
