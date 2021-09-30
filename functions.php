<?php
function prepare($str) 
{
    $str = trim($str);
    $str = stripslashes($str);
    $str = strip_tags($str);
    $str = htmlspecialchars($str);
    
    return $str;
}

?>