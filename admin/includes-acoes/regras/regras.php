<?php

//retira ascento
function ascento($string) {
$palavra = strtr($string, "���������������������������������������������������������������������,()/\'", "SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy------");
$palavranova = str_replace("_", " ", $palavra);
return $palavranova; 
}
//minusculo
function loCase($string){
      $string = strtolower($string);
      $string = str_replace("�","�",$string);
      $string = str_replace("�","�",$string);
      $string = str_replace("A","a",$string);
      $string = str_replace("A","a",$string);
      $string = str_replace("E","e",$string);
      $string = str_replace("�","�",$string);
      $string = str_replace("�","�",$string);
      $string = str_replace("I","�",$string);
      $string = str_replace("�","�",$string);
      $string = str_replace("�","�",$string);
      $string = str_replace("O","o",$string);
      $string = str_replace("�","�",$string);
      $string = str_replace("�","�",$string);
      $string = str_replace("U","u",$string);
      $string = str_replace("�","�",$string);
      return ($string);
   }


//tempo corrido
function tempo_corrido($time) {
$now = strtotime(date('m/d/Y H:i:s'));
 $time = strtotime($time);
 $diff = $now - $time;
$seconds = $diff;
 $minutes = round($diff / 60);
 $hours = round($diff / 3600);
 $days = round($diff / 86400);
 $weeks = round($diff / 604800);
 $months = round($diff / 2419200);
 $years = round($diff / 29030400);
if ($seconds <= 60) return"1 min atr�s";
 else if ($minutes <= 60) return $minutes==1 ?'1 min atr�s':$minutes.' min atr�s';
 else if ($hours <= 24) return $hours==1 ?'1 hrs atr�s':$hours.' hrs atr�s';
 else if ($days <= 7) return $days==1 ?'1 dia atras':$days.' dias atr�s';
 else if ($weeks <= 4) return $weeks==1 ?'1 semana atr�s':$weeks.' semanas atr�s';
 else if ($months <= 12) return $months == 1 ?'1 m�s atr�s':$months.' meses atr�s';
 else return $years == 1 ? 'um ano atr�s':$years.' anos atr�s';
 }

?>