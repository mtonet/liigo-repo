<?php
//lista subcategoria

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$pesq=$mysqli->real_escape_string(strip_tags(trim($_POST['pesq'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));
$enviopesq=$mysqli->real_escape_string(strip_tags(trim($_POST['enviopesq'])));

if($enviopesq==""){
$lista="SELECT * from tbl_subcategoria ORDER BY nome asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}elseif($enviopesq=="s"){
$lista="SELECT * from tbl_subcategoria WHERE nome like'%".$pesq."%' OR categoria like'%".$pesq."%' ORDER BY nome asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}

//deletar registro
if($action=="delete"){
$listad="SELECT id_cod,nome,status from tbl_subcategoria WHERE id_cod='".$area."'";
$queryd=$mysqli->query($listad);
$lined=$queryd->fetch_array();

//deleta
$sqld="DELETE FROM tbl_subcategoria WHERE id_cod='".$area."'";
$queryd=$mysqli->query($sqld);

//direciona
header("Location: subcategoria.php");
}	

?>