<?php
//---
//retira ascento
//---
function ascento($string) {
$palavra = strtr($string, "���������������������������������������������������������������������,()/", "SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy----");
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
?>