	<style>
        .gallery{
            margin: 0;
            padding: 0;
        }
        .gallery li{
            list-style: none;
        }
        .gallery li a{}
        .gallery{}
    </style>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Get in touch with us</h5>
					<?php 
                         global $con;
                         $query = "SELECT * FROM tbl_description WHERE value='company_details' or value='copyright' or value='social_url'";
                         $adminResult = mysqli_query($con,$query);

                         if($adminResult){
                             $result = mysqli_fetch_array($adminResult);
                             extract($result);
                    ?>
					<address>
					<strong><?=$companyName;?></strong><br>
					 <?=$companyAddress;?> </address>
					<p>
						<i class="icon-phone"></i> <?=$companyPhone;?> <br>
						<i class="icon-envelope-alt"></i> <?=$companyEmail;?>
					</p>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Pages</h5>
					<ul class="link-list">
                        <?php
                            $query = "SELECT * FROM tbl_pageandfeature WHERE pStatus='2' and pCategory='2' ORDER BY pId DESC LIMIT 4";
                            $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                            if($result){
                                foreach($result as $page){
                                extract($page);
                        ?>
						<li><a href="?id=<?=$pId;?>"><?=$pTitle;?></a></li>
						<?php } } ?>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
					    <?php
                           $postQuery = "SELECT * FROM tbl_post WHERE post_postStatus='2' ORDER BY post_postId DESC LIMIT 3"; 
                           $postResult = mysqli_query($con,$postQuery);
                           if($postResult){
                              while($post = $postResult->fetch_array()){
                                  extract($post);
                         ?>
						<li><a href="?postId=<?=$post_postId;?>"><?=$post_postTitle;?></a></li>
						<?php } }else{echo "";} ?>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Photostream</h5>
					<div class="flickr_badge">
						<!--<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>-->
						<ul class="gallery">
                            <?php
                               $galleryQuery = "SELECT * FROM tbl_gallery ORDER BY galleryId DESC LIMIT 8"; 
                               $galleryResult = mysqli_query($con,$galleryQuery);
                               if($galleryResult){
                                  while($gallery = $galleryResult->fetch_array()){
                                      extract($gallery);
                             ?>
						    <li><a href="<?=$galleryURL;?>" title="Facebook <?=$galleryUploaderName;?>"><img src="Admin/uploads/galleryImage/<?=$galleryImage;?>" alt=""></a></li>
						    <?php } }else{echo "";} ?>
						</ul>
					</div>
					<div class="clear">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
					    <?php 
                         $query = "SELECT * FROM tbl_description WHERE value='copyright'";
                         $cResult = mysqli_query($con,$query);

                         if($cResult){
                             $result = mysqli_fetch_array($cResult);
                             extract($result);
                    ?>
						<p>
                            <span><?=$copyright." ".'&copy;'." ".date("Y");?>
						</p>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
					<?php 
                         $query = "SELECT * FROM tbl_description WHERE value='social_url'";
                         $sResult = mysqli_query($con,$query);

                         if($sResult){
                             $result = mysqli_fetch_array($sResult);
                             extract($result);
                    ?>
						<li><a href="<?=$facebookUrl;?>" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?=$twitterUrl;?>" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?=$linkedinUrl;?>" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="<?=$pinterestUrl;?>" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="<?=$googleplusUrl;?>" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
</body>
</html>