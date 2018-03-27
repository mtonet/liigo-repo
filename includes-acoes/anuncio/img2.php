<?php
//---arquivo
$codfot=rand("1","1234567890");
$arquivoname2="$codfot$operacao";
copy($operacao2, "uploads/anuncios/$arquivoname2");
// Chama o arquivo com a classe WideImage  
require"office/includes-acoes/lib/WideImage.inc.php"; 
// Carrega a imagem a ser manipulada  
$image3=wiImage::load("uploads/anuncios/$arquivoname2"); 
$image4=wiImage::load("uploads/anuncios/$arquivoname2");
// Redimensiona a imagem  
$image3=$image3->resize(175, 120, 'outside')->crop('center', 'center', 175, 120);
$image4=$image4->resize(750, 492, 'outside')->crop('center', 'center', 750, 492);  
// Salva a imagem em um arquivo (novo ou não)  
if($ii<=1){
$avatar3="thumb-".$codfot."-".str_replace(" ", "-",loCase(ascento(utf8_decode($titulo)))).".jpg";
$avatar4=$codfot."-".str_replace(" ", "-",loCase(ascento(utf8_decode($titulo)))).".jpg";
}elseif($ii>1){
$avatar3="thumb-".$codfot."-".str_replace(" ", "-",loCase(ascento(utf8_decode($titulo))))."-".$ii.".jpg";
$avatar4=$codfot."-".str_replace(" ", "-",loCase(ascento(utf8_decode($titulo))))."-".$ii.".jpg";
}
$image3->saveToFile("uploads/anuncios/thumb/$avatar3");  
$image4->saveToFile("uploads/anuncios/$avatar4");  
//----deleta a imagem original
unlink("uploads/anuncios/$arquivoname2");
//---
?>