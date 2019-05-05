<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="HomeCSS.css">
	<title>Recipe Search</title>
</head>
<body style="background-image: url(veg2.jpg);background-attachment: fixed;
  			background-repeat: no-repeat;
  			background-size: 100% 170%;">
		<?php require 'header.php'; ?>
</body>
</html>


<style type="text/css">
	#box1 {
		margin-top: 3%;	
		padding : 2%;
		font-size: 20px;
		color: red;
		font-family: verdana;
		border: 2px dotted black;

	}
	#box {
		margin-bottom: -13%;
	}
	#dataPrint {
		text-align: justify;
		font-family: verdana;
		font-size: 20px;
		border: 1px solid black;
		margin: 1%;
		padding: 2%;
		width: 60%;
	}
	#namePrint {
		color: red;
		font-size: 30px;
	}
	#url {
		text-decoration: none;
		color: white;
	}

	#imgPrint {
		border: 20px solid grey;
		margin-right: 1%;
		padding: 2%;
		width: 22%;
		transform: translate(240%, -125%);
	}
</style>

<?php
	
	if($_POST['search'] == '')
	{
		echo "<script>alert('Please Enter Recipe Name');</script>";
		// header("Refresh:2; index.php");
	}
	else
	{
		/*$flag = 0;
		require 'config.php';
		$sql = "SELECT * FROM gujarati";
		$result = mysqli_query($conn, $sql);
    	
		if (mysqli_num_rows($result) > 0) {
	    	while($row = mysqli_fetch_assoc($result)) {
    			if ($row["name"] == $_POST['search']) {
					echo "<div id='dataPrint'>";
					echo "<b id='namePrint'>".$row["name"]."</b><br><br>";
					echo "<b>Prepare time :</b>".$row["prepTime"]."<br>";
					echo "<b>Cook time :</b>".$row["cookTime"]."<br>";
					echo "<b>Total time :</b>".$row["totalTime"]."<br>";
					echo "<b>Difficult Level :</b>".$row["level"]."<br>";
					echo "<b>Ingredients :</b><br>".$row["ingredients"]."<br><br>";
					echo "<b>Direction :</b>".$row["direction"]."<br>";
					echo "</div>";
                    $flag = 1;
                    break;
				}
			}
		}*/

		$search = $_POST['search'];
		$flag = 0;
		$num = 0;	
		if (($handle = fopen("clean_recipes.csv", "r")) !== FALSE) {
    		while (($data = fgetcsv($handle, 2000, ";")) !== FALSE) {
        		$num = count($data);

    			// echo $data[0]." :    ".$search."<br>";
    			 
        		if(strpos($data[0], $search) !== false) {
					echo "<div id='box'>";
    				echo "<div id='dataPrint'>";
				    echo "<b id='namePrint'>".$data[0]."</b><br><br>";
                    echo "<b>Prepare time : </b>".$data[4]."<br>";
                    echo "<b>Cook time : </b>".$data[5]."<br>";
                    echo "<b>Total time : </b>".$data[6]."<br>";
                    echo "<b>Ingredients : </b><br>".$data[7]."<br><br>";
                    echo "<b>Direction : </b>".$data[8]."<br>";
                    echo "</div>";
                    echo "<div id = 'imgPrint'>";
                    echo "<img src=".$data[2]." height='180px' width = '280px'><br>";
                    echo "</div>";
                    echo "</div>";

                    $flag = 1;
                    break 1;
				}
    		}
    	}
    	fclose($handle);

		if($flag == 0)
		{
			$url1 = "https://www.google.co.in/#q=".$search;
			$url2 = "index.php";
			echo "<div id='box1'>";
			echo "Sorry We didn't Found any Recipe. We Redirect with Google Search. Want to search With Google ?";echo "<button id='submitBtn' style='text-decoration: none; color: white;' name='submit'><a href=$url2 id='url'> << Back </a></button>";
			echo "<button id='submitBtn' style='text-decoration: none; color: white;' name='submit'><a href=$url1 id='url'> Go >> </a></button>";	
		}
	}
?>


