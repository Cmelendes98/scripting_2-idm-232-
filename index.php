<!DOCTYPE html>
<html lang="en">
 	<head> 
 		 <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href='resume.html'> Resume </a>
		  <a href='contact.html'> Contact </a>
		  <a href='digital-design.html'> Digital Design </a>
		  <a href='fine-art.html'> Fine Art </a>

		</div>

	<div id="main">
		<header>
			<span class= "openLink" id= 'openLink' onclick="openNav()"><img src="hamburger-icon.png"/> </span>
			<div class='logo'> 
				<a href='index.php'>
					<img src= "imgs/logo.png"/> 
				</a>
			</div>
			<nav class="clearfix">
				<div class='noborder'>
					<a href='index.php'> Home </a>
				</div>
				<div>
					 <a href=''>Recipies</a>
				</div>
				<div>
					 <a href='' class='search-link'>Search <img class='arrow' src='imgs/arrow.png'/></a>
				</div>
			</nav>
		
		</header>
		<div class='body_wrap home_page'> 
			
			<div class="fullscreen-bg">
    			<video loop muted autoplay class="fullscreen-bg__video">
        			<source src="imgs/cms.mp4" type="video/mp4">
   		 		</video>
			</div>
			<div class = "flex-container">
				<div class = "flex-item" >
					<img src= "imgs/logo.png"/> 
				</div>
				<div class = "flex-item" >
					<img src= "imgs/logo.png"/> 
				</div>
				<div class = "flex-item" >
					<img src= "imgs/logo.png"/> 
				</div>

			</div>
			<div class ="flex-container" >
				<div class ="flex-item" >
					<h1> Our Mission </h1>
					<p> 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>

		</div>
		<footer>
			<a href='index.php'> Home </a>
			<span class = "divider">|</span>
			<a href=''>Recipies</a>
			<span class = "divider">|</span> 
			<a href=''>Search</a>


			
		</footer>
		<script type='text/javascript' src='mobileNav.js'></script>
	</div>
	</body>
</html>