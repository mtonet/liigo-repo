<?php
//editar

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$categoria=$mysqli->real_escape_string(strip_tags(trim($_POST['categoria'])));
$nome=$mysqli->real_escape_string(strip_tags(trim($_POST['nome'])));
$status=$mysqli->real_escape_string(strip_tags(trim($_POST['status'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

$listadd="SELECT * from tbl_subcategoria WHERE id_cod='".$area."'";
$querydd=$mysqli->query($listadd);
$linedd=$querydd->fetch_array();

//categoria

$listac="SELECT id_cod,nome from tbl_categoria ORDER BY nome asc";
$queryc=$mysqli->query($listac);

$listacc="SELECT id_cod,nome from tbl_categoria WHERE id_cod='".$categoria."'";
$querycc=$mysqli->query($listacc);
$linecc=$querycc->fetch_array();

//condicoes

if($categoria==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Selecione uma categoria.
                  </div>';

}elseif($nome==""){
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

$cadast="UPDATE tbl_subcategoria SET nome='".$nome."',id_categoria='".$categoria."',categoria='".$linecc['nome']."',status='".$status."' WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro alterado com sucesso.
                  </div>';

//direciona
header('refresh: 3; url=subcategoria.php');

}
?>