<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="HomeCSS.css">
	<title></title>
</head>
<body>
		<?php require 'header.php'; ?>
</body>
</html>

<style type="text/css">
	#dataPrint {
		text-align: justify;
		font-family: verdana;
		font-size: 20px;
		border: 1px solid black;
		margin: 1%;
		padding: 2%;
		width: 90%;
	}
	#namePrint {
		color: red;
		font-size: 30px;
	}
</style>


<?php
	ini_set('display_errors', 'Off');
	if(isset($_POST['submit']))
	{
		if($_POST['ingredients'] == null )
		{
			echo "Please select ingredients";
		}
		else
		{
			require 'config.php';
			$sql = "SELECT * FROM gujarati";
			$result = mysqli_query($conn, $sql);

			$ing = null;
			echo "<p style='color: blue; font-size: 30px; font-family : serif; '>";
			echo "Ingredients : ";

			$count = 0;
			foreach($_POST['ingredients'] as $ingredeance){
				$ing = $ingredeance;
				echo $ing.", ";
			}
			$count = 0;
			foreach($_POST['ingredients'] as $ingredeance){
				$ing = $ingredeance;			
				echo "</p>";
				echo "<br><br>";
				
				if (mysqli_num_rows($result) > 0) {
	    		    while($row = mysqli_fetch_assoc($result)) {
	    		    	if(strpos($row["ingredients"], $ing)) {

	    		    		$count++;

	    		    		// if($count > 5)
	    		    		//{
		        				echo "<div id='dataPrint'>";
								echo "<b id='namePrint'>".$row["name"]."</b><br><br>";
								echo "<b>Prepare time :</b>".$row["prepTime"]."<br>";
								echo "<b>Cook time :</b>".$row["cookTime"]."<br>";
								echo "<b>Total time :</b>".$row["totalTime"]."<br>";
								echo "<b>Difficult Level :</b>".$row["level"]."<br>";
								echo "<b>Ingredients :</b><br>".$row["ingredients"]."<br><br>";
								echo "<b>Direction :</b><br>".$row["direction"]."<br>";
								echo "</div>";
	        				//}
	        			}
	    			}
				} 
			}

			if($count == 0) {
				echo "<div id='dataPrint'>";
				echo "<b id='namePrint'>";
				echo "Sorry We didn't find any Recipes from these ingredients!";
				echo "</b></div>";
			}
			mysqli_close($conn);
		}
	}
?>