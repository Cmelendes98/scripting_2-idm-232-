	<?php include ("header.php"); ?>
<div class='body_wrap listing_page'> 
	<?php 
	if($_GET['meal'] != '') {
		$recipes = getAllRecipesByMeal($_GET['meal']); 
	}
	else {
		$recipes = getAllRecipes(); 
	}
	foreach ($recipes as $recipe){
	?>
		
		<div class = "flex-container" >
			<div class = "flex-item" >
				<?php
				$path = $recipe["img-folder"].'/'.$recipe["recipe-thumb"];
				?>
				<img src = "imgs/r_images/images/<?php echo $path;?>"/>
			</div>
			<div class = "flex-item drop-shadow">
				<p> 
					<?php
					echo $recipe["recipe-description"];
					?>
				</p>
				<a href="recipe.php?id=<?php echo $recipe["recipe-id"]?>" >view more</a>

			</div>	
		</div>
	<?php
	} //end for each loop
	?>
	
</div>
<?php include ("footer.php"); ?>