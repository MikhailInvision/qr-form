<?php

session_start();
require_once "functions.php";

if (empty($_SESSION))
{
	header('Location:/');
}

if ($_GET["choose"] == "jpg")
{
    
    //Создание jpg файла

    $pdf = "invitations/_Conference pass " . $_SESSION['fName'] . " " . $_SESSION['lName'] . "_.pdf"; 
    $save = "invitations/_Conference pass " . $_SESSION['fName'] . " " . $_SESSION['lName'] . "_.jpg"; 
    exec('convert -density 200 "'.$pdf.'" -colorspace RGB -resize 367 "'.$save.'"', $output, $return_var);
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