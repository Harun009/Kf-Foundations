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
				<h2 style="font-size: 30px;">PROJECT</h2>
			</div>
		</div>
		<div class="row">
			<div class="proTab">
				<a href="javascript:void(0)" onclick="openCity(event, 'allprojects');">
					<div class="tablink w3-bottombar w3-hover-light-grey" style='background-color:#d6d6d2;'>ALL PROJECTS</div>
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
			<h2>ALL PROJECTS</h2>
			<hr/>
			<div class="row">
				<div class="w3-row-padding w3-margin-top">
				    <div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\slide-5.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
						    <br/>
							<strong>খাদ্য বিতরণ কর্মসূচি, 2019   (Food Distribution Program, 2019)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=2" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
				    </div>

					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kk14.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
						    <br/>
							<strong>বাস্তবায়িত প্রোগ্রাম (Implemented Programs)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=3" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>

				    <div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\slide-4.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
						    <br/>
							<strong>আর্থিক সহায়তা (Financial Assistance)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=3" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
				    </div>
				</div>
				<div class="w3-row-padding w3-margin-top">
				    <div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kf2.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>উষ্ণ কাপড় বিতরণ প্রোগ্রাম, ২০২০ (Warm Cloth Distribution Program, 2020)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=4" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
				    </div>

					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kk10.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
						    <br/>
							<strong>কোভিড সচেতনতা কর্মসূচি, ২০২০ (Covid Awareness Program, 2020)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=2" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>

				    <div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kf.png" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>খাদ্য বিতরণ কর্মসূচি, ২০২০ (Food Distribution Program, 2020)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=4" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
				    </div>
				</div>

				<div class="w3-row-padding w3-margin-top">
				    <div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kk39.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>বৃক্ষরোপণ কর্মসূচি, ২০২০ (Tree Plantation Program, 2020)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=1" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
				    </div>

					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kk9.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>ইফতার মাহফিল, 2021 (Iftar Mahfil, 2021)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=4" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>
					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\projectGallery\6_n.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>ধর্মীয় প্রতিষ্ঠানে আর্থিক সহায়তা, 2021(Financial Assistance to Religious Institution, 2021)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=4" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>

					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kk11.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>জাতীয় ইভেন্ট  (National events)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=1" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>
				</div>
			</div>
	    </div>

		<div id="education" class="w3-container city" style="display:none">
			<br/>
			<h2>EDUCATION</h2>
			<hr/>
			<div class="row">
				<div class="w3-row-padding w3-margin-top">
					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kk39.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>বৃক্ষরোপণ কর্মসূচি, ২০২০ (Tree Plantation Program, 2020)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=1" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
				    </div>

				    <div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kk11.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>জাতীয় ইভেন্ট  (National events)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=1" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>

	    <div id="health" class="w3-container city" style="display:none">
			<br/>
			<h2>HEALTH</h2>
			<hr/>
			<div class="row">
				<div class="w3-row-padding w3-margin-top">
				   <div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kf.png" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
						    <br/>
							<strong>কোভিড সচেতনতা কর্মসূচি, ২০২০ (Covid Awareness Program, 2020)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=2" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>
					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\slide-5.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
						    <br/>
							<strong>খাদ্য বিতরণ কর্মসূচি, 2019   (Food Distribution Program, 2019)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=2" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
				    </div>
					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kf2.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>শীত বস্ত্র বিতরণ (Winter clothes)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=2" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>
				</div>
			</div>
	    </div>
		<div id="devlopment" class="w3-container city" style="display:none">
		    <br/>
			<h2>DEVELOPMENT</h2>
			<hr/>
			<div class="row">
				<div class="w3-row-padding w3-margin-top">
				    <div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\slide-4.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
						    <br/>
							<strong>আর্থিক সহায়তা (Financial Assistance)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=3" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
				    </div>
				    <div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kk14.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
						    <br/>
							<strong>বাস্তবায়িত প্রোগ্রাম (Implemented Programs)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=3" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>
				</div>
			</div>
	    </div>
		<div id="humanitarin" class="w3-container city" style="display:none">
			<br/>
			<h2>HUMANITARIAN</h2>
			<hr/>
			<div class="row">
				<div class="w3-row-padding w3-margin-top">
				   <div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kf2.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>উষ্ণ কাপড় বিতরণ প্রোগ্রাম, ২০২০ (Warm Cloth Distribution Program, 2020)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=4" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
				    </div>


					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\slide-5.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>খাদ্য বিতরণ কর্মসূচি, ২০২০ (Food Distribution Program, 2020)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=4" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
				    </div>

				   <div class="w3-third">
						<div class="w3-card">
						  <img src="images\projectGallery\6_n.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>ধর্মীয় প্রতিষ্ঠানে আর্থিক সহায়তা, 2021(Financial Assistance to Religious Institution, 2021)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=4" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>
					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kk9.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>ইফতার মাহফিল, 2021 (Iftar Mahfil, 2021)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=4" class="ubutton">READ MORE</a></p>
							<p><br/></p>
						  </div>
						</div>
					</div>
					<div class="w3-third">
						<div class="w3-card">
						  <img src="images\kkf\img\kk11.jpg" style="width:100%;height:250px;">
						  <div class="w3-container" style="text-align:center;">
							<br/>
							<strong>জাতীয় ইভেন্ট  (National events)</strong>
							<br/>
							<br/>
							<p class="upreadMore"><a href="projectDetail.php?pId=4" class="ubutton">READ MORE</a></p>
							<p><br/></p>
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