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
				<!--<article>
						<div class="post-slider">
							<div class="post-heading">
								<h3><a href="#">This is an example of slider post format</a></h3>
							</div>-->
							<!-- start flexslider -->
							<!--<div id="post-slider" class="flexslider">
								<ul class="slides">
									<li>
									<img src="img/dummies/blog/img1.jpg" alt="" />
									</li>
									<li>
									<img src="img/dummies/blog/img2.jpg" alt="" />
									</li>
									<li>
									<img src="img/dummies/blog/img3.jpg" alt="" />
									</li>
								</ul>
							</div>-->
							<!-- end flexslider -->
						<!--</div>
						<p>
							 Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
							<a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
				</article>
				<article>
						<div class="post-quote">
							<div class="post-heading">
								<h3><a href="#">Nice example of quote post format below</a></h3>
							</div>
							<blockquote>
								<i class="icon-quote-left"></i> Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
							</blockquote>
						</div>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
							<a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
				</article>
				<article>
						<div class="post-video">
							<div class="post-heading">
								<h3><a href="#">Amazing video post format here</a></h3>
							</div>
							<div class="video-container">
								<iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">
								</iframe>
							</div>
						</div>
						<p>
							 Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei.
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
							<a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
				</article>-->
				<div id="pagination">
					<span class="all">Page 1 of 3</span>
					<span class="current">1</span>
					<a href="#" class="inactive">2</a>
					<a href="#" class="inactive">3</a>
				</div>
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
				<!--<div class="widget">
					<h5 class="widgetheading">Popular tags</h5>
					<ul class="tags">
						<li><a href="#">Web design</a></li>
						<li><a href="#">Trends</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Internet</a></li>
						<li><a href="#">Tutorial</a></li>
						<li><a href="#">Development</a></li>
					</ul>
				</div>-->
				</aside>
			</div>
		</div>
	</div>
	</section>
<?php getFooter(); ?>
