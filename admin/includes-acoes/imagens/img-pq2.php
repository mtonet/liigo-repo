<?php
//---arquivo
$codfot=rand("1","1234567890");
$arquivoname="$codfot$arquivo01_nome";
copy($arquivo01_temporario, "../../../uploads/paginas-internas/$arquivoname");
// Chama o arquivo com a classe WideImage  
require"../../includes-acoes/lib/WideImage.inc.php"; 
// Carrega a imagem a ser manipulada  
$image=wiImage::load("../../../uploads/paginas-internas/$arquivoname"); 
$image2=wiImage::load("../../../uploads/paginas-internas/$arquivoname");
// Redimensiona a imagem  
$image=$image->resize(281,28);  
$image2=$image2->resize(1920,250);  
// Salva a imagem em um arquivo (novo ou não)  
$avatar="thumb-".$codfot.".jpg";
$avatar2=$codfot.".jpg";
$image->saveToFile("../../../uploads/paginas-internas/thumb/$avatar", null, 80);
$image2->saveToFile("../../../uploads/paginas-internas/$avatar2", null, 85);
//----deleta a imagem original
unlink("../../../uploads/paginas-internas/$arquivoname");
//---
?>