<section id="content">
	<div class="container">
	        <h4 class="heading">Feature Works</h4>
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
				    <?php
                        global $con;
                        $query = "SELECT * FROM tbl_pageandfeature WHERE pStatus='2' and pCategory='1' ORDER BY pId DESC LIMIT 4";
                        $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                        if($result){
                            foreach($result as $feature){
                            extract($feature);
                    ?>
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">
								<h4><?=$pTitle?></h4>
								<div class="icon">
								<i class="<?=$pIconClass;?>"></i>
								</div>
								<p>
								 <?=textShorten($pDetails,50);?>
								</p>
									
							</div>
							<div class="box-bottom">
								<a href="postView.php?featureId=<?=$pId?>">Learn more</a>
							</div>
						</div>
					</div>
					<?php } } ?>
					
				</div>
			</div>
		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">Recent Works</h4>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<?php
                            $query = "SELECT * FROM tbl_portfolio WHERE portfolioStatus='2' ORDER BY portfolioId DESC LIMIT 4";
                            $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                            if($result){
                                foreach($result as $portfolio){
                                extract($portfolio);
                         ?>
						<li class="col-lg-3 design" data-id="id-0" data-type="<?php if($portfolio_categoryId == 1){echo 'web';}elseif($portfolio_categoryId == 2){echo 'icon';}elseif($portfolio_categoryId == 3){echo 'graphic';} ?>">
						<div class="item-thumbs">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?=$portfolioName;?>" href="Admin/uploads/portfolioImage/<?=$portfolioImage;?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="Admin/uploads/portfolioImage/<?=$portfolioImage;?>" alt="<?=$portfolioTitle;?>">
						</div>
						</li>
						<?php } } ?>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						
						<!-- End Item Project -->
					</ul>
					</section>
				</div>
			</div>
		</div>

	</div>
	</section>