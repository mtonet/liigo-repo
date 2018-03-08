<?php
//---arquivo
$codfot=rand("1","1234567890");
$arquivoname="$codfot$arquivo01_nome";
copy($arquivo01_temporario, "uploads/usuarios/$arquivoname");
// Chama o arquivo com a classe WideImage  
require"admin/includes-acoes/lib/WideImage.inc.php"; 
// Carrega a imagem a ser manipulada  
$image=wiImage::load("uploads/usuarios/$arquivoname"); 
// Redimensiona a imagem  
$image=$image->resize(220, 220, 'outside')->crop('center', 'center', 220, 220); 

// Salva a imagem em um arquivo (novo ou não)  
$avatar=$codfot.".jpg";
$image->saveToFile("uploads/usuarios/$avatar", null, 80);
//----deleta a imagem original
unlink("uploads/usuarios/$arquivoname");
//---
?>