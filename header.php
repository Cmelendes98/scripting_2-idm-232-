<!DOCTYPE html>
<html lang="en">
 	<head> 
 		 <link rel="stylesheet" href="style.css">
	</head>
	<body>

	<div id="main">
		<header>
			<div class='logo'> 
				<a href='index.php'>
					<img src= "imgs/logo.png"/> 
				</a>
			</div>
			<nav>
				<div class='noborder no-mobile'>
					<a href='index.php'> Home </a>
				</div>
				<div class="no-mobile">
					 <a href='listing.php'>Recipies</a>
				</div>
				<div class = "search">
					<form method = "get" action = "listing.php">
						<input name= "search" type="text" placeholder="Search for recipies"/>
					</form>
				</div>
				<div class="dropdown">
					<div class='dropdown-toggle'>
					 	<span class= "no-mobile"><a href='' class='search-link'>Search <img class='arrow' src='imgs/arrow.png'/></a></span>
					</div>
					 <div class="dropdown-content">
					 	<input type="text" placeholder=" Search for recipies"/>
					 </div>
				</div>
			</nav>
		
		</header>
	<?php include ("database.php"); ?>
