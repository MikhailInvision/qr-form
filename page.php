<?php

session_start();
if (empty($_SESSION))
{
	//header('Location: index.php');
	$_SESSION['fName'] = 'First Name';
	$_SESSION['lName'] = 'Last Name';
	$_SESSION['organisation'] = 'Organization of Test';
	$_SESSION['specility'] = 'Doctor';
	$_SESSION['date'] = date('d:m:Y');
}

$page = `
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>'Пропуск на конференцию ' . $data->firstName . $data->lastName . $data->date</title>
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
			<p class="main-text"> ` . $_SESSION['fName'] . `</p>
			<p class="main-text">` . $_SESSION['lName'] . `</p>
			<p class="main-text">` . $_SESSION['organisation'] . `</p>
			<p class="main-text">` . $_SESSION['specility'] . `</p>
			<p class="main-text">` . $_SESSION['date'] . `</p>
		</div>
</div>

</body>
</html>`;

require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($page);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper(array(0, 0, 1048, 733), 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("test");
session_abort();
?>