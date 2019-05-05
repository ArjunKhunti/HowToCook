<?php

$row = 1;
			if (($handle = fopen("clean_recipes.csv", "r")) !== FALSE) {
    			while (($data = fgetcsv($handle, 2000, ";")) !== FALSE) {
        			$num = count($data);
        			// echo "<p> $num fields in line $row: <br /></p>\n";
        			// $row++;
        			
           //          echo "Name : ".$data[0]."<br>";
           //          echo "<img src=".$data[2]."><br>";
           //          echo "Prepare time: ".$data[4]."<br>";
           //          echo "Cook time: ".$data[5]."<br>";
           //          echo "Total time: ".$data[6]."<br>";
                    echo "Ingredients : ".$data[7]."<br>";
                    //echo "Direction: ".$data[8]."<br>";
        			// for ($c=0; $c < $num; $c++) {
           //  			echo $data[$c] . "<br />\n";
        			// }
    			}
    	//echo "row  = ".$row;
    	fclose($handle);
	}

?>