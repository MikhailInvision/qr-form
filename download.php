<?php

session_start();
require_once "functions.php";

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

?>