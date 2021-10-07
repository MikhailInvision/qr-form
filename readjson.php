<?php
session_start();

require_once "functions.php";
$data = json_decode(file_get_contents('php://input'));

$fName = $data->firstName;
$lName = $data->lastName;
$organisation = $data->organisation;
$specility = $data->specility;
$_SESSION["date"] = date('d.m.Y'); 

$answer = ['result' => 'true', 'errors' => []];

if (!empty($fName))
{
	$fName = prepare($fName);
	$_SESSION["fName"] = $fName;
} else
	{
		$answer['result'] = false;
		$answer['errors']['firstName'] = 'Firstname error';
	} 

if (!empty($lName))
{
	$lName = prepare($lName);
	$_SESSION["lName"] = $lName;
} else 
	{
		$answer['result'] = false;
		$answer['errors']['lastName'] = 'Lastname error';
	}

if (!empty($organisation))
{
	$organisation = prepare($organisation);
	$_SESSION["organisation"] = $organisation;
} else
	{ 
		$answer['result'] = false;
		$answer['errors']['organization'] = 'Organization error';
	}
if (!empty($specility))
{
	$specility = prepare($specility);
	$_SESSION["specility"] = $specility;
} else
	{ 
		$answer['result'] = false;
		$answer['errors']['specility'] = 'Specility error';
	}

header('Content-Type: application/json');
echo json_encode($answer, true);

//header('Location: page.php');

?>