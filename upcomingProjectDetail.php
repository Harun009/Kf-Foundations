<!DOCTYPE html>
<html lang="en">
<head>
<?php include('header.php')?>
<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
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
.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 1px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 100%;
  max-width: 850px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
				<h2 style="font-size: 30px;">UPCOMING PROJECT DETAILS</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-5  col-lg-5">
				<img src="images/kkf/slide-3.jpg" style=" border-radius: 2%;height:auto; width:100%;"/>
			</div>
			<div class="ccol-sm-12 col-md-7 col-lg-7">
				<h2 style="font-size: 20px;">HUMANITARIAN</h2>
				<p style="text-align:justify;">The necessity of establishing a social organization named Kachakata Foundation 
				(KF) for the deprive people of rural area was felt in the late 2019.  KF is the name of the far-reaching dream of some 
				socially conscious peoples who are self-respected and self-confident.  This foundation is like the desired blossoming of small
				cherished dreams. This non-profit and non-political civil society organization is conducting specific activities for the poor in 
				collaboration with the locals.</p>
			</div>
		</div>
		<hr/>
	</div>
</section>
<section class="ftco-section">
	<div class="container">
	<h4>PROJECT GALLERY</h4>
		<div class="row">
			<div class="column">
				<img src="images/kkf/img/kk27.jpg" style="width:100%;height:200px;border-radius: 2%;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
			</div>
			<div class="column">
				<img src="images/kkf/img/kk10.jpg" style="width:100%;height:200px;border-radius: 2%;" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
			</div>
			<div class="column">
				<img src="images/kkf/img/kk34.jpg" style="width:100%;height:200px;border-radius: 2%;" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
			</div>
			<div class="column">
				<img src="images/kkf/img/kk35.jpg" style="width:100%;height:200px;border-radius: 2%;" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
			</div>
			<div class="column">
				<img src="images/kkf/img/kk8.jpg" style="width:100%;height:200px;border-radius: 2%;" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
			</div>
			<div class="column">
				<img src="images/kkf/img/kk30.png" style="width:100%;height:200px;border-radius: 2%;" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
			</div>
			<div class="column">
				<img src="images/kkf/img/kk24.jpg" style="width:100%;height:200px;border-radius: 2%;" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
			</div>
			<div class="column">
				<img src="images/kkf/img/kk11.jpg" style="width:100%;height:200px;border-radius: 2%;" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div id="myModal" class="modal">
				  <span class="close cursor" onclick="closeModal()">&times;</span>
				  <div class="modal-content" style="margin-top:100px;">
					<div class="mySlides">
					  <div class="numbertext">1 / 8</div>
					  <img src="images/kkf/img/kk27.jpg" style="width:100%;height:500px;">
					</div>

					<div class="mySlides">
					  <div class="numbertext">2 / 8</div>
					  <img src="images/kkf/img/kk10.jpg" style="width:100%;height:500px;">
					</div>

					<div class="mySlides">
					  <div class="numbertext">3 / 8</div>
					  <img src="images/kkf/img/kk34.jpg" style="width:100%;height:500px;">
					</div>
					
					<div class="mySlides">
					  <div class="numbertext">4 / 8</div>
					  <img src="images/kkf/img/kk35.jpg" style="width:100%;height:500px;">
					</div>
					
					<div class="mySlides">
					  <div class="numbertext">5 / 8</div>
					  <img src="images/kkf/img/kk8.jpg" style="width:100%;height:500px;">
					</div>
					
					<div class="mySlides">
					  <div class="numbertext">6 / 8</div>
					  <img src="images/kkf/img/kk30.png" style="width:100%;height:500px;">
					</div>
					
					<div class="mySlides">
					  <div class="numbertext">7 / 8</div>
					  <img src="images/kkf/img/kk24.jpg" style="width:100%;height:500px;">
					</div>
					
					<div class="mySlides">
					  <div class="numbertext">8 / 8</div>
					  <img src="images/kkf/img/kk11.jpg" style="width:100%;height:500px;">
					</div>
					
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

					<div class="caption-container">
					  <p id="caption"></p>
					</div>
				  </div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</section>
<footer class="footer">
	<?php include('footer.php')?>
</footer>
	<?php include('foot.php')?>
</html>