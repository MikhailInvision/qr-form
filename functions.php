<?php
function prepare($str) 
{
  $str = trim($str);
  $str = stripslashes($str);
  $str = strip_tags($str);
  $str = htmlspecialchars($str);
    
  if (mb_strlen($str) > 30)
  {
    $s1 = mb_substr($str, 0, 30);
    $s2 = mb_substr($str, 30);
    $str = $s1 . " " . $s2;
  }

  return $str;
}
function file_download($file) {
    if (file_exists($file)) {
      if (ob_get_level()) {
        ob_end_clean();
      }
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename=' . basename($file));
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file));
      readfile($file);
      exit;
    }
}
?>