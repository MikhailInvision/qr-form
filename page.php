<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<?php

include_once "index.php";

?>

<div class="big-container">
	<div class="medium-container">
		<div class="small-container">
			<p>
				<?= $id ?>
			</p>
			<p>
				<?= $firstname ?>
			</p>
			<p>
				<?= $secondname ?>
			</p>
			<p>
				<?= $position ?>
			</p>
		</div>
	</div>
</div>


</body>
</html>