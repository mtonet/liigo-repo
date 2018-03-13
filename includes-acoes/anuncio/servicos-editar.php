<?php
//servicos editar

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$area2=$mysqli->real_escape_string(strip_tags(trim($_GET['area2'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='6' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//servicos
$listaserv="SELECT id_cod,nome,status from tbl_subcategoria WHERE id_categoria='318b9cddcea5ebcb2c1171fe1cf277db' AND status='1' ORDER BY nome asc";
$queryserv=$mysqli->query($listaserv);


//dados usuario
$listauser="SELECT id,nome,id_cod,estado,cidade from tbl_usuarios WHERE id='".$dadosla['id']."'";
$queryuser=$mysqli->query($listauser);
$lineuser=$queryuser->fetch_array();

//dados
$listaanuncio="SELECT id_cod,id_user,titulo,preco,id_subcategoria,subcategoria,descricao,avatar from tbl_anuncio WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
$queryanuncio=$mysqli->query($listaanuncio);
$lineanuncio=$queryanuncio->fetch_array();

//galeria
$listagaleria="SELECT id_cod,id_anuncio,avatar from tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$querygaleria=$mysqli->query($listagaleria);

//deletar imagem principal
if($action=="deletep"){
unlink("uploads/anuncios/thumb/".$line['avatar']."");
unlink("uploads/anuncios/".$line['image']."");
$cadast="UPDATE tbl_anuncio SET avatar='',image='' WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
$query=$mysqli->query($cadast);
//direciona
header("Location: editar-anuncio-servicos-enviado?area=".$area."");
}

//deletar imagem galeria
if($action=="deleteg"){
$lista3="SELECT * FROM tbl_anuncio_galeria WHERE id_cod='".$area2."'";
$query3=$mysqli->query($lista3);
$line3=$query3->fetch_array();
unlink("uploads/anuncios/thumb/".$line3['avatar']."");
unlink("uploads/anuncios/".$line3['image']."");
$cadast="DELETE FROM tbl_anuncio_galeria WHERE id_cod='".$area2."'";
$query=$mysqli->query($cadast);
//direciona
header("Location: editar-anuncio-servicos-enviado?area=".$area."");
}


?>