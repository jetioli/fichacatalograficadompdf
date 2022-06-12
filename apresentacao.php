
<?php

require __DIR__."/vendor/autoload.php";

$nome = $_POST ["nome"]; 
$sobrenome = $_POST ["sobrenome"]; 
$titulo = $_POST ["titulo"];
$subtitulo = $_POST ["subtitulo"]; 
$local = $_POST ["local"]; 
$ano = $_POST ["ano"]; 
$pagina = $_POST ["pagina"]; 
$sobrenomeorientador = $_POST ["sobrenomeorientador"]; 
$nomeorientador = $_POST ["nomeorientador"]; 
$tipo = $_POST ["tipo"]; 
$titulacao = $_POST ["titulacao"];
$palavra1 = $_POST ["palavra1"]; 
$palavra2 = $_POST ["palavra2"]; 
$palavra3 = $_POST ["palavra3"]; 
$palavra4 = $_POST ["palavra4"]; 
$palavra5 = $_POST ["palavra5"]; 


//Função para mostrar as palavras-chave.

function Palavras($palavra1,$palavra2,$palavra3,$palavra4,$palavra5) {
   
      if (($palavra1 != NULL) and ($palavra2 != NULL) and ($palavra3 != NULL) and ($palavra4 != NULL)and ($palavra5 != NULL)) {
          $um = ' 1. '. $palavra1.'.';
          $dois = ' 2. '. $palavra2.'.';
          $tres = ' 3. ' . $palavra3.'.';
          $quatro = ' 4. '. $palavra4.'.';
          $cinco = ' 5. '. $palavra5.'.';
          return $um .$dois .$tres .$quatro .$cinco;
    
      }
  
  elseif (($palavra1 != NULL) and ($palavra2 != NULL) and ($palavra3 != NULL) and ($palavra4 != NULL)) {
      $um = ' 1. '. $palavra1;
      $dois = ' 2. '. $palavra2;
      $tres = ' 3. ' . $palavra3;
      $quatro = ' 4. '. $palavra4;
      return $um. $dois. $tres. $quatro;
    }
  
  elseif (($palavra1 != NULL) and ($palavra2 != NULL) and ($palavra3 != NULL)) {
      $um = ' 1. '. $palavra1;
      $dois = ' 2. '. $palavra2;
      $tres = ' 3. ' . $palavra3;
      return $um. $dois. $tres;
    }
  
  elseif (($palavra1 != NULL) and ($palavra2 != NULL)) {
      $um = ' 1. '. $palavra1;
      $dois = ' 2. '. $palavra2;
      
      return $um. $dois;
  
  }
  
  
  elseif ($palavra1 != NULL) {
  
     $um = ' 1. '. $palavra1;
     return $um;
    }
    
      
          
          
        }
      
  
$palavras = Palavras($palavra1,$palavra2,$palavra3,$palavra4,$palavra5);

?>


<html>


<head>
Ficha Catalográfica gerada automaticamente.
</head>


<body>




<table border="1">
<tr>

<td>



<?php






   echo 
  
   ("$sobrenome, $nome. <br/> 
   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$titulo. /$nome $sobrenome. - Belo Horizonte: ESP-MG, $ano.<br/>
   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$pagina f. <br/>
   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Orientador(a):$nomeorientador $sobrenomeorientador.<br/>
   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$tipo (Especialização) em $titulacao.<br/>
   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inclui bibliografia.<br/>
   
     
   <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $palavras. I. $sobrenomeorientador, $nomeorientador. II. Escola de Saúde Pública do Estado de Minas Gerais. III. Título");
     

    
    ?>

</td>
</tr>
   
   </table>  


      </body>




</html>


    