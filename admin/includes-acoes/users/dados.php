<?php
//dados users

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));

$lista="SELECT * from tbl_usuarios WHERE id_cod='".$area."'";
$query=$mysqli->query($lista);
$line=$query->fetch_array();

//deletar registro
if($action=="delete"){
$listad="SELECT id_cod,avatar from tbl_usuarios WHERE id_cod='".$area."'";
$queryd=$mysqli->query($listad);
$lined=$queryd->fetch_array();

//deletar avatar
if($lined['avatar']!=""){
unlink("../../../uploads/usuarios/".$lined['avatar']."");
}

//deleta
$sqld="DELETE FROM tbl_usuarios WHERE id_cod='".$area."'";
$queryd=$mysqli->query($sqld);

//direciona
header("Location: index.php");
}	

//lista favoritos
$listafav="SELECT * FROM tbl_favoritos WHERE id_user='".$area."' ORDER BY id desc";
$queryfav=$mysqli->query($listafav);
$numfav=$queryfav->num_rows;

?>