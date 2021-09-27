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

.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}
a:hover{
	text-decoration:none;
}
/* Style the tab content */
.tabcontent {
 /* display: none;*/
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

.ubutton{
		font-family: Verdana,sans-serif;
		font-size: 12px;
		border: 1px solid #a53838;
		padding: 7px 30px;
		border-radius: 30px;
		color: #fd645b;
		font-weight:600;
	}
	.ubutton:hover{
		font-family: Verdana,sans-serif;
		font-size: 12px;
		border: 1px solid #fd645b;
		background-color:#fd645b;
		padding: 7px 30px;
		border-radius: 30px;
		color: #fff;
		font-weight:600;
	}
	@media only screen and (min-width: 600px) {
		  .proTab {
			text-align: center;
			width:20%;
		  }
		}
	@media only screen and (max-width: 500px) {
		  .proTab {
			text-align: center;
			width:100%;
		  }
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
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 style="font-size: 30px;">GALLERY</h2>
			</div>
		</div>
		<div class="row">
			<div class="proTab">
				<a href="javascript:void(0)" onclick="openCity(event, 'allprojects');">
					<div class="tablink w3-bottombar w3-hover-light-grey" style='background-color:#d6d6d2;'>ALL</div>
				</a>
			</div>
			<div class="proTab">
				<a href="javascript:void(0)" onclick="openCity(event, 'education');">
				  <div class="tablink w3-bottombar w3-hover-light-grey">EDUCATION</div>
				</a>
			</div>
			<div class="proTab">
				<a href="javascript:void(0)" onclick="openCity(event, 'health');">
				  <div class="tablink w3-bottombar w3-hover-light-grey">HEALTH</div>
				</a>
			</div>
			<div class="proTab">
				<a href="javascript:void(0)" onclick="openCity(event, 'devlopment');">
				  <div class="tablink w3-bottombar w3-hover-light-grey">DEVELOPMENT</div>
				</a>
			</div>
			<div class="proTab">
				<a href="javascript:void(0)" onclick="openCity(event, 'humanitarin');">
				  <div class="tablink w3-bottombar w3-hover-light-grey">HUMANITARIAN</div>
				</a>
			</div>
		</div>
	    <div id="allprojects" class="w3-container city" style="display:">
			<br/>
			<h2>ALL GALLERY</h2>
			<hr/>
			<div class="row">
				<?php 
					include "config.php";
					$sql= "SELECT * FROM projectgallery order by imageName";
					$result = $conn->query($sql);
					if ($result->num_rows > 0){
					$count = $result->num_rows;
					while($rowa = mysqli_fetch_array($result)){
				?>
				<div class="col-md-3">
					<img src="images/projectGallery/<?php echo $rowa['imageName'];?>" style="width:100%;height:auto;border-radius: 2%;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
				</div>
				<?php } } ?>
			</div>
	    </div>

		<div id="education" class="w3-container city" style="display:none">
			<br/>
			<h2>EDUCATION</h2>
			<hr/>
			<div class="row">
				<?php 
					include "config.php";
					$sql= "SELECT * FROM projectgallery WHERE cateId=1";
					$result = $conn->query($sql);
					if ($result->num_rows > 0){
					$count = $result->num_rows;
					while($rowa = mysqli_fetch_array($result)){
					$gid= $rowa['cateId'];
				?>
				<div class="col-md-3">
					<img src="images/projectGallery/<?php echo $rowa['imageName'];?>" style="width:100%;height:auto;border-radius: 2%;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
				</div>
				<?php } } ?>
			</div>
		</div>

	    <div id="health" class="w3-container city" style="display:none">
			<br/>
			<h2>HEALTH</h2>
			<hr/>
			<div class="row">
				<?php 
				include "config.php";
				$sql= "SELECT * FROM projectgallery WHERE cateId=2";
				$result = $conn->query($sql);
				if ($result->num_rows > 0){
				$count = $result->num_rows;
				while($rowa = mysqli_fetch_array($result)){
		
				?>
				<div class="col-md-3">
					<img src="images/projectGallery/<?php echo $rowa['imageName'];?>" style="width:100%;height:auto;border-radius: 2%;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
				</div>
				<?php } } ?>
			</div>
	    </div>
		<div id="devlopment" class="w3-container city" style="display:none">
		    <br/>
			<h2>DEVELOPMENT</h2>
			<hr/>
			<div class="row">
				<?php 
				include "config.php";
				$sql= "SELECT * FROM projectgallery WHERE cateId=3";
				$result = $conn->query($sql);
				if ($result->num_rows > 0){
				$count = $result->num_rows;
				while($rowa = mysqli_fetch_array($result)){
		
				?>
				<div class="col-md-3">
					<img src="images/projectGallery/<?php echo $rowa['imageName'];?>" style="width:100%;height:auto;border-radius: 2%;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
				</div>
				<?php } } ?>
			</div>
	    </div>
		<div id="humanitarin" class="w3-container city" style="display:none">
			<br/>
			<h2>HUMANITARIAN</h2>
			<hr/>
			<div class="row">
				<?php 
				include "config.php";
				$sql= "SELECT * FROM projectgallery WHERE cateId=4";
				$result = $conn->query($sql);
				if ($result->num_rows > 0){
				$count = $result->num_rows;
				while($rowa = mysqli_fetch_array($result)){
		
				?>
					<div class="col-md-3">
						<img src="images/projectGallery/<?php echo $rowa['imageName'];?>" style="width:100%;height:auto;border-radius: 2%;" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
					</div>
					
				<?php } } ?>
			</div>
	    </div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div id="myModal" class="modal">
				  <span class="close cursor" onclick="closeModal()">&times;</span>
				  <div class="modal-content" style="margin-top:100px;">
						<?php 
							include "config.php";
							$sql= "SELECT * FROM projectgallery";
							$result = $conn->query($sql);
							if ($result->num_rows > 0){
							$count = $result->num_rows;
							while($rowa = mysqli_fetch_array($result)){
								$i=1;
						?>
							<div class="mySlides">
							  <div class="numbertext"><?php echo $i++;?>/<?php echo $count;?></div>
							  <img src="images/projectGallery/<?php echo $rowa['imageName'];?>" style="width:100%;height:auto;">
							</div>
						<?php } } ?>
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
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}
</script>
	<?php include('foot.php')?>
</html>