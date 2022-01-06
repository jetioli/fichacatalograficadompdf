<?php

use Dompdf\Dompdf;


require __DIR__."/vendor/autoload.php";
$dompdf = new Dompdf();
$dompdf->loadHtml();
//$dompdf-> setPaper(size: "A4", orientation: "landscape");

ob_start();
require __DIR__."/apresentacao.php";
$dompdf ->loadHtml (ob_get_clean());

$dompdf-> setPaper(size: "A4", orientation: "landscape");

$dompdf->render();
$dompdf->stream(filename: "file.pdf");

