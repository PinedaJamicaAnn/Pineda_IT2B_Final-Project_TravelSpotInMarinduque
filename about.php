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
	<section class="banner" style=" background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),url(images/image1.jpg); min-height: 50vh;">
		<nav>
			<h1 style=" font-size: 25px;">Travel Spot in Marinduque</h1>
			<div class="nav-links" id="navLinks">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="explore.php">Explore</a></li>
					<li><a href="contact.php">Contacts</a></li>
				</ul>
			</div>
		</nav>
<div class="text-box">
	<h1 style="margin-top: 50px;">About Us</h1>
	<p style="font-size: 30px;">Get to know more about the creators of this website!</p>
</div>
	</section>

	<div class="container" style="height: 800px;">
		<h1> About the Team </h1>

		<div class="row">
			<div class="column" style="height: 600px; width: 30%; ">
				<div class="content">
					<img src="images/marella.jpg" style="width: 70%; height: 40%; margin-top: -30px; ">
					<div class="conts">
						<?php
							echo '<span style="font-size: 25px; font-weight: bold;"> ' . "MARELLA BUHAY ".  '</span><br>';
							echo '<span style="margin-top: -30px; font-size: 15px;"> ' . "Web Designer/Programmer ".  '</span><br><br>';
							echo '<span style= "font-size= smaller; margin-top: 8px;"> ' . "Marella is a second year college student, currently taking Bachelor of Science in Information Technology at Marinduque State College.". '</span><br><br>';
							echo '<span style="font-size: 13px";> ' . "marella.gutierrez84@gmail.com". '</span><br>';

						 ?>
						<p><button class="button">Contact</button></p><br>
						<a href="#"><img src="images/icon1.png" style="height: 30px;width: 30px;margin-left: 15px; margin-top: -5px;"></a>
						<a href="#"><img src="images/icon2.png" style="height: 30px;width: 30px;margin-left: 25px; margin-top: -5px;"></a>
						<a href="#"><img src="images/icon3.png" style="height: 30px;width: 30px;margin-left: 25px; margin-top: -5px;"></a>
					</div>
				</div>
			</div>

			<div class="column" style="height: 600px; width: 30%; ">
				<div class="content">
					<img src="images/jamica.jpg" style="width: 70%; height: 80%; margin-top: -30px; ">
					<div class="conts">
						<?php
							echo '<span style="font-size: 25px; font-weight: bold;"> ' . "JAMICA ANN R. PINEDA".  '</span><br>';
							echo '<span style="margin-top: -30px; font-size: 15px;"> ' . "Content Researcher/Programmer ".  '</span><br><br>';
							echo '<span style= "font-size= smaller; margin-top: 8px;"> ' . "Jamica is a second year college student, currently taking Bachelor of Science in Information Technology at Marinduque State College.". '</span><br><br>';
							echo '<span style="font-size: 13px";> ' . "jamicaannpineda@gmail.com". '</span><br>';

						 ?>
						<p><button class="button">Contact</button></p><br>
						<a href="#"><img src="images/icon1.png" style="height: 30px;width: 30px;margin-left: 15px; margin-top: -5px;"></a>
						<a href="#"><img src="images/icon2.png" style="height: 30px;width: 30px;margin-left: 25px; margin-top: -5px;"></a>
						<a href="#"><img src="images/icon3.png" style="height: 30px;width: 30px;margin-left: 25px; margin-top: -5px;"></a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="footer" style="background-color: white;">
			<p> &copy; 2022 Travel Marinduque <br> Santa Cruz, Marinduque - Philippines <br> Telephone no. (+63) 966-1690-4201. All Rights Reserved</p>


			<a href="#"><img src="images/icon1.png"></a>
			<a href="#"><img src="images/icon2.png"></a>
			<a href="#"><img src="images/icon3.png"></a>
			<a href="#"><img src="images/icon4.png"></a>
		</div>
</body>
</html>
