<?php
//lista categoria

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$pesq=$mysqli->real_escape_string(strip_tags(trim($_POST['pesq'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));
$enviopesq=$mysqli->real_escape_string(strip_tags(trim($_POST['enviopesq'])));

if($enviopesq==""){
$lista="SELECT id_cod,email from tbl_newsletter ORDER BY email asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}elseif($enviopesq=="s"){
$lista="SELECT id_cod,email from tbl_newsletter WHERE email like'%".$pesq."%' ORDER BY email asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}

//deletar registro

if($action=="delete"){
$listad="SELECT id_cod,email from tbl_newsletter WHERE id_cod='".$area."'";
$queryd=$mysqli->query($listad);
$lined=$queryd->fetch_array();

//deleta
$sqld="DELETE FROM tbl_newsletter WHERE id_cod='".$area."'";
$queryd=$mysqli->query($sqld);

//direciona
header("Location: index.php");
}	

//exportar

if($action=="exportar"){

// Definimos o nome do arquivo que será exportado
$arquivo = 'emails.xls';

$listadow="SELECT email from tbl_newsletter ORDER BY email asc";
$querydow=$mysqli->query($listadow);

$html="<table border=1>
    <tr>
        <td bgcolor=#EEEEEE>Email</td>              
    </tr>";
while($linedow=$querydow->fetch_array()){
    $html.="<tr>
        <td>".$linedow['email']."</td>                
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