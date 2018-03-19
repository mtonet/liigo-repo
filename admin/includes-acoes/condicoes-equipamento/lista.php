<?php
//lista marcas

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$pesq=$mysqli->real_escape_string(strip_tags(trim($_POST['pesq'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));
$enviopesq=$mysqli->real_escape_string(strip_tags(trim($_POST['enviopesq'])));

if($enviopesq==""){
$lista="SELECT id_cod,nome,status from tbl_condicao_equipamento ORDER BY nome asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}elseif($enviopesq=="s"){
$lista="SELECT id_cod,nome,status from tbl_condicao_equipamento WHERE nome like'%".$pesq."%' ORDER BY nome asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}

//deletar registro
if($action=="delete"){

//deleta
$sqld="DELETE FROM tbl_condicao_equipamento WHERE id_cod='".$area."'";
$queryd=$mysqli->query($sqld);

//direciona
header("Location: index.php");
}	

?>