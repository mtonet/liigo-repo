<?php
//---
//retira ascento
//---
function ascento($string) {
$palavra = strtr($string, "¥µְֱֲֳִֵֶַָֹÊֻּֽ־ֿ׀ׁׂ׃װױײ״ÙÚÛÜÝßאבגדהוזחטיךכלםמןנסעףפץצרשתûü‎ÿ,()/", "SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy----");
$palavranova = str_replace("_", " ", $palavra);
return $palavranova; 
}
//minusculo
function loCase($string){
      $string = strtolower($string);
      $string = str_replace("ֲ","ג",$string);
      $string = str_replace("ֱ","ב",$string);
      $string = str_replace("A","a",$string);
      $string = str_replace("A","a",$string);
      $string = str_replace("E","e",$string);
      $string = str_replace("ֹ","י",$string);
      $string = str_replace("Ê","ך",$string);
      $string = str_replace("I","־",$string);
      $string = str_replace("ֽ","ם",$string);
      $string = str_replace("׃","ף",$string);
      $string = str_replace("O","o",$string);
      $string = str_replace("װ","פ",$string);
      $string = str_replace("Ú","ת",$string);
      $string = str_replace("U","u",$string);
      $string = str_replace("ַ","ח",$string);
      return ($string);
   }
?>