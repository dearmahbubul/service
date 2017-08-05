<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
                        <?php 
                            global $con;
                             $query = "SELECT * FROM tbl_description WHERE value='website_heading'";
                             $hResult = mysqli_query($con,$query);

                             if($hResult){
                                 $result = mysqli_fetch_array($hResult);
                                 extract($result);
                        ?>
						<h2><span><?=$website_heading;?></span></h2>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

