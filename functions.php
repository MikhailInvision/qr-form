<?php
function prepare($str) 
{
    $str = trim($str);
    $str = stripslashes($str);
    $str = strip_tags($str);
    $str = htmlspecialchars($str);
    
    return $str;
}

function parse($str)
{
	$idPos = strripos($str, '"identificator":');
	$fnPos = strripos($str, '"firstname":');
	$snPos = strripos($str, '"secondname":');
	$pnPos = strripos($str, '"position":');

	for ($i = $idPos + 16; $i < $fnPos; $i++)
	{
		if (($str[$i] == '"') && $fb != 1) 
		{
			$fbracket = $i; 
			$fb = 1;
		} else if (($str[$i] == '"') && $fb == 1) 
		{
			$sbracket = $i; break;
		} else 
		{
			$id[$j] = $str[$i];
			$j++;
		}
	}
	$arr["identificator"] = $id;
	$arr["firstname"] = 0;
	$arr["secondname"] = 1;

	return $arr;
}
?>