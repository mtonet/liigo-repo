<?php
//lista categoria

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$pesq=$mysqli->real_escape_string(strip_tags(trim($_POST['pesq'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));
$enviopesq=$mysqli->real_escape_string(strip_tags(trim($_POST['enviopesq'])));

if($enviopesq==""){
$lista="SELECT id_cod,nome,status from tbl_categoria ORDER BY nome asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}elseif($enviopesq=="s"){
$lista="SELECT id_cod,nome,status from tbl_categoria WHERE nome like'%".$pesq."%' ORDER BY nome asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}

//deletar registro
if($action=="delete"){
$listad="SELECT id_cod,nome,status from tbl_categoria WHERE id_cod='".$area."'";
$queryd=$mysqli->query($listad);
$lined=$queryd->fetch_array();

//deleta o htaccess
$linha="RewriteRule ^lista-".str_replace(" ", "-",loCase(ascento(utf8_decode($lined['nome']))))."$ lista-".str_replace(" ", "-",loCase(ascento(utf8_decode($lined['nome'])))).".php [NC,L]"; //conteudo da linha a ser retirada 
$substituirpor = ""; //deixe em branco para simplesmente apagar a linha 
$arquivo = "../../../".".htaccess"; 
$conteudo = file_get_contents($arquivo); // pega o conteúdo do arquivo e carrega-o em uma variável 
$novoconteudo = str_replace($linha, $substituirpor, $conteudo); // cria um novo conteúdo 
$gravar = fopen($arquivo, "w"); // abre o arquivo para escrita 
fwrite($gravar, $novoconteudo); // grava o arquivo novamente, mas sem a linha 
fclose($gravar); // fecha o arquivo

//deleta
$sqld="DELETE FROM tbl_categoria WHERE id_cod='".$area."'";
$queryd=$mysqli->query($sqld);

//direciona
header("Location: categoria.php");
}	

?>