<?php require_once "functions/function.php";?>
<?php  getHeader(); ?>
<?php  getBread(); ?>

	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
			 <?php
               $postQuery = "SELECT * FROM tbl_post WHERE post_postStatus='2'"; 
               $postResult = mysqli_query($con,$postQuery);
               if($postResult){
                  while($post = $postResult->fetch_array()){
                      extract($post);
             ?>
				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="#"><?=$post_postTitle;?></a></h3>
							</div>
							<img src="Admin/uploads/postImage/<?=$post_postImage;?>" alt="" />
						</div>
						<p><?=textShorten($post_postDetails,280);?></p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> <?=formatDate($post_postUploadeDate);?></a></li>
								<li><i class="icon-user"></i><a href="#"> <?=$post_postUploader;?></a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
							<a href="postView?postViewId=<?=$post_postId;?>" class="pull-right"><?=$post_postButtonText;?> <i class="icon-angle-right"></i></a>
						</div>
				</article>
				<?php } }else{echo "Not post here";}?>
				
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<form class="form-search">
						<input class="form-control" type="text" placeholder="Search..">
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Categories</h5>
					<ul class="cat">
					 <?php 
                      $catQuery = "SELECT * FROM tbl_post_category WHERE post_categoryStatus='2' ORDER BY post_categoryName";
                      $result = mysqli_query($con,$catQuery);
                      $fetchResult = mysqli_fetch_all($result);
                      if($fetchResult){
                        foreach($result as $category){
                            $inCatId = $category['post_categoryId'];
                            $postCountQuery = "SELECT post_postId from tbl_post where post_categoryId='$inCatId'";
                            $countResult = mysqli_query($con,$postCountQuery);
                            $count = mysqli_num_rows($countResult);
                    ?>
						<li><i class="icon-angle-right"></i><a href="categoryPost.php?catId=<?=$category['post_categoryId'];?>"><?=$category['post_categoryName'];?></a><span> (<?=$count;?>)</span></li>
				    <?php } }else{
                          echo "No category found!";
                      } ?>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">
						<?php
                           $postQuery = "SELECT * FROM tbl_post WHERE post_postStatus='2' ORDER BY post_postId DESC LIMIT 3"; 
                           $postResult = mysqli_query($con,$postQuery);
                           if($postResult){
                              while($post = $postResult->fetch_array()){
                                  extract($post);
                         ?>
						<li>
						<a href="#"><img src="Admin/uploads/postImage/<?=$post_postImage;?>" class="pull-left" alt="" style="width:60px;height:60px;"/></a>
						<h6><a href="?postId=<?=$post_postId;?>"><?=$post_postTitle;?></a></h6>
						<p>
							 <?=textShorten($post_postDetails,70);?>
						</p>
						</li>
						<?php } } ?>
					</ul>
				</div>
				</aside>
			</div>
		</div>
	</div>
	</section>
<?php getFooter(); ?>
