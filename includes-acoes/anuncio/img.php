<?php
//---arquivo
$codfot=rand("1","1234567890");
$arquivoname="$codfot$arquivo01_nome";
copy($arquivo01_temporario, "uploads/anuncios/$arquivoname");
// Chama o arquivo com a classe WideImage  
require"admin/includes-acoes/lib/WideImage.inc.php"; 
// Carrega a imagem a ser manipulada  
$image=wiImage::load("uploads/anuncios/$arquivoname"); 
$image2=wiImage::load("uploads/anuncios/$arquivoname");
// Redimensiona a imagem  
$image=$image->resize(175, 120, 'outside')->crop('center', 'center', 175, 120); 
$image2=$image2->resize(750, 492, 'outside')->crop('center', 'center', 750, 492);

// Salva a imagem em um arquivo (novo ou não)  
$avatar="thumb-".$codfot."-".str_replace(" ", "-",loCase(ascento(utf8_decode($titulo)))).".jpg";
$avatar2=$codfot."-".str_replace(" ", "-",loCase(ascento(utf8_decode($titulo)))).".jpg";
$image->saveToFile("uploads/anuncios/thumb/$avatar", null, 80);
$image2->saveToFile("uploads/anuncios/$avatar2", null, 85);
//----deleta a imagem original
unlink("uploads/anuncios/$arquivoname");
//---
?>