<?php
//anuncios pendentes detalhes

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$area2=$mysqli->real_escape_string(strip_tags(trim($_GET['area2'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));

//dados
$lista="SELECT * FROM tbl_anuncio WHERE id_cod='".$area."'";
$query=$mysqli->query($lista);
$line=$query->fetch_array();

//galeria
$lista2="SELECT * FROM tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$query2=$mysqli->query($lista2);
$linha2=$query2->num_rows;

//deletar imagem principal
if($action=="deletep"){
unlink("../../../uploads/anuncios/thumb/".$line['avatar']."");
unlink("../../../uploads/anuncios/".$line['image']."");
$cadast="UPDATE tbl_anuncio SET avatar='',image='' WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);
//direciona
header("Location: anuncio-detalhe.php?area=".$area."");
}


//deletar imagem galeria
if($action=="deleteg"){
$lista3="SELECT * FROM tbl_anuncio_galeria WHERE id_cod='".$area2."'";
$query3=$mysqli->query($lista3);
$line3=$query3->fetch_array();
unlink("../../../uploads/anuncios/thumb/".$line3['avatar']."");
unlink("../../../uploads/anuncios/".$line3['image']."");
$cadast="DELETE FROM tbl_anuncio_galeria WHERE id_cod='".$area2."'";
$query=$mysqli->query($cadast);
//direciona
header("Location: anuncio-detalhe.php?area=".$area."");
}


//aprovar
if($action=="aprovar"){
$cadast="UPDATE tbl_anuncio SET status='1' WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);
//direciona
header("Location: anuncio-detalhe.php?area=".$area."");
}


//deletar registro
if($action=="delete"){
$listad="SELECT id_cod,avatar,image from tbl_anuncio WHERE id_cod='".$area."'";
$queryd=$mysqli->query($listad);
$lined=$queryd->fetch_array();
//deletar avatar
if($lined['avatar']!=""){
unlink("../../../uploads/anuncios/thumb/".$lined['avatar']."");
unlink("../../../uploads/anuncios/".$lined['image']."");
}
//deleta galeria
$listad2="SELECT id_anuncio,avatar,image from tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$queryd2=$mysqli->query($listad2);
$numd2=$queryd2->num_rows;
if($numd2!=""){
while($lined2=$queryd2->fetch_array()){
unlink("../../../uploads/anuncios/thumb/".$lined2['avatar']."");
unlink("../../../uploads/anuncios/".$lined2['image']."");
//deleta
$sqld="DELETE FROM tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$queryd=$mysqli->query($sqld);
}
}
//deleta
$sqld2="DELETE FROM tbl_anuncio WHERE id_cod='".$area."'";
$queryd2=$mysqli->query($sqld2);
//direciona
header("Location: index.php");
}

?>