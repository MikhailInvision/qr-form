<?php

include_once "functions.php";
$data = json_decode(file_get_contents('php://input'));
session_start();
$fName = $data->firstName;
$lName = $data->lastName;
$organisation = $data->organisation;
$specility = $data->specility;
$date = date('d.m.Y');

if (!empty($fName))
{
	$fName = prepare($fName);
	$_SESSION["fName"] = $fName;
} else
	{
		echo "incorrect firstName <br>";
	} 

if (!empty($lName))
{
	$lName = prepare($lName);
	$_SESSION["lName"] = $lName;
} else 
	{
		echo "incorrect lastname <br>";
	}

if (!empty($organisation))
{
	$organisation = prepare($organisation);
	$_SESSION["organisation"] = $organisation;
} else
	{ 
		echo "incorrect organisation <br>";
	}
if (!empty($specility))
{
	$specility = prepare($specility);
	$_SESSION["specility"] = $specility;
} else
	{ 
		echo "incorrect specility <br>";
	}

header('Location: page.php');

?>

<div>
	<p><?= $_SESSION["fName"] ?></p>
	<p><?= $_SESSION["lName"] ?></p>
	<p><?= $_SESSION["organisation"] ?></p>
	<p><?= $_SESSION["specility"] ?></p>
</div>