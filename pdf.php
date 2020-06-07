<?php
require_once('tcpdf/tcpdf.php');
require_once('pdo.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('A.Karthikeyan');
$pdf->SetTitle('Bill');
$pdf->SetSubject('asd');
$pdf->SetKeywords('TCPDF, PDF, item, Quantity, Total');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,'VGK INDUSTRIES', 'Tamilnadu,Madurai');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}
$n="asd";  
// add a page
date_default_timezone_set("Asia/Kolkata");
$pdf->AddPage();
$html='<p style="text-align:center;" color="#03fcc2">Payment Bill</p><br><p><span>Date and Time:</span><span style="color:blue;float:right;">'.date("l /jS \of F Y / h:i:sa").'</span></p><span color="blue">SHIP TO:</span>';
// $stmt1 = $pdo->query("SELECT Username, Phone, Address FROM order1 where Username = '$n'");
// $stmt1->execute(array(':em' => $n));
// $rows = $stmt1->fetchAll(PDO::FETCH_ASSOC);
// foreach($rows as $row){
$us1=$_COOKIE['us1'];
$html.='<br><span style=padding:4%;>    '.$us1.',</span><br><span>    '.htmlentities($_COOKIE['em1']).'</span>,
    <br><span>   '.htmlentities($_COOKIE['ad1']).',</span><br><span>    '.htmlentities($_COOKIE['ph1']).'.</span><br><br>';
// }
// $stmt = $pdo->query("SELECT Item, Quantity, Total FROM fooditems where Username = '$n'");
// $stmt->execute(array(':em' => $n));
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        static $i=1;
    $html.='<table cellpadding="2" cellspacing="2" border="1" style="text-align:center";>';
    if($i==1){
    $html.='<tr><th><span color="blue">S.no.</span>
     </th><th><span color="blue">Item</span>
     </th><th><span color="blue">Quantity</span>
     </th><th><span color="blue">Total</span></th></tr>';
        $i=0;
    }
$row=0;
if(isset($_COOKIE['h1']) && isset($_COOKIE['t1']) && isset($_COOKIE['item'])){
    $h1=$_COOKIE['h1'];
    $h=explode(",", $h1);
    $t2=$_COOKIE['t1'];
    $t1 = explode(",", $t2);  
    $it1=$_COOKIE['item'];
    $it = explode(",", $it1);
    for($i=0;$t1[$i]!=null;$i++){
       if($t1[$i]!=0){
        static $j=1;
    $html.='<tr><td>'.$j.'</td>
    <td>'.htmlentities($i1=$it[$i]).'</td>
    <td>'.htmlentities($i2=$h[$i]).'</td>
    <td>'.htmlentities($i3=$t1[$i]).'</td></tr>';
    $j++;
        $row=true;
      }
      }
    }
// foreach ( $rows as $row ) {
//     //  static $j=1;
//     // $html.='<tr><td>'.$j.'</td>
//     // <td>'.htmlentities($row['Item']).'</td>
//     // <td>'.htmlentities($row['Quantity']).'</td>
//     // <td>'.htmlentities($row['Total']).'</td></tr>';
//     // $j++;
//     }
$total= $_COOKIE['total'];
$qtotal= $_COOKIE['qtotal'];
    $html.='<tr style="color:blue;"><td></td><td>Total</td><td>'.$qtotal.'</td><td>'.$total.'</td></tr></table><br><br><p>Time of Delivery: '.date("h:i a", strtotime('+1 hour')).'</p><br><p style="text-align:center;">Thank you !!!!</p><br><p style="text-align:center;">Have a nice day</p>';

$pdf->SetFillColor(255,255,0);
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Print some HTML Cells

$pdf->SetFillColor(255,255,0);


// reset pointer to the last page
$pdf->lastPage();

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

//Close and output PDF document
$pdf->Output('bill.pdf', 'I');
