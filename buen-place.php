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
					<li><a href="contacts.php">Contacts</a></li>
				</ul>
			</div>
		</nav>
<div class="text-box">
	<h1 style="margin-top: 20px;">BUENAVISTA</h1>
</div>
	</section>

	<h1 style="color: black; font-size:50px; text-align:center; margin-top: 20px;">FAMOUS PLACE IN BUENAVISTA</h1>
	<div class="container" style="height: 1200px; margin-top: 100px;">
		<div class="ctr">
  			<img src="images/hotspring.jpg" style="width:90%; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "MALBOG HOT SPRING ".  '</span><br>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "Malbog Sulfuric Hot Spring Resort or “Mabaho” is located at the foot of the mountain in Brgy. Malbog, Buenavista, Marinduque.  The hot spring has sulfur content popularly used for skin care and treatments.  Despite its rotten-egg like foul, many locals and tourists visit this place for body relaxation and healing of skin conditions. Some are even bringing home bottles of sulfuric water.".  '</span>';
				?>
  			</div>
		</div>

		<div class="ctr">
  			<img src="images/mtmalindig.jpeg" style="width:100%; height: 300px; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "MT. MALINDIG".  '</span>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "Majestically standing on an elevation of 1,157 meters above sea level, Mount Malindig is a must-visit Buenavista Marinduque tourist spot and is considered the highest peak in the province. It is a stratovolcano situated at the island’s southern tip and west side of the Bondoc Peninsula on Luzon Island. ".  '</span><br><br>';
				?>
  			</div>
		</div>

		<div class="ctr" style="margin-top: 30px;">
  			<img src="images/balviewdeck.jpeg" style="width:100%; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "<br>BALANACAN VIEW DECK<br>".  '</span>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "<br>Offshore from Balanacan Pier it’s fine nature harbor is an imposing statue of Ina ng Biglang Awa with it’s view deck. Can be good for souvenir photo shots. ".  '</span><br><br><br>';
				?>
  			</div>
		</div>

		<div class="ctr" style="margin-top: 30px;">
  			<img src="images/bellaroca.jpeg" style="width:100%; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "BELLAROCA RESORT<br>".  '</span>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "Bellarocca Island Resort and Spa in Marinduque is distinct from the other upscale, luxury resorts of its category anywhere in the country. All 20 hectares of Bellarocca Island Resort and Spa is mountainous terrain, with its highest point at 114 meters above sea-level. ".  '</span>';
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
