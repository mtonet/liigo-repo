<?php
//anuncios-pendentes

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$pesq=$mysqli->real_escape_string(strip_tags(trim($_POST['pesq'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));
$enviopesq=$mysqli->real_escape_string(strip_tags(trim($_POST['enviopesq'])));

if($enviopesq==""){
$lista="SELECT id_cod,titulo,status,data from tbl_anuncio WHERE status='0' ORDER BY data desc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}elseif($enviopesq=="s"){
$lista="SELECT id_cod,titulo,status,data from tbl_anuncio WHERE titulo like'%".$pesq."%' AND status='0' ORDER BY data desc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
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

//aprovar
if($action=="aprovar"){
$cadast="UPDATE tbl_anuncio SET status='1' WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);
//direciona
header("Location: index.php");
}

?>