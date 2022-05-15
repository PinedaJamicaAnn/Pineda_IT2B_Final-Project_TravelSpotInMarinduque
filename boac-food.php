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
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="explore.php">Explore</a></li>
					<li><a href="contact.php">Contacts</a></li>
				</ul>
			</div>
		</nav>
<div class="text-box">
	<h1 style="margin-top: 20px;">BOAC</h1>
</div>
	</section>

	<h1 style="color: black; font-size:50px; text-align:center;">FAMOUS FOOD IN BOAC</h1>
	<div class="container" style="height: 1000px;">

	

    			<div class="ctr" style="margin-top: 30px;">
  			<img src="images/bibingka.jpeg" style="width:100%;">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
  				<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "BIBINGKANG BOAC".  '</span>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . "He Island province has several native versions of bibingka, a staple rice cake delicacy found all over the Philippines, with Bibingkang Lalaki (male bibingka) being just one of them. Bibingkang Lalaki is also referred to as Bibingkang Boac, named after the province’s capital. It’s a huge portion of bibingka; that’s the size of a pizza. Locals will explain amusedly that this version of bibingka is called as thus because it contains eggs. Bibingkang lalaki also uses coconut wine instead of yeast, which keeps its inside moist after cooking.  ".  '</span><br><br><br>';
				?>
    		
  			</div>

		</div>

<div class="ctr" style="margin-top: 30px;">
  			<img src="images/manakla.jpeg" style="width:100%;">
  			<div class="ct" style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
  					<?php
						echo '<span style="font-size: 30px; font-weight: bold;"> ' . "MANAKLA".  '</span>';

						echo "<br>";
						echo '<span style="color: white; font-size: 15px;"> ' . " Manakla is the local Marinduque word for crayfish, and it’s a variety of crayfish especially popular in Marinduque, and is regularly used as a protein for every type of recipe you can think of.  ".  '</span><br><br><br>';
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
