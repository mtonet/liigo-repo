<?php
//editar

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$nome=$mysqli->real_escape_string(strip_tags(trim($_POST['nome'])));
$status=$mysqli->real_escape_string(strip_tags(trim($_POST['status'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

$listadd="SELECT id_cod,nome,status from tbl_categoria WHERE id_cod='".$area."'";
$querydd=$mysqli->query($listadd);
$linedd=$querydd->fetch_array();

//condicoes

if($nome==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe um nome.
                  </div>';

}elseif($status==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe o status.
                  </div>';

}elseif($enviocad=="s"){

//alterar

$cadast="UPDATE tbl_categoria SET nome='".$nome."',status='".$status."' WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);

if($linedd['nome']!=$nome){

//deleta o htaccess

$linha="RewriteRule ^lista-".str_replace(" ", "-",loCase(ascento(utf8_decode($linedd['nome']))))."$ lista-".str_replace(" ", "-",loCase(ascento(utf8_decode($linedd['nome'])))).".php [NC,L]"; //conteudo da linha a ser retirada 
$substituirpor = ""; //deixe em branco para simplesmente apagar a linha 
$arquivo = "../../../".".htaccess"; 
$conteudo = file_get_contents($arquivo); // pega o conteúdo do arquivo e carrega-o em uma variável 
$novoconteudo = str_replace($linha, $substituirpor, $conteudo); // cria um novo conteúdo 
$gravar = fopen($arquivo, "w"); // abre o arquivo para escrita 
fwrite($gravar, $novoconteudo); // grava o arquivo novamente, mas sem a linha 
fclose($gravar); // fecha o arquivo

//escreve no htaccess se houver mudança

$open = fopen("../../../".".htaccess","a+");
fwrite($open,"RewriteRule ^lista-".str_replace(" ", "-",loCase(ascento(utf8_decode($nome))))."$ lista-".str_replace(" ", "-",loCase(ascento(utf8_decode($nome)))).".php [NC,L]\r\n");
fclose($open);
}

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro alterado com sucesso.
                  </div>';

//direciona
header('refresh: 3; url=categoria.php');

}
?>