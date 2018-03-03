<?php
//---arquivo
$codfot=rand("1","1234567890");
$arquivoname="$codfot$arquivo01_nome";
copy($arquivo01_temporario, "../../../uploads/slide-home/$arquivoname");
// Chama o arquivo com a classe WideImage  
require"../../includes-acoes/lib/WideImage.inc.php"; 
// Carrega a imagem a ser manipulada  
$image=wiImage::load("../../../uploads/slide-home/$arquivoname"); 
$image2=wiImage::load("../../../uploads/slide-home/$arquivoname");
// Redimensiona a imagem  
$image=$image->resize(153,76);  
$image2=$image2->resize(1920,950);  
// Salva a imagem em um arquivo (novo ou não)  
$avatar="thumb-".$codfot.".jpg";
$avatar2=$codfot.".jpg";
$image->saveToFile("../../../uploads/slide-home/thumb/$avatar", null, 80);
$image2->saveToFile("../../../uploads/slide-home/$avatar2", null, 85);
//----deleta a imagem original
unlink("../../../uploads/slide-home/$arquivoname");
//---
?>