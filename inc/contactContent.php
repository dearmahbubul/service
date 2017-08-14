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
    <div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.3870404819!2d90.2792377179355!3d23.780573256057767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1502717011692" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
	</section>