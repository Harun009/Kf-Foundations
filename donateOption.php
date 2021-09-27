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
.bd{
	text-align:center;
	background-color:#ddd;
	padding:20px;
	min-height:410px;
	border-radius:6px;
	margin:8px;
}
.bd p{
	color:#000;
}

.bd img{
	boder-radius:5px;
}
.ftco-section {
    padding: 2em 0;
    position: relative;
}
</style>
</head>
<body>
<?php include('menubar.php')?>
<section class="hero-wrap hero-wrap-2" style="background-image:url(images/kkf/img/kk29.jpg)" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
	</div>
</section>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2 style="font-size: 30px;">DONATE OPTIONS FROM BANGLADESH</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12  col-lg-3">
				<div class="bd">
					<img src="images/kkf/bkash.png" height="90">
					<hr>
					<h3>bKash</h3>
					<p>In Bangladesh you can use Merchant 01******* for Kachakata Foundation</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-12  col-lg-3">
				<div class="bd">
					<img src="images/kkf/Nagad-Logo.wine.png" height="90">
					<hr>
					<h3>Nagad</h3>
					<p>In Bangladesh you can use Merchant 01******* for Kachakata Foundation</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-12  col-lg-3">
				<div class="bd">
					<img src="images/kkf/roket.png" height="90">
					<hr>
					<h3>Rocket</h3>
					<p>In Bangladesh you can use Merchant 01******* for Kachakata Foundation</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-12  col-lg-3">
				<div class="bd">
					<img src="images/kkf/bnk.png" height="90">
					<hr>
					<h3>BANK TRANSFER</h3>
					<p>ABC Bank Limited, Dhaka Branch, 14/12 Block, Dhaka Account No: CA 01**********</p>
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