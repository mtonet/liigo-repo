<?php
//suprimentos editar

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$area2=$mysqli->real_escape_string(strip_tags(trim($_GET['area2'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='7' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//tecnologia (tbl_subcategoria equipamentos)
$listatec="SELECT id_cod,nome,id_categoria from tbl_subcategoria WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' ORDER BY nome asc";
$querytec=$mysqli->query($listatec);

//tipo supri
$listasupri="SELECT id_cod,id_categoria,nome,status from tbl_subcategoria WHERE id_categoria='21b2e6efe1400635f92d0320eed420a5' AND status='1' ORDER BY nome asc";
$querysupri=$mysqli->query($listasupri);


//dados usuario
$listauser="SELECT id,nome,id_cod,estado,cidade from tbl_usuarios WHERE id='".$dadosla['id']."'";
$queryuser=$mysqli->query($listauser);
$lineuser=$queryuser->fetch_array();

//dados
$listaanuncio="SELECT id_cod,id_user,titulo,preco,id_tecnologia,tecnologia,id_subcategoria,subcategoria,descricao,avatar from tbl_anuncio WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
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
header("Location: editar-anuncio-suprimentos?area=".$area."&action=d");
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
header("Location: editar-anuncio-suprimentos?area=".$area."&action=d");
}

?>