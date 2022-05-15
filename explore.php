<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>website</title>
</head>
<body>

	<section class="banner" style=" height: 270vh; background-image:  filter: blur(8px), linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),url(images/image1.jpeg);">
		<nav>
			<h1 style=" font-size: 25px;">Travel Spot in Marinduque</h1>
			<div class="nav-links" id="navLinks">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="explore.html">Explore</a></li>
					<li><a href="feedback.html">Blogs</a></li>
					<li><a href="contacts.html">Contacts</a></li>
				</ul>
			</div>
		</nav>

		<div class="text-box">
			<h1 style="color: white; margin-top:-900px">EXPLORE</h1>
		</div>

		<div class="row" style="margin-top: 60px;" >
			<div class="sub" style="box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24); width: 1000px; height: 700px; margin-left: 80px; ">
					<img src="images/map1.png" style="width: 100%; height: 550px; margin-top: 0px;">
					<h1 style="color:black; text-align: center; margin-top:20px; font-size: 50px;">MAP OF MARINDUQUE</h1>
			</div>

	<div style="text-align: center;">
		<h1 style="color: white; font-size:50px;"> MUNICIPALITIES </h1>

		<div class="row" >
			
			<div class="column" style="box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24);">
				<div class="content">
					<img src="images/boac.png" style="width: 230px;height: 180px; margin-top: -43px; margin-left: -44px;">

					<?php 
					echo '<span style="font-size: 20px; font-weight: bold;"> ' . "BOAC".  '</span> ';
					echo '<br>';
					echo '<span style="color: black; font-size: 9px;" >"A place where it is known for battle of Paye Site"</span><br><br>'
					?>

					<a href="boac_explore.html"><button class="button"> EXPLORE </button></a>
				</div>
			</div>


			<div class="column" style="box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24);">
				<div class="content">
					<img src="images/sta.png" style="width: 230px;height: 180px; margin-top: -43px; margin-left: -44px;">

					<?php
                      echo'<span  style="font-size: 20px; font-weight: bold;"> ' . "SANTA CRUZ".  '</span>';
                      echo '<br>';
                      echo '<span  style="color: black; font-size: 9px;" >"Known for its biggest Lenten Festival, the Moriones"</span><br><br>'
					?>
				
					<a href="sta_explore.html"><button class="button"> EXPLORE </button></a>
				</div>
			</div>

			<div class="column" style="box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24);">
				<div class="content">
					<img src="images/mogpog.png" style="width: 230px;height: 180px; margin-top: -43px; margin-left: -44px;">

					<?php
					echo'<span style="font-size: 20px; font-weight: bold;"> ' . "MOGPOG".  '</span>';
                    echo '<br>';

                    echo '<span style= "color: black; font-size: 9px;" >"Where the Moriones Fetival orinated from."</span><br><br>'

					?>
					<a href="mogpog_explore.html"><button class="button"> EXPLORE </button></a>
				</div>
			</div>

			<div class="column" style="box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24);">
				<div class="content">
					<img src="images/torrijos.png" style="width: 230px;height: 180px; margin-top: -43px; margin-left: -44px;">
					 <?php

                     echo'<span style="font-size: 20px; font-weight: bold;"> ' . "TORRIJOS".  '</span>';
					echo "<br>";

					echo '<span style="color: black; font-size: 9px;" >"Known for its white sand beaches, specifically the Poctoy White Beach"</span><br><br>';
                    ?>

					<a href="torrijos_explore.html"><button class="button"> EXPLORE </button></a>
				</div>
			</div>

			<div class="column" style="box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24);">
				<div class="content">
					<img src="images/GASAN.png" style="width: 230px;height: 180px; margin-top: -43px; margin-left: -44px;">
					
					<?php 
					echo '<span style="font-size: 20px; font-weight: bold;"> ' . "GASAN".  '</span>';
					echo "<br>";

					echo '<span style="color: black; font-size: 9px;" > "Home of best tourist spot in Marinduque" </span><br><br>';
                  ?>

					<a href="gasan_explore.html"><button class="button"> EXPLORE </button></a>
				</div>
			</div>

			<div class="column" style="box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24);">
				<div class="content">
					<img src="images/buenavista.png" style="width: 230px;height: 180px; margin-top: -43px; margin-left: -44px;">

					<?php 
					echo '<span style="font-size: 20px; font-weight: bold;"> ' . "BUENAVISTA".  '</span>';
					echo "<br>";
					
				
					echo '<span style="color: black; font-size: 9px;" >" Where MT. Malindig looms over"</span><br><br>';
                     ?>

					<a href="buenavista_explore.html"><button class="button"> EXPLORE </button></a>
				
				</div>
			</div>

		</div>
	</div>

	<div class="footer" style="background-color: white;">
			<p> &copy; 2022 Travel Marinduque <br> Santa Cruz, Marinduque - Philippines <br> Telephone no. (+63)  (+63) 966-1690-4201. All Rights Reserved</p>


			<a href="#"><img src="images/icon1.png"></a>
			<a href="#"><img src="images/icon2.png"></a>
			<a href="#"><img src="images/icon3.png"></a>
			<a href="#"><img src="images/icon4.png"></a>
		</div>
</body>
</html>
