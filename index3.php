<?php

use Dompdf\Dompdf;


require __DIR__."/vendor/autoload.php";
$dompdf = new Dompdf();
///$dompdf->loadHtml();

ob_start();
require __DIR__."/apresentacao.php";
$pdf = ob_get_clean();
$dompdf->loadHtml(ob_get_clean());
echo $pdf;




$dompdf-> setPaper(size: "A4", orientation: "portrait");

$dompdf->render();
//$dompdf->stream(filename: "file.pdf", ["Attachment" => false]);


// saída
//header('Content-type: aplication/pdf');
//echo $dompdf -> output();



$dompdf->stream(filename: "file.pdf");


?>