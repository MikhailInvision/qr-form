<?php

session_start();
require_once "functions.php";

?>
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

if (empty($_SESSION))
{
	header('Location: index.php');
}

if ($_GET["choose"] == "jpg")
{
    file_download("invitations/_Conference pass " . $_SESSION['fName'] . " " . $_SESSION['lName'] . "_.jpg");
} else if ($_GET["choose"] == "pdf")
        {
            file_download("invitations/_Conference pass " . $_SESSION['fName'] . " " . $_SESSION['lName'] . "_.pdf");
        } else 
            {
                echo "<br>Что-то пошло не так, попробуйте снова<br>";
                echo "<br>Something went wrong, please try again<br>";
            }
session_unset();

?>
</body>
</html>