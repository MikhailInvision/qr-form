<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

if (empty($_SESSION))
{
	header('Location:/');
}

?>

<div class="big-container">
    <img class="picture" src="<?php echo ("invitations/_Conference pass " . $_SESSION['fName'] . ' ' . $_SESSION['lName'] . "_.jpg"); ?>">
</div>
<div class="big-container">
<div class="medium-container" style="z-index:99999;">
    <form style="display: flex; justify-content: center;">
        <a class="buttons margin-button" href="download.php?choose=pdf">Скачать PDF</a>
        <a class="buttons" href="download.php?choose=jpg" target="_blank">Скачать JPG</a>
    </form>
</div>
</div>  

</body>
</html>