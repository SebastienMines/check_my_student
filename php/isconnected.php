<!DOCTYPE html>
<html lang="en">
<head>
  <title>Is Connected</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<?php
  		include 'functions.php';
  	?>
	<?php
	if($is_connected){
		echo "<p>Vous êtes connecté.</p>";
	}
	else{
		echo "<p>Vous n'êtes pas connecté.</p>";
	}
	?>

</body>
</html>
