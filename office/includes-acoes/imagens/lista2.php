<?php
//lista paginas internas

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));


$lista="SELECT id,id_cod,avatar,pagina,status from tbl_img_internas ORDER BY id asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;

//deletar registro
if($action=="delete"){
$listad="SELECT id_cod,avatar,image from tbl_img_internas WHERE id_cod='".$area."'";
$queryd=$mysqli->query($listad);
$lined=$queryd->fetch_array();

//deletar avatar
if($lined['avatar']!=""){
unlink("../../../uploads/paginas-internas/thumb/".$lined['avatar']."");
unlink("../../../uploads/paginas-internas/".$lined['image']."");
}

//deleta
$sqld="DELETE FROM tbl_img_internas WHERE id_cod='".$area."'";
$queryd=$mysqli->query($sqld);

//direciona
header("Location: paginas-internas.php");
}	

?>