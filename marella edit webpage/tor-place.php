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
	<section class="banner1" style=" background-image:  filter: blur(8px), linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)),url(images/image1.jpeg); min-height: 50vh;">
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
	<h1 style="margin-top: 20px;">TORRIJOS</h1>
</div>
	</section>

	<h1 style="color: black; font-size:50px; text-align:center; margin-top: 20px;">FAMOUS PLACE IN TORRIJOS</h1>
	<div class="container" style="height: 1200px; margin-top: 100px;">
		<div class="ctr">
  			<img src="images/payanas.jpeg" style="width:100%; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "PAYANAS VIEW DECK".  '</span><br>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "One of torrijos' tourist spot located at Payanas, Torrijos, Marinduque. It is perfect for those who like to take instagramable photos because of its location where a perfect view can be seen. . ".  '</span><br><br><br>';
						
				?>
  			</div>

		</div>

		<div class="ctr">
			<img src="images/bangwayin.jpeg" style="width:100%; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "BANGWAYIN FARM".  '</span><br>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "Located at Bangwayin, Torrijos, Marinduque. This place is perfect for the person who likes to unwind, those who like calming place because of its high location where a perfect scenery can be seen..  ".  '</span><br><br><br>';
						
				?>
  			</div>
		</div>

		<div class="ctr">
			<img src="images/battle-pula.jpg" style="width:100%; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "BATTLE OF PULANG LUPA".  '</span>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "For those person who likes to go to historic places, this one is perfect for you. The Battle of Pulang Lupa Marker was built in memory of the Marinduque revolutionary forces that fought the Americans. A marker stands at the site of the bloodiest battle ever fought in the island, the first known major battle won by the Filipinos over the Americans. So you can enjoy the visit while also learning about history.  ".  '</span><br>';
				?>
  			</div>
		</div>

		<div class="ctr">
			<img src="images/place-banner.jpg" style="width:100%; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "POCTOY WHITE BEACH".  '</span><br>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "Known as the best beach alternative to Boracay, this is considered as one of the finest beaches in Marinduque. It boasts of the be stunning white sands, clear waters and a beautiful scenery that you can enjoy while doing various activities such as surfing, diving, and snorkeling.  ".  '</span><br><br><br><br><br><br>';
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
