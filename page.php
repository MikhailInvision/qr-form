<?php

require_once "readjson.php";

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo ('Пропуск на конференцию ' . $data->firstName . $data->lastName . $data->date); ?></title>
    <style>
        .big-container 
		{
			width: 100%;
			padding: 10px;
			display: flex;
			justify-content: center;
		}
		.medium-container 
		{
			display: flex;
			justify-content: center;
			max-width: 300px;
		}
		.small-container 
		{
			width: 600px;
			min-height: 400px;
			position: absolute;
			top: 75%;                         
		}
		.pic
		{
			display: flex;
			justify-content: center;
			width: auto;
		}
		.main-text
		{
			display: flex;
			justify-content: center;
			text-align: center;
			font-family: "tahoma";
			font-weight: 600;
			color: #2e2483;
			font-size: 25px;
			overflow-wrap: anywhere;
		}
    </style>
</head>
<body>

<div class="big-container">
	<img src="picture-1.png" class="pic" alt="">
		<div class="small-container" style="z-index:99999;">
			<p class="main-text">
				<?= $data->firstName ?>
			</p>
			<p class="main-text">
				<?= $data->lastName ?>
			</p>
			<p class="main-text">
				<?= $data->organisation ?>
			</p>
			<p class="main-text">
				<?= $data->specility ?>
			</p>
			<p class="main-text">
				<?= $data->date ?>
			</p>
		</div>
</div>


</body>
</html>