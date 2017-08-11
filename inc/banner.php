<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
             <?php
                global $con;
                $postQuery = "SELECT * FROM tbl_banner WHERE bannerType='2' ORDER BY bannerId DESC";
                $result = mysqli_query($con,$postQuery);
                $fetchResult = mysqli_fetch_all($result);
                if($fetchResult){
                foreach($result as $banner){
              ?>
              <li>
                <img src="Admin/uploads/bannerImage/<?=$banner['bannerImage'];?>" alt="" />
                <div class="flex-caption">
                    <h3><?=$banner['bannerTitle'];?></h3> 
					<?=textShorten($banner['bannerDetails'],120);?>
					<a href="postView.php?bannerId=<?=$banner['bannerId'];?>" class="btn btn-theme"><?=$banner['bannerButton'];?></a>
                </div>
              </li>
              <?php } }else{
                  echo "No banner";
              } ?>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	</section><!--end feature-->