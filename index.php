<?php include ("header.php"); ?>
		<div class='body_wrap home_page'> 
			
			<div class="fullscreen-bg">
    			<video loop muted autoplay class="fullscreen-bg__video">
        			<source src="imgs/egg_crack.mp4" type="video/mp4">
   		 		</video>
			</div>
			<div class ="flex-container" >
				<div class ="flex-item our-mission" >
					<h1> Our Mission </h1>
					<p> 
						Some of the most talented members of the restaurant community share the recipes they keep coming back to. From savory soups to sweet treats that will have you thinking of grandma’s kitchen, there’s something for everyone. </p>

						<p>Tastie Go is here for all your cooking recipe needs! Just search, or click on.. breakfast, lunch, or dinner to find a recipe that’s right for you. Get Cooking !
					</p>
				</div>
			</div>
			<div class = "flex-container icons" >
				<div class = "flex-item breakfast" >
					<a href= 'listing.php?meal=breakfast' >
					<img src= "imgs/breakfast_icon.png"/>
					<br/>Breakfast</a> 
				</div>
				<div class = "flex-item lunch" >
					<a href= 'listing.php?meal=lunch' >
					<img src= "imgs/lunch_icon.png"/>
					<br/>Lunch</a>  
				</div>
				<div class = "flex-item dinner" >
					<a href= 'listing.php?meal=dinner' >
					<img src= "imgs/dinner_icon.png"/>
					<br/>Dinner</a> 
				</div>

			</div>

		</div>
		<?php include ("footer.php"); ?>