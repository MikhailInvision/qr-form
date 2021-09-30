<?php

include_once "functions.php";

// $json = file_get_contents('data.json');
// $data = json_decode($json, true);

$str = '{"firstName": "verylongfirstnamefortestingverylongfirstnamefortesting", "lastName": "verylonglastnamefortestingverylonglastnamefortesting", "organisation": "INVISION", "specility": "Doctor"}';

$data = json_decode($str);

$firstName = $data->firstName;
$lastName = $data->lastName;
$organisation = $data->organisation;
$specility = $data->specility;
$date = date('d.m.Y');

if (!empty($firstName))
{
	$firstName = prepare($firstname);
} else echo "incorrect firstName";

if (!empty($lastName))
{
	$lastName = prepare($lastName);
} else echo "incorrect lastname";

if (!empty($organisation))
{
	$organisation = prepare($organisation);
} else echo "incorrect organisation";

if (!empty($specility))
{
	$specility = prepare($specility);
} else echo "incorrect specility";

?>
