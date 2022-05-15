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
	<section class="banner" style=" background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),url(images/buen-banner.jpg); min-height: 50vh;">
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
	<h1 style="margin-top: 20px;">BUENAVISTA</h1>
</div>
	</section>

	<h1 style="color: black; font-size:50px; text-align:center; margin-top: 20px;">FAMOUS FOOD IN BUENAVISTA</h1>
	<div class="container" style="height: 1200px; margin-top: 100px;">
		<div class="ctr">
  			<img src="images/coco.jpg" style="width:100%; height: 290px;">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "COCO SUGAR ".  '</span><br>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "This particular sweetener is yielded from the sap of coconuts and is processed in double jacketed kettles placed under high heat. Coco sugar is considered to be the best alternative for health conscious consumers and diabetics for its low glycemic index and is chemical free.".  '</span><br>';
				?>
  			</div>
		</div>

		<div class="ctr">
  			<img src="images/patis.jpg" style="width:100%; height: 290px;">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "BAGOONG & PATIS ".  '</span><br>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "Buenavista Bagoong Producers Multi-Purpose Cooperative (BBPMPC), founded by 25 fisher folks from a small town in Marinduque, strives to promote special Asian condiments in a journey that enabled success through community development.".  '</span>';
				?>
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
