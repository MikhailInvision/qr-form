<?php
function prepare($str) 
{
  $str = trim($str);
  $str = stripslashes($str);
  $str = strip_tags($str);
  $str = htmlspecialchars($str);

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
function get_font_size($str)
{
  switch (mb_strlen($str))
  {
    case (mb_strlen($str) > 80): return "21"; break;
    case (mb_strlen($str) > 75): return "22"; break;
    case (mb_strlen($str) > 70): return "23"; break;
    case (mb_strlen($str) > 65): return "24"; break;
    case (mb_strlen($str) > 60): return "25"; break;
    case (mb_strlen($str) > 55): return "26"; break;
    case (mb_strlen($str) > 50): return "27"; break;
    default: return "28"; break;
  }
}
function get_font_size_for_print($str)
{
  switch (mb_strlen($str))
  {
    case (mb_strlen($str) > 75): return "11"; break;
    case (mb_strlen($str) > 65): return "12"; break;
    case (mb_strlen($str) > 55): return "13"; break;
    default: return "14"; break;
  }
}
?>