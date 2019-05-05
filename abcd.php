<?php

$row = 1;
			$count = 0;
			if (($handle = fopen("clean_recipes.csv", "r")) !== FALSE) {
    			while (($data = fgetcsv($handle, 2000, ";")) !== FALSE) {
        			$num = count($data);
        			$row++;
        			//if (strpos($ing, $data[7]) >= 0 && strpos($ing, $data[7]) < strlen($s1))
        			//{
  
	                    echo "<b>Ingredients :</b><br>".$data[7]."<br><br>";
    				}
    			}
    			fclose($handle);
			

			?>