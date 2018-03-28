<?php
//equipamentos editar

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$area2=$mysqli->real_escape_string(strip_tags(trim($_GET['area2'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='5' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//marca
$listamarc="SELECT id_cod,nome from tbl_marca ORDER BY nome asc";
$querymarc=$mysqli->query($listamarc);

//cabeça impressao
$listacab="SELECT id_cod,nome from tbl_cabeca_impressao ORDER BY nome asc";
$querycab=$mysqli->query($listacab);

//tecnologia (tbl_subcategoria equipamentos)
$listatec="SELECT id_cod,nome,id_categoria from tbl_subcategoria WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' ORDER BY nome asc";
$querytec=$mysqli->query($listatec);

//condicao
$listacond="SELECT id_cod,nome from tbl_condicao_equipamento ORDER BY nome asc";
$querycond=$mysqli->query($listacond);

//dados usuario
$listauser="SELECT id,nome,id_cod,estado,cidade from tbl_usuarios WHERE id='".$dadosla['id']."'";
$queryuser=$mysqli->query($listauser);
$lineuser=$queryuser->fetch_array();

//dados
$listaanuncio="SELECT id_cod,id_user,titulo,preco,id_subcategoria,subcategoria,id_marca,marca,id_cabeca_impressao,cabeca_impressao,id_condicao,condicao,descricao,avatar from tbl_anuncio WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
$queryanuncio=$mysqli->query($listaanuncio);
$lineanuncio=$queryanuncio->fetch_array();

//galeria
$listagaleria="SELECT id_cod,id_anuncio,avatar from tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$querygaleria=$mysqli->query($listagaleria);

//deletar imagem principal
if($action=="deletep"){
$_SESSION['images']='ativo';//sessão para imagem
unlink("uploads/anuncios/thumb/".$line['avatar']."");
unlink("uploads/anuncios/".$line['image']."");
$cadast="UPDATE tbl_anuncio SET avatar='',image='' WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
$query=$mysqli->query($cadast);
//direciona
header("Location: editar-anuncio-equipamentos?area=".$area."&action=d");
}

//deletar imagem galeria
if($action=="deleteg"){
$_SESSION['images']='ativo';//sessão para imagem
$lista3="SELECT * FROM tbl_anuncio_galeria WHERE id_cod='".$area2."'";
$query3=$mysqli->query($lista3);
$line3=$query3->fetch_array();
unlink("uploads/anuncios/thumb/".$line3['avatar']."");
unlink("uploads/anuncios/".$line3['image']."");
$cadast="DELETE FROM tbl_anuncio_galeria WHERE id_cod='".$area2."'";
$query=$mysqli->query($cadast);
//direciona
header("Location: editar-anuncio-equipamentos?area=".$area."&action=d");
}

?>