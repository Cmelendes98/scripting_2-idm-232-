	<?php include ("header.php"); ?>
<div class='body_wrap listing_page'> 
	<?php
	if($_GET['meal'] != '') {
		$recipes = getAllRecipesByMeal($_GET['meal']); 
	}
	else if ($_GET['search']) {
		$recipes = searchRecipes($_GET['search']); 
	}

	else {
		$recipes = getAllRecipes(); 
	}
	if(count($recipes)>0){
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
					<h3>
						<?php
						echo $recipe["recipe-title"];
						?>
					 </h3>
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
	}//end if 
	else {
		?>
		<div class = "flex-container" >
			<div class = "flex-item" >
				no recipes found
			</div>
		</div>

		<?php
	}
	?>
	
</div>
<?php include ("footer.php"); ?>