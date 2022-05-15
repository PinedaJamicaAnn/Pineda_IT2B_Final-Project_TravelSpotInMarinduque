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

	<h1 style="color: black; font-size:50px; text-align:center; margin-top: 20px;">FAMOUS FOOD IN TORRIJOS</h1>
	<div class="container" style="height: 1000px; margin-top: 100px;">
		<div class="ctr">
  			<img src="images/sinalab.jpg" style="width:100%; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "SINALAB".  '</span>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "It is like a paper-thin pancake consisting of overripe saba or latundan mixed with flour and some buko slices sandwiched between two banana leaves. ".  '</span><br>';
						echo '<span style="color: white; font-size: 15px;"> ' . "It is then placed in a big carajay and turned over from time to time until both sides of the leaves are brown and wrinkled ".  '</span><br><br><br>';
				?>
  			</div>

		</div>

		<div class="ctr">
			<img src="images/niyubak.jpg" style="width:100%; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "NIYUBAK".  '</span>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "Nilubak or niyupak is a boiled green sabas are pounded with a lusong (pestle) together with grated coconut and sugar.  ".  '</span><br>';
						echo '<span style="color: white; font-size: 15px;"> ' . "The process of making niyubak is done through pounding of bananas, while the coconut was gradually added, until the consistensy is thick and sticky. ".  '</span><br>';
				?>
  			</div>
		</div>

		<div class="ctr">
			<img src="images/lomi.jpg" style="width:100%; ">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
    			<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "LOMI".  '</span>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "Lomi is another famous dish in torrijos, it is made with a variety of thick fresh egg noodles of about a quarter of an inch in diameter, soaked in lye water to give it more texture.  ".  '</span><br>';
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
