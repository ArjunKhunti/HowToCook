<html>
	<head> 
		<title> Mr.Cook </title>
		<link rel="stylesheet" type="text/css" href="HomeCSS.css">
			<style>
				.column {
					float: left;
		  			width: 30%;
		  			padding: 1%;
		  			height: 300px;
				}
				.row:after {
		  			content: "";
		  			display: table;
		  			clear: both;
				}
			</style>
	</head>
	<body>
		<?php require 'header.php'; ?>

		<div id="bgimage">
			<form id="myform" action="nextpage.php" method="post">
				<div class="row">
					<div class="column">	
						<div class="Ingr">
							<center style="  font-size: 20px; font-weight: bold;"> Vegetables </center><br>
							<input type="checkbox" name="ingredients[]" value="potato"> Potato <br>
							<input type="checkbox" name="ingredients[]" value="tomato"> Tomato <br>
							<input type="checkbox" name="ingredients[]" value="onion"> Onion <br>
							<input type="checkbox" name="ingredients[]" value="carrot"> Carrot <br>
							<input type="checkbox" name="ingredients[]" value="chili"> Chili <br>
							<input type="checkbox" name="ingredients[]" value="lemon"> Lemon <br>
							<input type="checkbox" name="ingredients[]" value="pumpkin"> Pumpkin <br>
							<input type="checkbox" name="ingredients[]" value="broccoli"> Broccoli <br>
							<input type="checkbox" name="ingredients[]" value="ginger"> Ginger <br>
							<input type="checkbox" name="ingredients[]" value="garlic"> Garlic <br>
						</div>
					</div>

					<div class="column">
						<div class="Ingr">
							<center style="  font-size: 20px; font-weight: bold;"> Liquid </center><br>
							<input type="checkbox" name="ingredients[]" value="milk"> Milk<br>
							<input type="checkbox" name="ingredients[]" value="honey"> Honey<br>
							<input type="checkbox" name="ingredients[]" value="butter"> Butter<br>
							<input type="checkbox" name="ingredients[]" value="chocolate"> Chocolate Cream<br>
							<input type="checkbox" name="ingredients[]" value="buttermilk"> Buttermilk<br>
							<input type="checkbox" name="ingredients[]" value="egg"> Egg<br>
							<input type="checkbox" name="ingredients[]" value="ghee"> Ghee <br>
							<input type="checkbox" name="ingredients[]" value="cheese"> Cheese <br>
							<input type="checkbox" name="ingredients[]" value="vinegar"> Vinegar <br>
							<input type="checkbox" name="ingredients[]" value="ketchup"> Ketchup <br>
						</div>
					</div>

					<div class="column">
						<div class="Ingr">
							<center style="  font-size: 20px; font-weight: bold;"> Fruit </center><br>
							<input type="checkbox" name="ingredients[]" value="apple"> Apple<br>
							<input type="checkbox" name="ingredients[]" value="banana"> Banana<br>
							<input type="checkbox" name="ingredients[]" value="blueberry"> Blueberry<br>
							<input type="checkbox" name="ingredients[]" value="cherry"> Cherry<br>
							<input type="checkbox" name="ingredients[]" value="grape"> Grape<br>
							<input type="checkbox" name="ingredients[]" value="mango"> Mango<br>
							<input type="checkbox" name="ingredients[]" value="orange"> Orange <br>
							<input type="checkbox" name="ingredients[]" value="pineapple"> Pineapple <br>
							<input type="checkbox" name="ingredients[]" value="pear"> Pear <br>
							<input type="checkbox" name="ingredients[]" value="strawberry"> Strawberry <br>
						</div>
					</div>
				</div>
			</form>	
			
			<center>
				<button id="submitBtn" onclick="return submitData()" style="text-decoration: none; color: white;" name="submit"> Submit </button>
			</center>
		</div>

		<script>
			submitData = function(){
    			var inputElems = document.getElementsByTagName("input");
    			count = 0;
    			for (var i=0; i<inputElems.length; i++) {
    				if (inputElems[i].type === "checkbox" && inputElems[i].checked === true){
        				count++;
    				}
				}

				if(count<3)
				{
					alert("Please Select atleast 3 Ingredients");
					return 0;	
				}
				else
				{
					return document.getElementById("myform").submit();
				}
			}
		</script>
	</body>
</html>