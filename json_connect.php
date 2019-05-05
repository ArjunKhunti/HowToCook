<!-- <?php

	// ini_set('display_errors', 'Off');
	// $connect = mysqli_connect("localhost", "root", "", "recipe");
	// $filename = "train.json";

	// $data = file_get_contents($filename);

	// $array = json_decode($data, true);

	// foreach ($array as $row) {
	// 	# code...
	// 	$sql = "INSERT INTO train(id,cuisine,ingredients) VALUES('".$row["id"]."','".$row["cuisine"]."','".$row["ingredients"]."')";

	// 	mysqli_query($connect, $sql);
	// }

	// echo "Data Inserted!";
?> -->

<?php
$connect = mysqli_connect("localhost", "root", "", "recipe");
 // use prepare statement for insert query
$st = mysqli_prepare($connect, 'INSERT INTO train (id,cuisine,ingredients) VALUES (?, ?, ?)');

// bind variables to insert query params
mysqli_stmt_bind_param($st, 'iss', $id, $cuisine, $ingredients);

// read json file
$filename = 'train.json';
$json = file_get_contents($filename);   

// echo $json;

//convert json object to php associative array
$data = json_decode($json, true);

// loop through the array
foreach ($data as $row) {

    // get the employee details
    $id = $row["id"];
    $cuisine = $row['cuisine'];
    $ingredients ="";
    foreach($row['ingredients'] as $temp){
    	$ingredients.=$temp.",";
    }
    // echo $ingredients."<br><br>";
    // $temp = explode(",", $ingredients)
    // execute insert query
    mysqli_stmt_execute($st);
}
echo "Data Inserted!";
//close connection
mysqli_close($con);
?>



echo "<div id='box'>";
			echo "Sorry We didn't Found any Recipe. We Redirect with Google Search. Want to search With Google ?";
			echo "<button id='submitBtn' onclick='back()' style='text-decoration: none; color: white;' name='submit'> << Back </button>";
			echo "<button id='submitBtn' onclick='go()' style='text-decoration: none; color: white;' name='submit'> Go >></button>";
			$url1 = "www.google.co.in/#q=".$_POST['search'];
			echo "<script>
					go = function(){
    					<?php header('Location: $url1'); ?>
					}
					back = function(){
						<?php header('Location: index.php'); ?>
					}
				</script>";
			echo "</div>";