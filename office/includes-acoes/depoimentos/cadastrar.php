<?php
//cadastrar depoimentos

$nome=$mysqli->real_escape_string(strip_tags(trim($_POST['nome'])));
$profissao=$mysqli->real_escape_string(strip_tags(trim($_POST['profissao'])));
$depoimento=$mysqli->real_escape_string(strip_tags(trim($_POST['depoimento'])));
$status=$mysqli->real_escape_string(strip_tags(trim($_POST['status'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['imagem']['name'];     
$arquivo01_temporario=$_FILES['imagem']['tmp_name'];


//condicoes

if($nome==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe um nome.
                  </div>';

}elseif($profissao==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe uma profissão.
                  </div>';
}elseif($depoimento==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe um depoimento.
                  </div>';


}elseif($status==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe o status.
                  </div>';

}elseif($enviocad=="s" AND $arquivo01_nome==""){

//cadastrar

$cod=rand("1","1234567890");
$cadast="INSERT into  tbl_depoimentos (id_cod,nome,profissao,depoimento,status) values ('".md5($cod)."','".$nome."','".$profissao."','".$depoimento."','".$status."')";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro realizado com sucesso.
                  </div>';

 //direciona
header('refresh: 3; url=index.php');

}elseif($enviocad=="s" AND $arquivo01_nome!=""){

//img
require"img-pq.php";

//cadastrar

$cod=rand("1","1234567890");
$cadast="INSERT into tbl_depoimentos (id_cod,nome,profissao,depoimento,avatar,status) values ('".md5($cod)."','".$nome."','".$profissao."','".$depoimento."','".$avatar."','".$status."')";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro realizado com sucesso.
                  </div>';

 //direciona
header('refresh: 3; url=index.php');
}
?>