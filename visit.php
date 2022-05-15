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
	<section class="banner" style="height: 130vh;">
		<nav>
			<h1 style="color: white;font-size: 25px;">Travel Spot in Marinduque</h1>
			<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="explore.html">Explore</a></li>
					<li><a href="feedback.html">Blogs</a></li>
					<li><a href="contacts.html">Contacts</a></li>
				</ul>
			</div>
			<i class="fa fa-bars" onclick="showMenu()"></i>
		</nav>
			<div class="visit">
			<h1 style="margin-top: -10px; text-align: center; font-size: 60px;">MARINDUQUE PROVIENCE</h1>
			<div class="contact-box"style=" background-color: whitesmoke; border-radius: 60px;">

				<div class="visit">
							<?php 
 
						echo '<span style="color: black; font-size: 15px; margin top: 15px;"> ' . " Marinduque  is an island province in the Philippines located in Southwestern Tagalog Region or Mimaropa, formerly designated as Region IV-B. Its capital is the municipality of Boac. Marinduque lies between Tayabas Bay to the north and Sibuyan Sea to the south. It is west of the Bondoc Peninsula of Quezon province; east of Mindoro Island; and north of the island province of Romblon. Some parts of the Verde Island Passage, the center of the center of world's marine biodiversity and a protected marine area, are also within Marinduque's provincial waters.
                    The province of Marinduque was ranked number 1 by the Philippine National Police and Philippine Security Forces as the 2013 Most Peaceful Province of the country due to its low crime rate statistics alternately ranking with the province of Batanes yearly. Furthermore, for almost 200 years, the province is home to one of the oldest religious festivals of the country, the Moriones celebrated annually every Holy Week.<br>".  '</span><br>';
				

				 	echo '<span style="font-size: 25px; font-weight: bold;"> ' . "<br><br>WHAT DOES MARINDUQUE MEAN?".  '</span><br>';
 

					echo '<span style="color: black; font-size: 15px; margin top: 15px;"> ' . " Marinduque Hispanized corruption of either malindig or malindug, which means “stand tall” or “elegant”, in reference to a potentially active volcano in the southern section of the island, the Mount Malindig.<br>".  '</span><br>';
					echo '<span style="font-size: 25px; font-weight: bold;"> ' . "<br><br>The Marinduque provinceis divided into 6 Municipalities:".  '</span><br>';
					
					echo '<span> BOAC </span><br>';
                    echo '<span> MOGPOG</span><br>';
                    echo '<span> TORRIJOS </span><br>';
                    echo '<span> BUENAVISTA </span><br>';
                    echo '<span> SANTA CRUZ </span><br>';
                    echo '<span> GASAN </span><br>';

 ?>

				</div>
			</section>


		<div class="footer" style="padding: 100px; margin-top: -10px;">
			<p> &copy; 2022 Travel Marinduque <br> Santa Cruz, Marinduque - Philippines <br> Telephone no.(+63) 966-1690-4201. All Rights Reserved</p>


			<a href="#"><img src="images/icon1.png"></a>
			<a href="#"><img src="images/icon2.png"></a>
			<a href="#"><img src="images/icon3.png"></a>
			<a href="#"><img src="images/icon4.png"></a>
		</div>






<!--------JavaScript for Toggle Menu-------->
<script>

	var navLinks = document.getElementById("navLinks");

	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-200px";
	}
	</script>

</body>
</html>