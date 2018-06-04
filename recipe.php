<?php include ("header.php"); ?>
<?php
$recipe_id = $_GET["id"];
$recipe = getRecipe($recipe_id);
$recipe = $recipe[0];
$path = $recipe["img-folder"].'/'.$recipe["recipe-thumb"];
?>
<div class='body_wrap recipe_page'> 
	<h1> <?php
	echo $recipe["recipe-title"];

	?> 
	</h1>
	<div class = "flex-container" >
		<div class = "flex-item" >

		<img class="dropshadow" src = "imgs/r_images/images/<?php echo $path;?>"/>
		</div>
		<div class = "flex-item">
			<h3> Ingredients </h3>
			<?php 
			$ingredients = getRecipeIngredients($recipe_id);
			foreach ($ingredients as $ingredient){
				echo $ingredient["ingredient-text"]."<br/>";


			}
			 ?>

		</div>			 

	</div>
	
	

</div>
<?php include ("footer.php"); ?>