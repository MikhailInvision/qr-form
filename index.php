<?php

$str = file_get_contents('data.json');
$data = json_decode($str, true);

$id = $data["id"];
$firstname = $data["name"];
$secondname = $data["secondname"];
$position = $data["position"];



?>



<?php



?>