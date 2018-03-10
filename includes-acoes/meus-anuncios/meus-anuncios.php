<?php
//meus anuncios

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='20' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//perfil
$listadpu="SELECT nome,email,pass,avatar,id_cod FROM tbl_usuarios WHERE email='".$dadosla['email']."' AND pass='".$dadosla['pass']."'";
$querydpu=$mysqli->query($listadpu);
$linedpu=$querydpu->fetch_array();

//anuncios
$listaanunc="SELECT id_cod,id_user,titulo,preco,avatar,data,status,categoria FROM tbl_anuncio WHERE id_user='".$linedpu['id_cod']."' ORDER BY data desc";
$queryanunc=$mysqli->query($listaanunc);
$numanunc=$queryanunc->num_rows;


//deletar anuncio
if($action=="delete"){
$listad="SELECT id_cod,avatar,image from tbl_anuncio WHERE id_cod='".$area."'";
$queryd=$mysqli->query($listad);
$lined=$queryd->fetch_array();

//deletar avatar
if($lined['avatar']!=""){
unlink("uploads/anuncios/thumb/".$lined['avatar']."");
unlink("uploads/anuncios/".$lined['image']."");
}

//deleta galeria
$listad2="SELECT id_anuncio,avatar,image from tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$queryd2=$mysqli->query($listad2);
$numd2=$queryd2->num_rows;
if($numd2!=""){
while($lined2=$queryd2->fetch_array()){

unlink("uploads/anuncios/thumb/".$lined2['avatar']."");
unlink("uploads/anuncios/".$lined2['image']."");

//deleta
$sqld="DELETE FROM tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$queryd=$mysqli->query($sqld);

}
}

//deleta
$sqld2="DELETE FROM tbl_anuncio WHERE id_cod='".$area."'";
$queryd2=$mysqli->query($sqld2);

//direciona
header("Location: meus-anuncios");
}	

?>