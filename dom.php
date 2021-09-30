<?php

$page = '';

?>


<?php

require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($page);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper(array(0, 0, 1048, 733), 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("test");
/*
class pdf
{
	public $firstName;
	public $lastName;
	public $organization;
	public $specility;

	public function __construct()
    {
		$this->firstName = filter_input(INPUT_POST,'firstName',FILTER_SANITIZE_STRING);
		$this->lastName = filter_input(INPUT_POST,'lastName',FILTER_SANITIZE_STRING);
		$this->organization = filter_input(INPUT_POST,'organization',FILTER_SANITIZE_STRING);
		$this->specility = filter_input(INPUT_POST,'specility',FILTER_SANITIZE_STRING);
	}
}

die;
*/
?>