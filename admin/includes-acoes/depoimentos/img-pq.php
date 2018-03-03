<?php
//---arquivo
$codfot=rand("1","1234567890");
$arquivoname="$codfot$arquivo01_nome";
copy($arquivo01_temporario, "../../../uploads/depoimentos/$arquivoname");
// Chama o arquivo com a classe WideImage  
require"../../includes-acoes/lib/WideImage.inc.php"; 
// Carrega a imagem a ser manipulada  
$image=wiImage::load("../../../uploads/depoimentos/$arquivoname"); 
// Redimensiona a imagem  
$image=$image->resize(70,70);  
// Salva a imagem em um arquivo (novo ou não)  
$avatar=str_replace(" ", "-",loCase(ascento(utf8_decode($nome)))).".jpg";
$image->saveToFile("../../../uploads/depoimentos/$avatar", null, 80);   
//----deleta a imagem original
unlink("../../../uploads/depoimentos/$arquivoname");
//---
?>