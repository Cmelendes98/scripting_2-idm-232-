<?php 
require_once "creds.php";
$mysqli;
function connect() {
	global $mysqli;
	global $host;
	global $user;
	global $password;
	global $db;
	$mysqli = new mysqli($host, $user, $password, $db);
	if($mysqli->connect_errno) {
		echo "could not connect to database";
		echo "Error: " . $mysqli->connect_error . "\n";

	}
	


}

connect();
//make database query//
function makeQuery($sql) {
	global $mysqli;
	if(!$result = $mysqli->query($sql)) {
    // Oh no! The query failed. 
	    echo "Sorry, the website is experiencing problems.";

	    
	    echo "Error: Our query failed to execute and here is why: \n";
	    echo "Query: " . $sql . "\n";
	    echo "Errno: " . $mysqli->errno . "\n";
	    echo "Error: " . $mysqli->error . "\n";
	    exit;
	}
	//if sucessful// 
	else {
		return $result->fetch_all(MYSQLI_ASSOC);
	}
}

//get all recipes
function getAllRecipes(){
	$sql = "select * from `recipes-main`";
	$results = makeQuery($sql);
	return $results;
	
} 
//get all ingredients for one recipe
function getRecipeIngredients($id){
	$sql = "select * from `recipes-ingredients` where `recipe-id`=".$id;
	$results = makeQuery($sql);
	return $results;
	
} 
function getRecipe($id){
	$sql = "select * from `recipes-main` where `recipe-id`=".$id;
	$results = makeQuery($sql);
	return $results;
	
} 

//get all steps for one recipe
function getRecipeSteps($id){
	$sql = "select * from `recipes-steps` where `recipe-id`=".$id;
	$results = makeQuery($sql);
	return $results;
	
} 
//get all recipes by meal type
function getAllRecipesByMeal($meal){
	$sql = "select * from `recipes-main` where meal = '$meal' ";
	$results = makeQuery($sql);
	return $results;
	
} 

//get all recipes by meal type
function searchRecipes($search){
	$sql = "select * from `recipes-main` where `recipe-description` like '%$search%' ";
	$results = makeQuery($sql);
	return $results;
	
} 
	

?>