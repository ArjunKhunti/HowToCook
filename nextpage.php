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
	#imgPrint {
		border: 20px solid grey;
		margin-right: 1%;
		padding: 2%;
		width: 22%;
		transform: translate(240%, -125%);
	}
	#namePrint {
		color: red;
		font-size: 30px;
	}
</style>

<?php
	ini_set('display_errors', 'Off');
			if($_POST['ingredients'] == null )
		{
			echo "Please select ingredients";
		}
		else
		{
			$flag = 0;
			$ing = null;
			echo "<p style='color: blue; font-size: 30px; font-family : serif; margin-left:2%; '>";
			echo "Ingredients : ";
			
			foreach($_POST['ingredients'] as $ingredeance){
				$ing = $ingredeance;
				echo $ing.", ";
			}
			echo "</p><br><br>";

			foreach($_POST['ingredients'] as $ingredeance){
				$ing = $ingredeance;			
				echo "</p>";
				echo "<br><br>";

				if (($handle = fopen("clean_recipes.csv", "r")) !== FALSE) {
    				while (($data = fgetcsv($handle, 2000, ";")) !== FALSE) {
        				$num = count($data);
        				if(strpos($data[7], $ing)) {
        					$row++;
        					echo "<div id='box'>";
	        					echo "<div id='dataPrint'>";
						    		echo "<b id='namePrint'>".$data[0]."</b><br><br>";
		                    		echo "<b>Prepare time : </b>".$data[4]."<br>";
		                    		echo "<b>Cook time : </b>".$data[5]."<br>";
		                    		echo "<b>Total time : </b>".$data[6]."<br>";
		                    		echo "<b>Ingredients : </b><br>".$data[7]."<br><br>";
		                    		echo "<b>Direction : </b>";
		                    		$ttt = "$data[8]";
		                  			echo nl2br($ttt);
		                    	echo "</div>";
		                    	
		                    	echo "<div id = 'imgPrint'>";
			                    	echo "<img src=".$data[2]." height='180px' width = '280px'><br>";
			                    echo "</div>";
			                echo "</div>";

		                    $flag = 1;
    					}

    					if ($row === 5) {
    						break 2;
    					}
    				}
    			}
    			fclose($handle);
			}

			if($row == 0 || $flag == 0) {
				echo "<div id='dataPrint'>";
				echo "<b id='namePrint'>";
				echo "Sorry We didn't find any Recipes from these ingredients!";
				echo "</b></div>";
			}
		}
	
?>






