<?php

use Dompdf\Dompdf;


require __DIR__."/vendor/autoload.php";
$dompdf = new Dompdf();
$dompdf->loadHtml("<h1>Olá mundo</h1>");
$dompdf-> setPaper(size: "A4", orientation: "landscape");

$dompdf->render();
$dompdf->stream(filename: "file.pdf");