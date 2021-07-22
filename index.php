<?php require_once("admission_form/db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>City College</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" 	href="css/chocolat.css" type="text/css" media="all">
<!--// css -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
	<!-- Popup-Box-JavaScript -->
	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.gallery-grids a').Chocolat();
		});
	</script>
	<!-- //Popup-Box-JavaScript -->
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>	
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="w3l_header_left"> 
				<ul>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+91 9876543210</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>infocitycollege@gmail.com</li>
				</ul>
			</div>
			
			
			
			<div class="clearfix"> </div>
			
		</div>
	</div>
	<div class="logo-navigation-w3layouts">
		<div class="container">
		<div class="logo-w3">
			<a href="#"><h1><img src="images/34e23a459e21e4d2902262213303fba7.jpg" alt=" " /><span>City College</span></h1></a>
		</div>
		<div class="navigation agileits w3layouts">
			<nav class="navbar agileits w3layouts navbar-default">
				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
				</div>
				<div class="navbar-collapse agileits w3layouts collapse hover-effect" id="navbar">
					<ul class="agileits w3layouts">
						<li class="agileits w3layouts"><a href="#" class="active">Home</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#about">About</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#team">Team</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#services">Services</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#gallery">Gallery</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#contact">Contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>

	<div class="banner">
		<h3>Teach students how</h3>
		<h2><span>To </span>learn</h2>
		<div style="text-align: center;">
		<a href="admission_form/"><button type="button" class="btn btn-primary btn-lg">Admission Inquiry</button></a>
		</div>
		<div class="arrow">
			<a href="#contact" class="scroll"><img src="images/arrow.png" alt=" " /></a>
		</div>
	</div>
	<!-- about -->
	<div class="about-w3-agile" id="about">
		<div class="container">
			<div class="wthree_about_grids">
				<div class="col-md-6 wthree_about_grid_left">
					<h3>About us</h3>
							<p>City College is a leading educational Collge of Burdwan, set up with a vision to contribute to nation-building through education, where currently 10,000+ students are pursuing across campus.</p>
								<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
				</div>
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Our Mission and Values</h4>
						  </div>
						  <div class="modal-body">
							<p><b>Vision: </b>To be an international centre of excellence in all aspects of management education.
							</p>

							<p><b>Overall Mission: </b>The mission of the Institute is to develop innovative and ethical future leaders capable of managing change and transformation in a globally competitive environment and to advance the theory and practice of management.</p>

							<p><b>Core Institutional Values: </b>We shall strive to develop and sustain the following values to provide the context for all our programmes and activities -
							<ul>
							    Excellence,
							    Academic Freedom,
							    Commitment,
							    Responsiveness to Societal Needs,
							    Creativity,
							    Openness,
							    Diversity with Synergy
							</ul></p>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>
					</div>
				</div>

				<div class="col-md-6 wthree_about_grid_right">
					<img src="images/about2.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
	<div class="featured-work">
		<div class="container">
			<h3>Campus Life</h3>
			<div class="col-md-6 featured-left">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/Galary/g10.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/Galary/g21.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<img src="images/Galary/g4.jpg" alt=" " class="img-responsive" />
							</div>
						</article>
					</div>
				</div>
			</div>
			<script src="js/jquery.wmuSlider.js"></script> 
								<script>
									$('.example1').wmuSlider();         
								</script> 

			<div class="col-md-6 featured-right">
				<h4>Student's Section</h4>
				<p>At City College, teaching is highly practical and industry-focussed as it is evolved through constant interaction with leading professionals while our placement cell will help you find your dream placement. In an environment-friendly campus, you will be mentored by a distinguished faculty and meet brightest minds from across the country as your classmates.</p>
				<a href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
			</div>
			<div id="myModal1" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Sudent Council</h4>
						  </div>
						  <div class="modal-body">
							<p>At City College, students are given as many opportunities as possible to practically implement what they learn and aspire to be. One such opportunity is the management of all Student Related activities on Campus. Headed by the Student Affairs Committee Chairman, the Student Council is an elected body of student representatives that is tasked with overlooking the day to day activities that pertain to the over-all benefit of the student body. The Student Council is collectively responsible for activities like management of the four hostels', spearheading the placement processes, taking care of the academic related concerns of the students, being the Media Representatives of the campus, organizing the cultural and sports activities on campus and many more. The Council has a long history and has been re-structured throughout the time to handle new demands. With excellent suggestions and support from the faculty and timely help from the administration, the Student Council has largely been successful at its endeavours.</p>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						  </div>
						</div>
					</div>
				</div>
			<div class="clearfix">
			</div>
		</div>
	</div>
	<div class="feat-bottom">
		<h4>THE PURPOSE OF EDUCATION IS TO MAKE MINDS NOT CAREERS</h4>
	</div>
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<h3>Meet Our Team</h3>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid  agile_team_gridf">
					<div class="agile_team_grid_main">
						<img src="images/t1.jpg" alt=" " width="150" height="300" />
					</div>
					<div class="agile_team_grid1">
						<h4>Guy Ritchie</h4>
						<p>Professor</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile_team_grid2">
					<div class="agile_team_grid_main">
						<img src="images/esi-registration.png" alt=" " width="150" height="300" />
					</div>
					<div class="agile_team_grid1">
						<h4>Martina</h4>
						<p>Asst.Proffesor</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile_team_grid3">
					<div class="agile_team_grid_main">
						<img src="images/lady.jpg" alt=" " width="150" height="300" />
					</div>
					<div class="agile_team_grid1">
						<h4>Lisa kristen</h4>
						<p>College Dean</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile_team_grid4">
					<div class="agile_team_grid_main">
						<img src="images/student_PNG98.png" alt=" " width="150" height="300" />
					</div>
					<div class="agile_team_grid1">
						<h4>Rose Alba</h4>
						<p>HOD</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
	<div class="services" id="services">
		<div class="container">
			<h3>Our Courses</h3>
			<div class="col-md-4 services-grids services-grids1">
				<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
				<h4>BBA</h4>
				<p>Bachelor of Business Administration (BBA) course offers knowledge and training in management and leadership skills to prepare them for managerial roles and entrepreneurship.</p>
			</div>
			<div class="col-md-4 services-grids services-grids2">
				<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
				<h4>BCA</h4>
				<p>Bachelors in Computer Application (BCA) is a three year undergraduate degree programme for candidates wishing to delve into the world of Computer languages.</p>
			</div>
			<div class="col-md-4 services-grids services-grids3">
				<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
				<h4>BBATH</h4>
				<p>Bachelor of Business Administration in Tourism and Hospitality (BBATH) is a full-time dual specialization programme for both hospitality and tourism aspirants.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- Gallery -->
	<div class="gallery" id="gallery">
		<div class="container">
			<h3>GALLERY</h3>
			<div class="gallery-grids">
				<div class="col-md-6 col-sm-6 gallery-grids-left gallery-grids-left-gallery1-top">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/Galary/g5.jpg" data-lightbox="example-set" data-title="">
							<div class="grid">
								<figure class="effect-apollo">
									<img src="images/Galary/g5.jpg" alt=""/>
										<figcaption></figcaption>
								</figure>
							</div>
						</a>
					</div>
					<div class="gallery-grids-left-sub">
						<div class="col-md-6 col-sm-6 gallery-grids-left-subl">
							<div class="gallery-grid">
								<a class="example-image-link" href="images/Galary/g9.jpg" data-lightbox="example-set" data-title="">
									<div class="grid">
										<figure class="effect-apollo">
											<img src="images/Galary/g9.jpg" alt=""/>
												<figcaption></figcaption>
										</figure>
									</div>
								</a>
							</div>
							<div class="gallery-grid gallery-grid-sub grid-middle gallery-grid-sub-left-bottom">
								<a class="example-image-link" href="images/Galary/g17.jpg" data-lightbox="example-set" data-title="">
									<div class="grid">
										<figure class="effect-apollo">
											<img src="images/Galary/g17.jpg" alt=""/>
												<figcaption></figcaption>
										</figure>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 gallery-grids-left-subr gallery-grids-left-subr-long">
							<div class="gallery-grid">
								<a class="example-image-link" href="images/Galary/g8.png" data-lightbox="example-set" data-title="">
									<div class="grid">
										<figure class="effect-apollo">
											<img src="images/Galary/g8.png" alt=""/>
												<figcaption></figcaption>
										</figure>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 gallery-grids-left-subr">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/Galary/g1.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/Galary/g1.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>

						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 gallery-grids-left">
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-grids-right-first">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/Galary/g13.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/Galary/g13.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-grids-right-two">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/Galary/g22.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/Galary/g22.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="gallery-grids-right1 gallery-grids-right-hand">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/Galary/g15.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/Galary/g15.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-8" style="margin-bottom:30px;">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/Galary/gallery-8.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/Galary/gallery-8.jpg" alt="" />
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-9" style="margin-bottom:30px;">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/Galary/g18.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/Galary/g18.jpg" alt="" />
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="gallery-grids-right1 gallery-grids-right-hand">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/Galary/g12.jpeg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/Galary/g12.jpeg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //Gallery -->

	<div class="contact-w3-agileits" id="contact">
		<div class="container">
			<div class="col-md-5 contact-left-w3ls">
				<h3>Contact info</h3>
				<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Visit us</h4>
						<h5>XYZ, Purba Bardhaman, West Bengal</h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mail">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Mail us</h4>
						<h5><a href="mailto:infocitycollege@gmail.com">infocitycollege@gmail.com</a></h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="call">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Call us</h4>
						<h5>+91 9876543210</h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Work hours</h4>
						<h5>Mon-Sat 09:00 AM - 05:00PM</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-7 contact-right-w3l">
				<h3>Leave message</h3>
				<form action="contact.php" method="post">
					<input type="text"  class="name" name="f_name" placeholder="First Name" required="">
					<input type="text"  class="name" name="l_name" placeholder="Last Name" required="">
					<input type="text"  class="name" name="phone" placeholder="Contact Number" required="">
					<input type="text"  class="name" name="subject" placeholder="Subject" required="">
					<textarea placeholder="Your Message" name="msg" required=""></textarea>
					<input type="submit" value="SEND MESSAGE">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="footer-w3l">
		<p></p>
	</div>	
</body>
</html>