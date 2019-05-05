<?php
	$hostName = "localhost";
	$userName = "root";
	$passWord = "";
	$dbName = "cooking";

		$conn = mysqli_connect($hostName, $userName, $passWord, $dbName);
		if(!$conn)
		{
			echo "helloworld";
			//echo "<alert> An Error Occured Redirected to Home page.</alert>";
			//header(Refresh: 3; "index.php");
		}

?>