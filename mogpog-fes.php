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
	<h1 style="margin-top: 20px;">MOGPOG</h1>

</div>
	</section>

	<h1 style="color: black; font-size:50px; text-align:center;">FAMOUS FESTIVALS IN MOGPOG</h1>
	<div class="container" style="height: 1000px;">
		<div class="ctr">
  			<img src="images/kangga festival.jpeg"  style="width:100%; height: 300px; ">
  			<div class="ct"  style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
  					<?php 
  					echo '<span style="font-size: 30px; font-weight: bold;"> ' . "<br><br> KANGA FESTIVAL".  '</span><br>';

						echo "<br>";
							echo '<span style="color: white; font-size: 15px; margin top: 15px;"> ' . "During the month of May, the people of the agricultural town of Mogpog in Marinduque celebrates their thanksgiving festival for their annual harvests in honor of their patron saint, San Isidro Labrador. The aim of this festival is to pay tribute to the saint and to the farmers who made a solemn effort on their land for numerous months. Kangga Festival was implemented by the local government which is celebrated annually to correspond with San Isidro Labrador’s feast day of May 13.“Kangga” in Marinduquenian Tagalog, is a sled made of bamboo usually carried by carabao. It is used by farmers to transport tools or harvests from their homes to the fields or to the market.<br>".  '</span><br>';
				?>
    			

  			</div>
		</div>

		<div class="ctr">
  			<img src="images/moriones festival (2).jpg"  style="width:100%; height: 300px; ">
  		 <div class="ct"  style="box-shadow: rgba(0, 0, 0, 0.24)0px 7px 15px;">
  		 	<?php 
  					echo '<span style="font-size: 30px; font-weight: bold margin top:10px;"> ' . "<br><br> MORIONES FESTIVAL".  '</span><br>';

						echo "<br>";
							echo '<span style="color: white; font-size: 15px; margin top: 15px;"> ' . "The Moriones is a lenten festival held annually on Holy Week on the island of Marinduque, Philippines. The Moriones are men and women in costumes and masks replicating the garb of biblical Imperial and Royal Roman soldiers as interpreted by locals. The Moriones tradition has inspired the creation of other festivals in the Philippines where cultural practices is turned into street festivals..<br>".  '</span><br>';
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
