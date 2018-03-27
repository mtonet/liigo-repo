<?php
//editar

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$nome=$mysqli->real_escape_string(strip_tags(trim($_POST['nome'])));
$status=$mysqli->real_escape_string(strip_tags(trim($_POST['status'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

$listadd="SELECT id_cod,nome,status from tbl_cabeca_impressao WHERE id_cod='".$area."'";
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

$cadast="UPDATE tbl_cabeca_impressao SET nome='".$nome."',status='".$status."' WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro alterado com sucesso.
                  </div>';

//direciona
header('refresh: 3; url=index.php');

}
?>