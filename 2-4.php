<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h3>
		<?php 
			echo "고양이와 토끼";
		?>		
	</h3>

	<?php
		$filename = "cat.jpg";
		echo "<img src = '$filename'>";
		echo "<br>";

		$filename = "rabit.jpg";
		echo "<img src = '$filename'>";
	?>
</body>
</html>
