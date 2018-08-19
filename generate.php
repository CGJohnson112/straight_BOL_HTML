<?php
//prevent, if not submit
if(!isset($_POST['ship_name'])) dir();
$ship_name = $_POST['ship_name'];
$ship_addr = $_POST['ship_addr'];
$ship_city = $_POST['ship_city'];
$ship_state = $_POST['ship_state'];

$cons_name = $_POST['cons_name'];
$cons_addr = $_POST['cons_addr'];
$cons_city = $_POST['cons_city'];
$cons_state = $_POST['cons_state'];

$ship_date = $_POST['ship_date'];
$ship_reference = $_POST['ship_reference'];
$ship_PO = $_POST['ship_PO'];
$BOL = $_POST['BOL'];
$ship_due_date = $_POST['ship_due_date'];
$ship_carrier = $_POST['ship_carrier'];
$ship_carrier_npro = $_POST['ship_carrier_npro'];

$pieces = $_POST['pieces'];
$descrip = $_POST['descrip'];
$weight = $_POST['weight'];
$class = $_POST['class'];
$nmfc_no = $_POST['nmfc_no'];
$hz = $_POST['hz'];



//include template

ob_start();
require_once('pdf-template/welcome.php');
$template = ob_get_clean();


//include dompdf library
require_once('dompdf/autoload.inc.php');
use Dompdf\Dompdf;

//using pdf dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($template);

//set paper size
$dompdf->setPaper('A4', 'portrait');

//Render the html to pdf
$dompdf->render();

//output to browswer
$dompdf->stream('Faux_Ship_Co_BOL#-' .time());

//write pdf to directory
file_put_contents('pdfs/Faux_Ship_Co_BOL#-' .time().'.pdf', $dompdf->output());