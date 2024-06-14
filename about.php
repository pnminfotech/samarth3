<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Samarth Enterprises</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

	<!-- Preloader -->
	<div class="preloader"></div>

	        <!-- Main Header-->
	              <?php include 'header.php' ?>


	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/2.jpg);">
		<div class="auto-container">
			<div class="title-outer">
				<h1 class="title">About Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li>About</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!-- About Section -->
	<section class="about-section">
		

		<div class="auto-container">
			<div class="row">
				<div class="content-column col-lg-8 col-md-12 col-sm-12 order-2 wow fadeInRight" data-wow-delay="600ms">
					<div class="inner-column">
						<div class="sec-title" style="margin-bottom: 0px;">
							<span class="sub-title">About Our Company</span>
							<h2>We are a high-tech enterprise.</h2>
							<div class="text">Welcome to Samarth Enterprises, a paramount destination for cutting-edge tooling and lubrication solutions. With over 15 years of unparalleled expertise in the cutting tool domain, we take pride in being your trusted expert for cost-effective solutions. Our track record includes serving esteemed OEM clients such as Kirloskar, Kalyni Eaton, Seco, and Bharat Forge. At Samarth Enterprises, we are committed to delivering precision, reliability, and value that surpass industry standards. Elevate your operations with our proven experience and trusted solutions.	</div>
						</div>


					
					</div>
				</div>

				<!-- Image Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft">
						<figure class="image-1 wow fadeInUp"><img src="images/resource/about-4.png" alt=""></figure>
					
						<div class="experience bounce-y"><strong><i class="icon flaticon-global"></i>15<br> Years</strong> Working Exprience</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Emd About Section -->

			<!-- Why Choose Us -->
			<section class="why-choose-us pull-up pb-6">
				<div class="bg-image" style="background-image: url(images/background/4.jpg)"></div>
			

				<div class="auto-container">
					<div class="row">
						<!-- Content Column -->
						<div class="content-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<div class="sec-title light" style="margin-bottom:10px;">
									<span class="sub-title">Why Choose Us</span>
									<h3  class="white">We are known as a quality provided organization</h3>
								
								</div>

								<!-- Feature Block -->
								<div class="row">
								<div class="feature-block-two col-md-6">
								
										
										<i class="icon"  style="position: relative;padding:15px;"> <img src="images/icons/accuracy.png"></i>
										<p style="color: #ebe9e9; margin: 10px 0px 20px 0px;">	High Accuracy & Versatility</p>
								</div>

								<div class="feature-block-two col-md-6" >
								
										
								<i class="icon"  style="position: relative;padding:15px;"> <img src="images/icons/quality.png"></i>
										<p style="color: #ebe9e9; margin: 10px 0px 20px 0px;;">	High Quality</p>
								</div>

								<div class="feature-block-two col-md-6" >
								
										
								<i class="icon"  style="position: relative;padding:15px;"> <img src="images/icons/rs.png"></i>
										<p style="color: #ebe9e9; margin: 10px 0px 20px 0px;;">	Long Life & Cost-Effective</p>
								</div>

								<div class="feature-block-two col-md-6" >
								
										
								<i class="icon"  style="position: relative;padding:15px;"> <img src="images/icons/product.png"></i>
										<p style="color: #ebe9e9; margin: 10px 0px 20px 0px;;">	 standard & Customized Product</p>
								</div>

								<div class="feature-block-two col-md-6" >
								
										
								<i class="icon"  style="position: relative;padding:15px;"> <img src="images/icons/customer.png"></i>
										<p style="color: #ebe9e9; margin: 10px 0px 20px 0px;;">	 Customer Centric Approach<br></p>
								</div>

								<div class="feature-block-two col-md-6" >
								
										
										<i class="icon flaticon-international-shipping-3" style="    position: relative;"></i>
										<p style="color: #ebe9e9; margin: 10px 0px 20px 0px;;">	Improve Operational Effeciency and Productivity</p>
								</div>
</div>
							</div>
						</div>

						<!-- form Column -->
						<div class="form-column col-lg-6 col-md-12 col-sm-12">
							<div class="inner-column">
								<!-- Contact Form -->
								<div class="contact-form wow fadeInLeft">
									<!--Contact Form-->
									 <?php
                                        if(isset($_POST['enquiry-submit'])){
                                         
                                           $name       = @trim(stripslashes($_POST['name']));
                                           $email      =  @trim(stripslashes($_POST['email']));
                                           $phone      =  @trim(stripslashes($_POST['phone']));
                                           $message1  =  @trim(stripslashes($_POST['message']));
                                         
                                          $to = "pratikshabirdawade1996@gmail.com"; // this is your Email address
                                     //     $to = "tirupackindustries@gmail.com"; // this is your Email address
                                           $subject = "Contact Enquiry From Tirupack Website";
                                        
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
									<form method="post" action=" " id="">
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 form-group">
												<label>Your Name:</label>
												<input type="text" name="name" placeholder="" required />
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12 form-group">
												<label>Your Email:</label>
												<input type="text" name="email" placeholder="" required />
											</div>

											<div class="col-lg-6 col-md-6 col-sm-12 form-group">
												<label>Phone No::</label>
												<input type="text" name="phone" placeholder="" required />
											</div>

                                        	<div class="col-lg-12 col-md-12 col-sm-12 form-group">
												<label>Your Massage:</label>
												<textarea name="message" placeholder="" required /></textarea>
											</div>
				
											<div class="col-lg-12 col-md-12 col-sm-12 form-group">
												<button class="theme-btn btn-style-two hvr-light" type="submit" name="enquiry-submit"><span class="btn-title">Submit Request</span></button>
											</div>
										</div>
									</form>
								</div>
								<!--End Contact Form -->
							</div>
						</div>
					</div>

	
				</div>
				
			</section>
			<!-- End Why Choose Us -->

			<div class="container pb-80">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="pricing-block">
						<div class="inner-box">
							<img src="images/resource/mission.jpg" style="width:100px;    margin: 0 auto;display: block;">
							<span class="title">Our Mission</span>
							<ul class="mission">
								<li>Our mission is to develop high quality international grade products. Our objective is to reliably produce these kind of with top quality. We plan to be the pioneer in the fasteners.</li>
							</ul>
							
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="pricing-block">
						<div class="inner-box">
						<img src="images/resource/vision.jpg" style="width:100px;    margin: 0 auto;display: block;">
							<span class="title">Our Vision</span>
							<ul class="mission">
								<li>Our Vision is to deliver a better quality of product. We want our products to be valubale to customers. We also strive to provide a quality work environment for employees.</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="pricing-block">
						<div class="inner-box">
						<img src="images/resource/values.jpg" style="width:100px;    margin: 0 auto;display: block;">
							<span class="title">Core Values</span>
					
			
							<ul class="mission">
								<li>1. Customer First <br>
									2. Quality <br>
									3. Transparency <br>
									4. Respectability   <br>
									5. Safety at workplace <br>
							</li>
							</ul>
						
						</div>
					</div>
				</div>
</div>
										</div>
	<!-- Call To Action Two -->
	<section class="call-to-action-two pt-0">
		<div class="auto-container">
			<div class="outer-box wow fadeIn" style="background-image: url(images/background/8.jpg)">
				<div class="title-box">
					<h3 class="title">We’re Optimists Who Love to <br>Work Together</h3>
				</div>
				<div class="btn-box">
					<a href="product.php" class="theme-btn btn-style-two hvr-light"><span class="btn-title">Contact Us</span></a>
				</div>
			</div>
		</div>
	</section>
	<!--End Call To Action Two -->
	

<?php include 'footer.php' ?>

</div><!-- End Page Wrapper -->

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
</body>
</html>