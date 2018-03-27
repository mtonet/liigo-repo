<?php
//dados anunciante

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$area2=$mysqli->real_escape_string(strip_tags(trim($_GET['area2'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));


$lista="SELECT * from tbl_usuarios WHERE id_cod='".$area."'";
$query=$mysqli->query($lista);
$line=$query->fetch_array();


####
//deletar registro 
if($action=="delete"){
$listad="SELECT id_cod,avatar,image from tbl_usuarios WHERE id_cod='".$area."'";
$queryd=$mysqli->query($listad);
$lined=$queryd->fetch_array();
//deletar avatar
if($lined['avatar']!=""){
unlink("../../../uploads/usuarios/".$lined['avatar']."");
}
//deletar anuncios
$listad="SELECT id_cod,avatar,image,id_user from tbl_anuncio WHERE id_user='".$area."'";
$queryd=$mysqli->query($listad);
$lined=$queryd->fetch_array();
//deletar avatar
if($lined['avatar']!=""){
unlink("../../../uploads/anuncios/thumb/".$lined['avatar']."");
unlink("../../../uploads/anuncios/".$lined['image']."");
}
//deleta galeria
$listad2="SELECT id_anuncio,avatar,image from tbl_anuncio_galeria WHERE id_anuncio='".$lined['id_cod']."'";
$queryd2=$mysqli->query($listad2);
$numd2=$queryd2->num_rows;
if($numd2!=""){
while($lined2=$queryd2->fetch_array()){
unlink("../../../uploads/anuncios/thumb/".$lined2['avatar']."");
unlink("../../../uploads/anuncios/".$lined2['image']."");
//deleta
$sqld="DELETE FROM tbl_anuncio_galeria WHERE id_anuncio='".$lined['id_cod']."'";
$queryd=$mysqli->query($sqld);
}
}
//deleta anuncios
$listad3="SELECT id_cod,id_user from tbl_anuncio WHERE id_user='".$area."'";
$queryd3=$mysqli->query($listad3);
$numd3=$queryd3->num_rows;
if($numd3!=""){
while($lined3=$queryd3->fetch_array()){
$sqld33="DELETE FROM tbl_anuncio WHERE id_user='".$area."'";
$queryd33=$mysqli->query($sqld33);
}
}
//deleta
$sqld="DELETE FROM tbl_usuarios WHERE id_cod='".$area."'";
$queryd=$mysqli->query($sqld);
//direciona
header("Location: index.php");
}	

###
//lista anuncios
$listaanu="SELECT id_cod,id_user,titulo,status,data from tbl_anuncio WHERE id_user='".$area."' ORDER BY data desc";
$queryanu=$mysqli->query($listaanu);

###
//deletar anuncio do usuario
if($action=="delete2"){
$listad4="SELECT id_cod,id_user,avatar,image from tbl_anuncio WHERE id_cod='".$area2."' AND id_user='".$area."'";
$queryd4=$mysqli->query($listad4);
$lined4=$queryd4->fetch_array();
//deletar avatar
if($lined4['avatar']!=""){
unlink("../../../uploads/anuncios/thumb/".$lined4['avatar']."");
unlink("../../../uploads/anuncios/".$lined4['image']."");
}
//deleta galeria
$listad2="SELECT id_anuncio,avatar,image from tbl_anuncio_galeria WHERE id_anuncio='".$area2."'";
$queryd2=$mysqli->query($listad2);
$numd2=$queryd2->num_rows;
if($numd2!=""){
while($lined2=$queryd2->fetch_array()){
unlink("../../../uploads/anuncios/thumb/".$lined2['avatar']."");
unlink("../../../uploads/anuncios/".$lined2['image']."");
//deleta
$sqld="DELETE FROM tbl_anuncio_galeria WHERE id_anuncio='".$area2."'";
$queryd=$mysqli->query($sqld);
}
}
$sqld="DELETE FROM tbl_anuncio WHERE id_cod='".$area2."' AND id_user='".$area."'";
$queryd=$mysqli->query($sqld);
//direciona
header("Location: ?area=".$area."");
}
?>