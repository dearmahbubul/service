<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    global $con;
    $contactName = validation($_POST['contactName']);
    $contactEmail = validation($_POST['contactEmail']);
    $contactMessage = validation($_POST['contactMessage']);
    $contactSubject = validation($_POST['contactSubject']);
    if(!empty($contactEmail) && !empty($contactMessage)){
        $query = "INSERT INTO tbl_contact(contactName,contactEmail,contactSubject,contactMessage) values('$contactName','$contactEmail','$contactSubject','$contactMessage')";
        $result = mysqli_query($con,$query);
        if($result){
            $msgSent = "Message sent success";
        }else{
            $msgSent = "Message Not Sent";
        }
    }else{
        $msgSent = "Field must Not be empty";
    }
}

?>
<section id="content">
	<div class="map">
		<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
		</iframe>
    </div>
    
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			    <?php if(isset($msgSent)){echo "<span style='font-size:20px;margin-bottom:15px;color:green;'>".$msgSent."</span>";} ?>
				<h4>Get in touch with us by filling <strong>contact form below</strong></h4>
				<form id="contactform" action="" method="post" class="validateform">
					<div id="sendmessage">
						 Your message has been sent. Thank you!
					</div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="contactName" placeholder="* Enter your full name"/>
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="email" name="contactEmail" placeholder="* Enter your email address" required/>
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="contactSubject" placeholder="Enter your subject"/>
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="contactMessage" class="input-block-level" placeholder="* Your message here..." required></textarea>
							<div class="validation">
							</div>
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
								<span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>