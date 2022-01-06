<?php


 
use Dompdf\Dompdf;

require __DIR__."/vendor/autoload.php";





//require __DIR__."/vendor/autoload.php";

/*$dompdf->loadHtml("<h1>$sobrenome, $nome.
$titulo. /$nome $sobrenome. - Belo Horizonte: ESP-MG, $ano. 
$pagina f. 
Orientador(a): $nomeorientador, $sobrenomeorientador.
$tipo (Especialização) em $titulacao. 
Inclui bibliografia.

$palavras
I. $sobrenomeorientador, $nomeorientador. II. Escola de Saúde Pública do Estado de Minas Gerais. III. Título);
</h1>");
*/
//$dompdf->loadHtml("<h1>Olá mundo</h1>");
$dompdf = new Dompdf();
ob_start();
require __DIR__."/apresentacao.php";
$dompdf ->loadHtml (ob_get_clean());

$dompdf-> setPaper(size: "A4");

$dompdf->render();
$dompdf->stream(filename: "file.pdf");