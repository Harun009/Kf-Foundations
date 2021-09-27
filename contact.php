<!DOCTYPE html>
<html lang="en">
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
.donation-wrap {
    margin-top: -183px;
}
.dropdown-content a:hover {background-color: #000; color:#fff;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.dropdown-contents a:hover {background-color: #000; color:#fff;}

.dropdowns:hover .dropdown-contents {display: block;}

.dropdowns:hover .dropbtns {background-color: #3e8e41;}

.donation-wrap .total-donate {
    background: #fd645b;
    padding: 45px 10px;
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
.ftco-section {
    padding: 2em 0;
    position: relative;
}
.forcontact li{
	list-style:none;
	padding:6px;
}

</style>
</head>
<body>
	<?php include('menubar.php')?>
<section class="hero-wrap hero-wrap-2" style="background-image:url(images/kkf/img/kk29.jpg)" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
</section>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2 style="font-size: 30px;">CONTACT US</h2>
			</div>
			<div class="col-md-12">
				<div class="wrapper">
					<div class="row mb-5"></div>
					<div class="row no-gutters">
						<div class="col-md-7">
							<div class="w-100 p-md-5 p-4">
								<div class="donation-wrap" style="margin-top: -47px;">
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
													<input type="submit" value="Support Now" class="btn btn-secondary py-3 px-4">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-5 d-flex align-items-stretch">
							<div class="w-100 p-5">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3658426.9295839164!2d86.098379!3d26.4337191!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e2bde2dfeaf939%3A0x349b54624fcf8e91!2sKachakata%20Foundation!5e0!3m2!1sen!2sbd!4v1630869062092!5m2!1sen!2sbd" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
								<br/><br/>
								<ul class="forcontact">
									<li><a href="#"><span class="icon fa fa-phone"></span><span class="text"> &nbsp;+88 392 3929 210</span></a></li>
									<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text"> &nbsp;info@kf.com</span></a></li>
									<li><a href="#"><span class="icon fa fa-map"></span><span class="text">  Kachakata Bazar, Kachakata, Nageswari,  5660 Kurigaon, Bangladesh (কচাকাটা বাজার, কচাকাটা, নাগেশ্বরী , ৫৬৬০ কুড়িগ্রাম, বাংলাদেশ)</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer class="footer">
	<?php include('footer.php')?>
</footer>
	<?php include('foot.php')?>
</html>