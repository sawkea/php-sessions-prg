<?php;
	require(dirname(__FILE__).DIRECTORY_SEPARATOR."function.php");

	session_start();
	is_connected();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Session</title>
		<!-- link boostrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<style>
		p {
			text-align: right;
		}
		.fa-power-off{
			font-size: 2rem;
		}
	</style>
	<body>
		<div class="container mt-5">
			<p>
			<a href="./deconnection.php"><span class="fas fa-power-off"></span></a>
			</p>
	
			<h1>Mon interface de Gestion</h1>
			<p class="text-left mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus autem ullam delectus dolorum fuga? Quis, ratione debitis id, maxime incidunt aut pariatur asperiores et deserunt fugit excepturi, dolor blanditiis magni.</p>
			<p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugiat, dolor aperiam accusamus eius necessitatibus culpa aliquid assumenda asperiores dolores in ullam officia eveniet similique atque numquam tempore quam nemo.</p>
			<p class="text-left">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa at architecto laboriosam aut assumenda dicta, porro aperiam voluptates mollitia error quidem molestias modi atque amet ipsum dolor, quaerat ea nobis!</p>
		</div>

	<!-- link fontawesome -->
	<script src="https://kit.fontawesome.com/d5dcbc8efb.js" crossorigin="anonymous"></script>
	<!-- link bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
