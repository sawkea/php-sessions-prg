<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sessions</title>
	<!-- link boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		label {
			display: block;
			width: 400px;
		}
		form{
			width: 400px;
		}
	</style>
</head>
<body>

	<div class="container">
		<h1>Session</h1>
	
		<form action="./traitements/connection.php" method="POST">
			<div class="form-group">
				<label for="login">Login :</label>
				<input type="text" name="login" id="login" placeholder="test" class="form-control">
				<br>
		
				<label for="password">Password : </label>
				<input type="text" name="password" id="password" placeholder="test" class="form-control">
				<br>
		
				<div id="error"></div>
		
				<?php
					if (isset($_GET['error'])) {
						echo "la connection n a pas pu aboutir <br>";
					}
		
				?>
				<br>
				<input type="submit" value="se connecter" class="btn btn-primary">
			</div>
		</form>
	</div>
	<!-- link fontawesome -->
	<script src="https://kit.fontawesome.com/d5dcbc8efb.js" crossorigin="anonymous"></script>
	<!-- link bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>