<?php

//require_once 'dompdf/lib/html5lib/Parser.php';
// require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
// require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
//require 'vendor/autoload.php';
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$pdf = new pdf();
$pdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
$pdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$pdf->render();

// Output the generated PDF to Browser
$pdf->stream("test");

// class pdf
// {
// 	public $firstName;
// 	public $lastName;
// 	public $organization;
// 	public $specility;

// 	public function __construct()
//     {
// 		$this->firstName = filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_STRING);
// 		$this->lastName = filter_input(INPUT_POST,'lastName',FILTER_SANITIZE_STRING);
// 		$this->organization = filter_input(INPUT_POST,'organization',FILTER_SANITIZE_STRING);
// 		$this->specility = filter_input(INPUT_POST,'specility',FILTER_SANITIZE_STRING);
// 	}
// }

// die;
?>