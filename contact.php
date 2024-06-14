<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Samarth Enterprises</title>
		<!-- Stylesheets -->
		<link href="css/bootstrap.min.css" rel="stylesheet" />

		<link href="css/style.css" rel="stylesheet" />
		<link href="css/responsive.css" rel="stylesheet" />

		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="icon" href="images/favicon.png" type="image/x-icon" />

		<!-- Responsive -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
		<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
	</head>

	<body>
		<div class="page-wrapper">
			<!-- Preloader -->
			<div class="preloader"></div>

			 <!-- Main Header-->
			 <?php include 'header.php' ?>
             <!-- Main Menu End-->

			<!-- Start main-content -->
			<section class="page-title" style="background-image: url(images/background/1.jpg)">
				<div class="auto-container">
					<div class="title-outer">
						<h1 class="title">Contact</h1>
						<ul class="page-breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Pages</a></li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- end main-content -->

			<!--Contact Details Start-->
			<section class="contact-details">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-7 col-lg-6">
							<div class="sec-title">
								<span class="sub-title">Send us email</span>
								<h2>Feel free to write</h2>
							</div>
							<!-- Contact Form -->
							 <?php
                                        if(isset($_POST['enquiry-submit'])){
                                         
                                           $name       = @trim(stripslashes($_POST['name']));
                                           $email      =  @trim(stripslashes($_POST['email']));
                                           $phone      =  @trim(stripslashes($_POST['phone']));
                                           $message1  =  @trim(stripslashes($_POST['message']));
                                         
                                       $to = "pratikshabirdawade1996@gmail.com"; // this is your Email address
                                          //   $to = "tirupackindustries@gmail.com"; // this is your Email address
                                           $subject = @trim(stripslashes($_POST['subject']));
                                        
                                           $headers = "From: Contact Tirupati Packaging <noreply@tirupatipacking.com>\r\n";
                                           $headers .= "Reply-To: noreply@tirupatipacking.com\r\n";
                                           $headers .= "MIME-Version: 1.0\r\n";
                                           $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                                           $returnpath = '-f noreply@tirupatipacking.com';
                                        
                                           $message = 'Hello Sir <Br> You have received new Contact Enquiry From Tirupati Packaging Website ';
                                           $message .= '<h3>Follwing are the Contact details</h3>';
                                           $message .= '<table><tr><td>Date :</td><td>'.date("d-m-Y").'</td></tr><tr><td>Name :</td><td>'.$name.'</td></tr><tr><td>Phone :</td><td>'.$phone.'</td></tr><tr><td>Mail :</td><td>'.$email.'</td></tr>';
                                           $message .= '<tr><td>Message :</td><td>'.$message1.'</td></tr>';
                                           $message .= '</table><br><br>Thank You <br><b>This is auto Generated Email.Plase do not reply on this mail</b>';
                                           /*$success = @mail($email_to, $name, $body, 'From: <'.$email_from.'>');*/
                                           
                                         if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $message1)) {
                                        
                                        echo "<script type='text/javascript'>alert('Sorry. Try Again Letter')</script>";
                                          }
                                          else{
                                           $mail= mail($to,$subject,$message,$headers,$returnpath);
                                           if($mail == 1){
                                            echo "<script type='text/javascript'>alert('Thank You. We will contact you soon')</script>";
                                           
                                        }else{
                                            echo "<script type='text/javascript'>alert('Sorry. Try Again Letter')</script>";
                                        }
                                          }
                                         }
                                        ?>
							<form id="" name="contact_form" class="" action=" " method="post">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<label>Name <small>*</small></label>
											<input name="name" class="form-control" type="text" placeholder="Enter Name" />
										</div>
									</div>
									<div class="col-sm-6">
										<div class="mb-3">
											<label>Email <small>*</small></label>
											<input name="email" class="form-control required email" type="email" placeholder="Enter Email" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-3">
											<label>Subject <small>*</small></label>
											<input name="subject" class="form-control required" type="text" placeholder="Enter Subject" />
										</div>
									</div>
									<div class="col-sm-6">
										<div class="mb-3">
											<label>Phone</label>
											<input name="phone" class="form-control" type="text" placeholder="Enter Phone" />
										</div>
									</div>
								</div>
								<div class="mb-3">
									<label>Message</label>
									<textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
								</div>
								<div class="mb-3">
									<input name="form_botcheck" class="form-control" type="hidden" value="" />
									<button type="submit" name="enquiry-submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
									<button type="reset" class="theme-btn btn-style-one"><span class="btn-title">Reset</span></button>
								</div>
							</form>
							<!-- Contact Form Validation-->
						</div>
						<div class="col-xl-5 col-lg-6">
							<div class="contact-details__right">
								<div class="sec-title">
									<span class="sub-title">Need any help?</span>
									<h2>Get in touch with us</h2>
								
								</div>
								<ul class="list-unstyled contact-details__info">
									<li>
										<div class="icon">
											<span class="lnr-icon-phone-plus"></span>
										</div>
										<div class="text">
											<h6>Have any question?</h6>
											<a href="tel:+918446106747">+91 8446106747 / +91 95290 77510</a>
										</div>
									</li>
									<li>
										<div class="icon">
											<span class="lnr-icon-envelope1"></span>
										</div>
										<div class="text">
											<h6>Write email</h6>
											<a href="mailto:info@samarthenterprises.in">info@samarthenterprises.in <br> info2@samarthenterprises.in</a>
										</div>
									</li>
									<li>
										<div class="icon">
											<span class="lnr-icon-location"></span>
										</div>
										<div class="text">
											<h6>Visit  Us :</h6>
											<a>Shop No 1-,PAP j-155 ,near Quality Circle Fourm ,J block,Telco road bhosari Midc Pune 411026</a>
										</div>
									</li>
									
								
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Contact Details End-->

			<!-- Divider: Google Map -->
			<section>
				<div class="container-fluid p-0">
					<div class="row">
						<!-- Google Map HTML Codes -->
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.6455890066995!2d73.82364705204964!3d18.63500406277994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b86e41062611%3A0x196cbee64bdec0f3!2sQuality%20Circle%20Excellence%20Center!5e0!3m2!1sen!2sin!4v1714477097778!5m2!1sen!2sin"
							data-tm-width="100%"
							height="500"
							frameborder="0"
							allowfullscreen=""
						></iframe>
					</div>
				</div>
			</section>

	<?php include 'footer.php' ?>
		</div>
		<!-- End Page Wrapper -->

		<!-- Scroll To Top -->
		<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

		<script src="js/jquery.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.fancybox.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/wow.js"></script>
		<script src="js/appear.js"></script>
		<script src="js/select2.min.js"></script>
		<script src="js/swiper.min.js"></script>
		<script src="js/owl.js"></script>
		<script src="js/script.js"></script>

		<!-- form submit -->
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.form.min.js"></script>
		<script>
			(function ($) {
				$("#contact_form").validate({
					submitHandler: function (form) {
						var form_btn = $(form).find('button[type="submit"]');
						var form_result_div = "#form-result";
						$(form_result_div).remove();
						form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
						var form_btn_old_msg = form_btn.html();
						form_btn.html(form_btn.prop("disabled", true).data("loading-text"));
						$(form).ajaxSubmit({
							dataType: "json",
							success: function (data) {
								if (data.status == "true") {
									$(form).find(".form-control").val("");
								}
								form_btn.prop("disabled", false).html(form_btn_old_msg);
								$(form_result_div).html(data.message).fadeIn("slow");
								setTimeout(function () {
									$(form_result_div).fadeOut("slow");
								}, 6000);
							},
						});
					},
				});
			})(jQuery);
		</script>
	</body>
</html>
