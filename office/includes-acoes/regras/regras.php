<?php

//retira ascento
function ascento($string) {
$palavra = strtr($string, "¥µΐΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΠΡÒΣΤΥΦΨΩΪΫάέίΰαβγδεζηθικλμνξοπρςστυφψωϊϋόύÿ,()/\'", "SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy------");
$palavranova = str_replace("_", " ", $palavra);
return $palavranova; 
}
//minusculo
function loCase($string){
      $string = strtolower($string);
      $string = str_replace("Β","β",$string);
      $string = str_replace("Α","α",$string);
      $string = str_replace("A","a",$string);
      $string = str_replace("A","a",$string);
      $string = str_replace("E","e",$string);
      $string = str_replace("Ι","ι",$string);
      $string = str_replace("Κ","κ",$string);
      $string = str_replace("I","Ξ",$string);
      $string = str_replace("Ν","ν",$string);
      $string = str_replace("Σ","σ",$string);
      $string = str_replace("O","o",$string);
      $string = str_replace("Τ","τ",$string);
      $string = str_replace("Ϊ","ϊ",$string);
      $string = str_replace("U","u",$string);
      $string = str_replace("Η","η",$string);
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
if ($seconds <= 60) return"1 min atrαs";
 else if ($minutes <= 60) return $minutes==1 ?'1 min atrαs':$minutes.' min atrαs';
 else if ($hours <= 24) return $hours==1 ?'1 hrs atrαs':$hours.' hrs atrαs';
 else if ($days <= 7) return $days==1 ?'1 dia atras':$days.' dias atrαs';
 else if ($weeks <= 4) return $weeks==1 ?'1 semana atrαs':$weeks.' semanas atrαs';
 else if ($months <= 12) return $months == 1 ?'1 mκs atrαs':$months.' meses atrαs';
 else return $years == 1 ? 'um ano atrαs':$years.' anos atrαs';
 }

?>