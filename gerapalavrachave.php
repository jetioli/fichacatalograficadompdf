<?php

require __DIR__."/vendor/autoload.php";
require __DIR__."/formulario.html";

//Daqui pra baixo teste Jefferson
/*
public $nome;
public $sobrenome;
public $titulo;
public $subtitulo;
public $local;
public $ano;
public $pagina;
public $sobrenomeorientador;
public $nomeorientador;
public $tipo;
public $monografia;
public $titulacao;
public $ProjetoDeIntervencao;
public $ArtigoCientifico;
public $GuiaCurricular;
public $palavra1;
public $palavra2;
public $palavra3;
public $palavra4;
public $palavra5;
*/

 function GetAName($nome, $sobrenome, $titulo, $subtitulo, $local, $ano, $pagina, $sobrenomeorientador, $nomeorientador,$tipo, $monografia, $titulacao, $ProjetoDeIntervencao, $ArtigoCientifico, $GuiaCurricular, $palavra1, $palavra2, $palavra3, $palavra4, $palavra5 ) {

    
    /*
    $this->nome = $nome;
    $this->sobrenome = $sobrenome;
    $this->titulo = $titulo;
    $this->subtitulo = $subtitulo;
    $this->local = $local;
    $this->ano = $ano;
    $this->pagina = $pagina;
    $this->sobrenomeorientador = $sobrenomeorientador;
    $this->nomeorientador = $nomeorientador;
    $this->tipo = $tipo;
    $this->monografia = $monografia;
    $this->titulacao = $titulacao;
    $this->ProjetoDeIntervencao = $ProjetoDeIntervencao;
    $this->ArtigoCientifico = $ArtigoCientifico;
    $this->GuiaCurricular = $GuiaCurricular;
    $this->palavra1 = $palavra1;
    $this->palavra2 = $palavra2;
    $this->palavra3 = $palavra3;
    $this->palavra4 = $palavra4;
    $this->palavra5 = $palavra5;

    $this->um = $um;
    $this->dois = $dois;
    $this->tres = $tres;
    $this->quatro = $quatro;
    $this->cinco = $cinco;

*/

    


    




  


}

//Função para mostrar as palavras-chave.

function Palavras($palavra1,$palavra2,$palavra3,$palavra4,$palavra5) {
   
    if (($palavra1 != NULL) and ($palavra2 != NULL) and ($palavra3 != NULL) and ($palavra4 != NULL)and ($palavra5 != NULL)) {
        $um = '1.'. $palavra1;
        $dois = '2.'. $palavra2;
        $tres = '3.' . $palavra3;
        $quatro = '4.'. $palavra4;
        $cinco = '5.'. $palavra5;
        return $um .$dois .$tres .$quatro .$cinco;
  
    }

elseif (($palavra1 != NULL) and ($palavra2 != NULL) and ($palavra3 != NULL) and ($palavra4 != NULL)) {
    $um = '1.'. $palavra1;
    $dois = '2.'. $palavra2;
    $tres = '3.' . $palavra3;
    $quatro = '4.'. $palavra4;
    return $um. $dois. $tres. $quatro;
  }

elseif (($palavra1 != NULL) and ($palavra2 != NULL) and ($palavra3 != NULL)) {
    $um = '1.'. $palavra1;
    $dois = '2.'. $palavra2;
    $tres = '3.' . $palavra3;
    return $um. $dois. $tres;
  }

elseif (($palavra1 != NULL) and ($palavra2 != NULL)) {
    $um = '1.'. $palavra1;
    $dois = '2.'. $palavra2;
    
    return $um. $dois;

}


elseif ($palavra1 != NULL) {

   $um = '1.'. $palavra1;
   return $um;
  }
  
    
        
        
      }
    



?>
