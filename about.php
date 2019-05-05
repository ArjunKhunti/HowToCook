<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="HomeCSS.css">
	<style>
        .row {
            margin-top: 7%;
            margin-left: 5%; 
        }
		.column 
			{
				float: left;
  				width: 49%;
  				padding: 0.5%;
  				height: 500px;
  				background-color: #f1f1f1;
  				margin-top:  15px; 
			}
		.row:after 
			{
  				content: "";
  				display: table;
  				clear: both;
			}
		.name1
			{
			  font-size: 25px; 
			  font-style: bold ; 
			  text-align: center; 
			  font-style: italic; 
			  color:hsl(89, 100%, 10%); 
			}
		.img1
			{
				border-radius: 50%;
				border: 1px solid black;
                padding: 1%;
			}  
    </style>    
    </head>
    <body style="background-color: #f1f1f1">
	   <?php require 'header.php'; ?>

        <div class="container">
            <h1 align="center">Contact Form</h1>
            <form action="" align="center" id="resForm">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    <option value="india">India</option>
                    <option value="shriLanka">Shri Lanka</option>
                    <option value="russia">Russia</option>
                    <option value="japan">Japan</option>
                    <option value="uk">UK</option>
                </select>

                <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit" style="width: 100%;" onclick="subForm()">
            </form>
        </div> 
    	<div class="row" >

            <h1><center style="font-family: cursive;">:: Design and Developed By ::</center></h1><br>
    		<div class="column">
    			<div>
    			<center><img class="img1" src="abccc.png" width="30%" height="30%"></center><br><br>
    			<p class="name1"> Vaghasiya Parth R. </p><br>
    			<table style="font-family: Century Gothic; letter-spacing: 2px;">
    				<tr>
    					<td>ID No </td>
    					<td>: 16IT444</td>
    				</tr>
    				<tr>
    					<td>College </td>
    					<td>: Birla Vishvakarma Mahavidhyalaya</td>
    				</tr>	
    				<tr>
    					<td>Department </td>
    					<td>: IT</td>
    				</tr>
    				<tr>
    					<td>Email ID</td>
    					<td>: parthvaghasiya.1212@gmail.com</td>
    				</tr>
    				
    			</table>
    			</div>
    		</div>

    		<div class="column">
    			<div>
    			<center><img class="img1" src="abccc.png" width="30%" height="30%" ></center><br><br>
    			<p class="name1"> Khunti Arjun V. </p><br>
    			<table style="font-family: Century Gothic;letter-spacing: 2px;">
    				<tr>
    					<td>ID No </td>
    					<td>: 16IT450</td>
    				</tr>
    				<tr>
    					<td>College </td>
    					<td>: Birla Vishvakarma Mahavidhyalaya</td>
    				</tr>	
    				<tr>
    					<td>Department </td>
    					<td>: IT</td>
    				</tr>

    				<tr>
    					<td>Email ID</td>
    					<td>: khuntiarjun007@gmail.com</td>
    				</tr>
    			</table>
    			</div>
    		</div>
    	</div>

        <script>
            function subForm() {
                alert("Thank You!");
            }
        </script>

    </body>
</html>