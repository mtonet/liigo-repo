<?php
//lista users

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$pesq=$mysqli->real_escape_string(strip_tags(trim($_POST['pesq'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));
$enviopesq=$mysqli->real_escape_string(strip_tags(trim($_POST['enviopesq'])));

if($enviopesq==""){
$lista="SELECT id_cod,nome,email,celular from tbl_usuarios ORDER BY nome asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}elseif($enviopesq=="s"){
$lista="SELECT id_cod,nome,email,celular from tbl_usuarios WHERE nome like'%".$pesq."%' OR email like'%".$pesq."%' ORDER BY nome asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}

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

//exportar

if($action=="exportar"){

// Definimos o nome do arquivo que será exportado
$arquivo = 'usuarios.xls';

$listadow="SELECT nome,email,celular,telefone,cpf_cnpj,estado,cidade from tbl_usuarios ORDER BY nome asc";
$querydow=$mysqli->query($listadow);

$html="<table border=1>
    <tr>
        <td bgcolor=#EEEEEE>Nome</td>    
        <td bgcolor=#EEEEEE>Email</td> 
        <td bgcolor=#EEEEEE>Telefone</td> 
        <td bgcolor=#EEEEEE>Celular</td>   
        <td bgcolor=#EEEEEE>CPF/CNPJ</td>    
        <td bgcolor=#EEEEEE>Estado</td> 
        <td bgcolor=#EEEEEE>Cidade</td>   
    </tr>";
while($linedow=$querydow->fetch_array()){
    $html.="<tr>
        <td>".utf8_decode($linedow['nome'])."</td>     
        <td>".$linedow['email']."</td>
        <td>".$linedow['telefone']."</td>
        <td>".$linedow['celular']."</td>  
        <td>".$linedow['cpf_cnpj']."</td>
        <td>".$linedow['estado']."</td>
        <td>".utf8_decode($linedow['cidade'])."</td>           
    </tr>";
}
   
$html.="</table>";

// Configurações header para forçar o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
header ("Content-Description: PHP Generated Data" );

// Envia o conteúdo do arquivo
echo $html;
exit;
}

?>