<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
	<title>website</title>
</head>
<body>
	<section class="banner" style=" background-image:  filter: blur(8px), linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),url(images/image1.jpeg); min-height: 50vh;">
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
	<h1 style="margin-top: 20px;">MOGPOG</h1>
		<p>DISCOVER THE BEAUTY OF MOGPOG</p>
	</section>

	<div style="text-align: center;">
		<h1 style="color: white; font-size:50px;"> MOGPOG </h1>

		
		<div class="row" >
			<div class="column" style="box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24);">
				<div class="content">
				<img src="images/food.png" style="width: 90%">
				   	<?php
						echo '<span style="font-size: 20px; font-weight: bold;"> ' . "FOOD".  '</span>';

						echo "<br>";
						echo '<span style="color: black; font-size: 12px;"> ' . "Discover the famous foods in Mogpog.".  '</span><br><br>';
					 ?>

					<a href="mogpog_food.html"><button class="button"> EXPLORE </button></a>
				</div>
			</div>

			<div class="column" style="box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24);">
				<div class="content">
					<img src="images/place.png " style="width: 90%">
					<?php


						echo '<span style="font-size: 20px; font-weight: bold;"> ' . "PLACES".  '</span>';

						echo "<br>";
						echo '<span style="color: black; font-size: 12px;"> ' . "Discover the best tourist spot that you can visit.".  '</span><br><br>';
					?>

					<a href="mogpog_place.html"><button class="button"> EXPLORE </button></a>
				</div>
			</div>
			<div class="column" style="box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.24);">
				<div class="content">
					<img src=" images/festival.jpeg"style="width: 90%">
						<?php


						echo '<span style="font-size: 20px; font-weight: bold;"> ' . "FESTIVAL".  '</span>';

						echo "<br>";
						echo '<span style="color: black; font-size: 12px;"> ' . "Discover the festivals held in Mogpog".  '</span><br><br>';
					?>
			
					<a href="mogpog_fes.html"><button class="button"> EXPLORE </button></a>
				</div>
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
