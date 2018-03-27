<?php
//cadastrar

$categoria=$mysqli->real_escape_string(strip_tags(trim($_POST['categoria'])));
$nome=$mysqli->real_escape_string(strip_tags(trim($_POST['nome'])));
$status=$mysqli->real_escape_string(strip_tags(trim($_POST['status'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

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

//cadastrar

$cod=rand("1","1234567890");
$cadast="INSERT into tbl_subcategoria (id_cod,nome,id_categoria,categoria,status) values ('".md5($cod)."','".$nome."','".$categoria."','".$linecc['nome']."','".$status."')";
$query=$mysqli->query($cadast);


$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro realizado com sucesso.
                  </div>';

 //direciona
header('refresh: 3; url=subcategoria.php');
}
?>