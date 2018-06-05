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
	<h3> Steps </h3>
	<div class = "flex-container recipe-steps" >
		<?php 
			$steps = getRecipeSteps($recipe_id);
			foreach ($steps as $step){
				$stepPath  = $recipe["img-folder"].'/'.$step["step-img"];
				?>
		<div class = "flex-item" >

		<img class="dropshadow" src = "imgs/r_images/images/<?php echo $stepPath;?>.jpg"/>
			<?php
			echo "<h4>".$step["step-title"]."</h4>";
				echo "<p>".$step["step-text"]."</p>";


			 ?>

		</div>
		<?php
		}			 
		?>
	</div>
	
	

</div>
<?php include ("footer.php"); ?>