<html>
	<body>
		<form method="POST" action="">
			<center>
				<button id="submitBtn" onclick="back()" style="text-decoration: none; color: white;" name="back"> << Back </button>
				<button id="submitBtn" onclick="go()" style="text-decoration: none; color: white;" name="go"> Go >> </button>
			</center>
		</form>
		<script>
			back = function(){
    			<?php header("Location: index.php"); ?>
    		}
    		go = function(){
    			<?php header("Location: $url1"); ?>
    		}
		</script>
	</body>
</html>