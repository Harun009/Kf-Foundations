<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('header.php')?>
<style>
	.dropdown {
	  position: relative;
	  display: inline-block;
	}

	.dropdown-content {
	  display: none;
	  position: absolute;
	  background-color: #fd645b;
	  min-width: 250px;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
	  opacity:.7;
	  border-radius:10px;
	}
	.dropdown-content li {
	 list-style:none;
	 margin-left: -31px;
	}

	.dropdown-content a {
	  color: black;
	  padding: 5px 5px;
	  text-decoration: none;
	  display: block;
	}
	@media only screen and (min-width: 768px) {
		.donation-wrap {
		margin-top: -210px;
	}
		
	}	
	.dropdown-content a:hover {background-color: #000; color:#fff;}

	.dropdown:hover .dropdown-content {display: block;}

	.dropdown:hover .dropbtn {background-color: #3e8e41;}

	.dropdown-contents a:hover {background-color: #000; color:#fff;}

	.dropdowns:hover .dropdown-contents {display: block;}

	.dropdowns:hover .dropbtns {background-color: #3e8e41;}

	.donation-wrap .total-donate {
		background: #fd645b;
		padding: 15px 10px;
		border-radius: 10px 10px 0px 0;
		z-index: 0;
		position: relative;
	}
	.donation-wrap {
		width: 100%;
		<!--height:fit-content;-->
	}
	.donation-wrap .total-donate p {
		width: 100%;
		margin-bottom: 0;
		color:#000;
	}
	.services .text {
		padding: 29px 26px;
		padding-bottom: 65px;
		color: rgba(255, 255, 255, 0.8);
	}
	.button3 {
	  background-color: #f44336;
	  color: white;
	  border: 2px solid #f44336;
	  border-radius:4px;
	}

	.button3:hover {
	  background-color: white; 
	  color: black; 
	  border: 2px solid #f44336;
	  border-radius:4px;
	}
	.ubutton{
		font-family: Verdana,sans-serif;
		font-size: 12px;
		border: 1px solid #a53838;
		padding: 7px 30px;
		border-radius: 30px;
		color: #fff;
	}
	.ubutton:hover{
		font-family: Verdana,sans-serif;
		font-size: 12px;
		border: 1px solid #000;
		background-color:#000;
		padding: 7px 30px;
		border-radius: 30px;
		color: #fff;
	}
</style>
</head>
<body>
<?php include('menubar.php')?>
<section class="hero-wrap js-fullheight">
	<div class="home-slider js-fullheight owl-carousel">
		<div class="slider-item js-fullheight" style="background-image:url(images/kkf/slide-4.jpg);">
			<div class="overlay-1"></div>
			<div class="overlay-2"></div>
			<div class="overlay-3"></div>
			<div class="overlay-4"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center">
					<div class="col-md-10 col-lg-7 ftco-animate">
						<div class="text w-100">
							<h2>Help the poor in need</h2>
							<h1 class="mb-3">Lend the helping hand get involved</h1> 
							<div class="d-flex meta">
								<div class=""><p class="mb-0"><a href="#doteFrom" class="btn btn-secondary py-3 px-2 px-md-4">Become A Supporter</a></p></div>
								<a href="#" class="d-flex align-items-center button-link">
									<div class="button-video d-flex align-items-center justify-content-center">
										<span class="fa fa-play" onclick="document.getElementById('id01').style.display='block'"></span>
									</div>
									<span>Watch our video</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Extend-->
		<div class="slider-item js-fullheight" style="background-image:url(images/kkf/slide-3.jpg);">
			<div class="overlay-1"></div>
			<div class="overlay-2"></div>
			<div class="overlay-3"></div>
			<div class="overlay-4"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center">
					<div class="col-md-10 col-lg-7 ftco-animate">
						<div class="text w-100">
							<h2>Help the poor in need</h2>
							<h1 class="mb-3">Lend the helping hand get involved</h1> 
							<div class="d-flex meta">
							<div class=""><p class="mb-0"><a href="#doteFrom" class="btn btn-secondary py-3 px-2 px-md-4">Become A Supporter</a></p></div>
							<a href="#" class="d-flex align-items-center button-link">
								<div class="button-video d-flex align-items-center justify-content-center">
								<span class="fa fa-play" onclick="document.getElementById('id01').style.display='block'"></span>
								</div>
								<span>Watch our video</span>
							</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!---extend--->
		<div class="slider-item js-fullheight" style="background-image:url(images/kkf/slide-2.jpg);">
			<div class="overlay-1"></div>
			<div class="overlay-2"></div>
			<div class="overlay-3"></div>
			<div class="overlay-4"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center">
					<div class="col-md-10 col-lg-7 ftco-animate">
						<div class="text w-100">
							<h2>Raising Hope</h2>
							<h1 class="mb-3">Discover Non-Profit Charity Platform</h1> 
							<div class="d-flex meta">
								<div class=""><p class="mb-0"><a href="#doteFrom" class="btn btn-secondary py-3 px-2 px-md-4">Become A Supporter</a></p></div>
								<a href="#" class="d-flex align-items-center button-link">
									<div class="button-video d-flex align-items-center justify-content-center">
									<span class="fa fa-play" onclick="document.getElementById('id01').style.display='block'"></span>
									</div>
									<span>Watch our video</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item js-fullheight" style="background-image:url(images/kkf/slide-1.jpg);">
			<div class="overlay-1"></div>
			<div class="overlay-2"></div>
			<div class="overlay-3"></div>
			<div class="overlay-4"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center">
					<div class="col-md-10 col-lg-7 ftco-animate">
						<div class="text w-100">
							<h2>Raising Hope</h2>
							<h1 class="mb-3">Giving Hope to the Homeless People</h1>
							<div class="d-flex meta">
								<div class=""><p class="mb-0"><a href="#doteFrom" class="btn btn-secondary py-3 px-2 px-md-4">Become A Supporter</a></p></div>
								<a href="#" class="d-flex align-items-center button-link">
									<div class="button-video d-flex align-items-center justify-content-center">
										<span class="fa fa-play" onclick="document.getElementById('id01').style.display='block'"></span>
									</div>
									<span>Watch our video</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <div style="padding:20px;">
			<iframe width="100%" height="415" src="https://www.youtube.com/embed/KpvwhaHqFKY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
      </div>
    </div>
</div>
<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-5 order-md-last d-flex align-items-stretch">
				<div class="donation-wrap">
					<div class="total-donate d-flex align-items-center">
						<div class="row">
							<div class="col-md-8" style="text-align:center;">
								<p><i class="fa fa-calendar fa-4x fa-fw" style="color: #07657b;"></i></p>
								<strong style="color:#fff;font-size:18px;">UPCOMING PROJECT</strong>
								<br>
								<p style="color:#fff">Education, Health, Development</p>
								<p><br/></p>
								<p class="upreadMore"><a href="upcomingProjectDetail.php" class="ubutton">READ MORE</a></p>
							</div>
							<div class="col-md-4">
								<p class="d-flex align-items-right" style="padding-top:20px;">
									<img src="images/kkf/slide-1.jpg" style="width:100%;max-height:200px;border-radius:4px;"/>
								</p>
							</div>
						</div>
					</div>
					<form action="#" id="doteFrom" class="appointment">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Full Name</label>
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-user"></span></div>
										<input type="text" name="fname" class="form-control" placeholder="">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Email Address</label>
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-paper-plane"></span></div>
										<input type="email" name="emaila" class="form-control" placeholder="">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Mobile No</label>
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-phone"></span></div>
										<input type="text" name="mobilen" class="form-control" placeholder="">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Message</label>
									<div class="input-wrap">
										<div class="icon"><span class="fa fa-envelope"></span></div>
										<textarea class="form-control" name="message"></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Available Payment Method</label>
									<div class="d-lg-flex">
										<div class="form-radio mr-3">
											<div class="radio">
												<label>
												<input type="radio" name="radio-input" checked>
												<span class="checkmark"></span>
												<span class="fill-control-description">bKash</span>
												</label>
											</div>
										</div>
										<div class="form-radio mr-3">
											<div class="radio">
												<label>
												<input type="radio" name="radio-input">
												<span class="checkmark"></span>
												<span class="fill-control-description">Nagad</span>
												</label>
											</div>
										</div>
										<div class="form-radio">
											<div class="radio">
												<label>
												<input type="radio" name="radio-input">
												<span class="checkmark"></span>
												<span class="fill-control-description">Bank</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Support Now" class="btn btn-secondary py-3 px-4">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-7 wrap-about">
				<div class="heading-section pr-md-5 pt-md-5">
					<p style="text-align:center;"><img src="images/vision.png" height="150"/></p>
					<p style="text-align:justify;">
						 To eradicate poverty and achieving the best possible goals through sustainable social development and women empowerment. 
					</p>
					<p style="text-align:center;"><img src="images/mission.png" height="150"/></p>
					<p style="text-align:justify;">
						KF strives to empower the disadvantaged communities through implementation of integrated programs 
						that include awareness building, the spread of marginalized education, environmental awareness, 
						nutrition awareness and support, and above all inclusive and appropriate financing for 
						planned economic activities. KF also be a firm believer in promoting equality, 
						alleviating oppression as well as ensuring the health of the people by utilizing local and 
						nationwide community systems. These interventions aim to facilitate the communities to realize their full potentials, 
						lift them out of poverty and take full advantage of emerging opportunities.
					</p>
				</div>
				<div class="row my-md-5">
					<div class="col-md-6 d-flex counter-wrap">
						<div class="block-18 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<i class="fa fa-group fa-3x fa-fw" style="color: #fd645b;"></i>
							</div>
							<div class="desc">
								<div class="text">
									<strong class="number" data-number="200000">0</strong>
								</div>
								<div class="text">
									<span>Supporters</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex counter-wrap">
						<div class="block-18 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<i class="fa fa-money fa-3x fa-fw" style="color: #fd645b;"></i>
							</div>
							<div class="desc">
								<div class="text">
									<strong class="number" data-number="24400">0</strong>
								</div>
								<div class="text">
									<span>Trusted Funds</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<p style="text-align:center"><a href="#" class="btn btn-secondary btn-outline-secondary">Read More</a></p>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-3 d-flex align-items-stretch">
				<div class="services">
					<div class="text text-center bg-secondary">
						<h3> BECOME A SUPPORTER</h3>
						<p>But nothing the copy said could convince her and so it didn’t take long until a few</p>
					</div>
					<div class="img border-2" style="background-image: url(images/kkf/slide-1.jpg);">
						<div class="icon d-flex align-items-center justify-content-center">
							<a href="#doteFrom"><i class="fa fa-group fa-3x fa-fw" style="color: #fd645b;cursor:pointer;"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex align-items-stretch">
				<div class="services">
					<div class="text text-center bg-tertiary">
						<h3>DONATE YOUR ZAKAT FOR THE POOR</h3>
						<p>But nothing the copy said could convince her and so it didn’t take long until a few</p>
					</div>
					<div class="img border-3" style="background-image: url(images/kkf/slide-2.jpg);">
						<div class="icon d-flex align-items-center justify-content-center">
							<a href="#doteFrom"><i class="fa fa-money fa-3x fa-fw" style="color: #4c7bcb ;cursor:pointer;"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex align-items-stretch">
				<div class="services">
					<div class="text text-center bg-primary">
						<h3>START DONATING FOR GOOD CAUSES</h3>
						<p>But nothing the copy said could convince her and so it didn’t take long until a few</p>
					</div>
					<div class="img border-1" style="background-image: url(images/kkf/slide-3.jpg);">
						<div class="icon d-flex align-items-center justify-content-center">
							<a href="#doteFrom"><i class="fa fa-th-large fa-3x fa-fw" style="color: #eec857;cursor:pointer;"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex align-items-stretch">
				<div class="services">
					<div class="text text-center bg-quarternary">
						<h3>GET INVOLVED <br/><br/></h3>
						<p>But nothing the copy said could convince her and so it didn’t take long until a few</p>
					</div>
					<div class="img border-4" style="background-image: url(images/kkf/slide-4.jpg);">
						<div class="icon d-flex align-items-center justify-content-center">
							<a href="#doteFrom"><i class="fa fa-address-card fa-3x fa-fw" style="color: #18a577;cursor:pointer;"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pb">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Our Projects</span>
				<h2 style="font-size: 30px;">BECOME A SUPPORT OUR PROJECTS</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="causes causes-2 text-center ftco-animate">
					<a href="#" class="img w-100" style="background-image: url(images/kkf/img/kk19.jpg);"></a>
					<div class="text p-3">
						<h2><a href="#">EDUCATION</a></h2>
						<p>As a part of environmental development, the Kachakata Foundation had implemented a Tree Plantation Program, held on 5 September, 2020</p>
						<p><a href="projectDetail.php?pId=1" target="_blank" class="btn btn-light w-100">Read More</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="causes causes-2 text-center ftco-animate">
					<a href="#" class="img w-100" style="background-image: url(images/kkf/img/kf.png);"></a>
					<div class="text p-3">
						<h2><a href="#">HEALTH</a></h2>
						<p>Kachakata is a flood prone area of Kurigram District. Most of people of this area are poor and mainly depend on agriculture</p>
						<!--<div class="goal mb-4">
							<p><span>$3,800</span> to go</p>
							<div class="progress" style="height:20px">
							<div class="progress-bar progress-bar-striped" style="width:82%; height:20px">82%</div>
							</div>
						</div>-->
						<p><a href="projectDetail.php?pId=2" target="_blank" class="btn btn-light w-100">Read More</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="causes causes-2 text-center ftco-animate">
					<a href="#" class="img w-100" style="background-image: url(images/kkf/img/kk38.jpg);"></a>
					<div class="text p-3">
						<h2><a href="#">DEVELOPMENT</a></h2>
						<p>The Kachakata Foundation, a non profitable social organization of remote Kachakata Thana area of Kurigram district</p>
						<p><a href="projectDetail.php?pId=3" target="_blank" class="btn btn-light w-100">Read More</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="causes causes-2 text-center ftco-animate">
					<a href="#" class="img w-100" style="background-image: url(images/kkf/img/kf2.jpg);"></a>
					<div class="text p-3">
						<h2><a href="#">HUMANITARIAN</a></h2>
						<p>It was first ever formal program implemented by the Kachakata Foundation after its launch. Like other places in North Bengal</p>
						<!--<div class="goal mb-4">
							<p><span>$3,800</span> to go</p>
							<div class="progress" style="height:20px">
							<div class="progress-bar progress-bar-striped" style="width:75%; height:20px">75%</div>
							</div>
						</div>-->
						<p><a href="projectDetail.php?pId=4" target="_blank" class="btn btn-light w-100">Read More</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
			<span class="subheading">Activity</span>
			<h2 style="font-size: 30px;">OUR RECENT ACTIVITY</h2>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/kkf/img/kk22.jpg');"></a>
					<div class="text p-4">
						<div class="meta mb-2">
							<div><a href="#">July 20, 2020</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="#">Planting trees</a></h3>
						<p>As a part of environmental development, the Kachakata Foundation had implemented a Tree Plantation Program, held on 5 September, 2020</p>
						<p style="text-align:center;"><a href="projectDetail.php?pId=1" class="btn btn-secondary">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/kkf/img/kk30.png');"></a>
					<div class="text p-4">
						<div class="meta mb-2">
							<div><a href="#">July 20, 2020</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="#">Food Events </a></h3>
						<p>Kachakata is a flood prone area of Kurigram District. Most of people of this area are poor and mainly depend on agriculture</p>
						<br>
						<p style="text-align:center;"><a href="projectDetail.php?pId=2" class="btn btn-secondary">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/kkf/img/kk13.jpg');"></a>
					<div class="text p-4">
						<div class="meta mb-2">
							<div><a href="#">July 20, 2020</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="#">National Events</a></h3>
						<p>The Kachakata Foundation, a non profitable social organization of remote Kachakata Thana area of Kurigram district</p>
						<br>
						<p style="text-align:center;"><a href="projectDetail.php?pId=1" class="btn btn-secondary">Read more</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blog-single.html" class="block-20" style="background-image: url('images/kkf/img/kk10.jpg');"></a>
					<div class="text p-4">
						<div class="meta mb-2">
							<div><a href="#">July 20, 2020</a></div>
							<div><a href="#">Admin</a></div>
							<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="#">Health awareness</a></h3>
						<p>Covid-19 is a new disease. In Bangladesh, 3 covid patients have first ever been detected in Narayanganj on 8 March, 2020</p>
						<p style="text-align:center;"><a href="projectDetail.php?pId=2" class="btn btn-secondary">Read more</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Team</span>
				<h2 style="font-size: 30px;">OUR TEAM</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="volunteer">
					<div class="img" style="background-image: url(images/team/ABM-sidul-hoque.jpg);"></div>
					<div class="text text-1">
						<h3>ABM SaidulHoque</h3>
						<span>President</span><br>
						<span>MBA (HR). Management Advisor, Siddiqui Group</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="volunteer">
					<div class="img" style="background-image: url(images/team/3_Mostafa.jpg);"></div>
					<div class="text text-2">
						<h3>Dr. Md. Nur-E-Mostafa</h3>
						<span>Vice President </span><br>
						<span>M. Phil from BUET, (MIST)</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="volunteer">
					<div class="img" style="background-image: url(images/team/zahangir.jpg);"></div>
					<div class="text text-3">
						<h3>Md. ZahangirAlam</h3>   
						<span>Vice President</span><br>
						<span>MSc (Computer Sience) from BUET, PHD From BUET</span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="volunteer">
					<div class="img" style="background-image: url(images/team/Aminul.jpg);"></div>
					<div class="text text-4">
						<h3>Md. Aminul Islam</h3>
						<span>General Secretary</span><br>
						<span>M.Sc. (Zoology) from Rajshahi University,Assistant Manager</span>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-12">
				<div class="text text-4" style="text-align:center;">
					<div class=""><p class="mb-0"><a href="team.php" class="btn btn-secondary py-3 px-2 px-md-4">FULL TEAM</a></p></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-hireme bg-secondary">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-md-8 col-lg-8 d-flex align-items-center">
				<div class="w-100">
					<h2>Best Way to Make a Difference in the Lives of Others</h2>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 d-flex align-items-center justify-content-end">
				<p class="mb-0"><a href="#doteFrom" class="btn btn-primary py-3 px-4">Become A Supporter</a></p>
			</div>
		</div>
	</div>
</section>
<footer class="footer">
	<?php include('footer.php')?>
</footer>
	<?php include('foot.php')?>
</body>
</html>
