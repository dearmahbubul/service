<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">All</a></li>
					<li class="web"><a href="#" title="">Web design</a></li>
					<li class="icon"><a href="#" title="">Icons</a></li>
					<li class="graphic"><a href="#" title="">Graphic design</a></li>
				</ul>
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio">
						<!-- Item Project and Filter Name -->
						<?php
                            global $con;
                            $query = "SELECT * FROM tbl_portfolio WHERE portfolioStatus='2' ORDER BY portfolioId DESC";
                            $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                            if($result){
                                foreach($result as $portfolio){
                                extract($portfolio);
                         ?>
						<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="<?php if($portfolio_categoryId == 1){echo 'web';}elseif($portfolio_categoryId == 2){echo 'icon';}elseif($portfolio_categoryId == 3){echo 'graphic';} ?>">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?=$portfolioName;?>" href="Admin/uploads/portfolioImage/<?=$portfolioImage;?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="Admin/uploads/portfolioImage/<?=$portfolioImage;?>" alt="<?=$portfolioTitle;?>">
						</li>
						<?php } } ?>
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						<!------------------------------------------------------->
						<!-- End Item Project -->
					</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
	</section>