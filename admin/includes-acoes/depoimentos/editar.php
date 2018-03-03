<?php
//editar depoimentos

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$nome=$mysqli->real_escape_string(strip_tags(trim($_POST['nome'])));
$profissao=$mysqli->real_escape_string(strip_tags(trim($_POST['profissao'])));
$depoimento=$mysqli->real_escape_string(strip_tags(trim($_POST['depoimento'])));
$status=$mysqli->real_escape_string(strip_tags(trim($_POST['status'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['imagem']['name'];     
$arquivo01_temporario=$_FILES['imagem']['tmp_name'];

//dados
$lista="SELECT * from tbl_depoimentos WHERE id_cod='".$area."'";
$query=$mysqli->query($lista);
$line=$query->fetch_array();

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

//alterar

$cod=rand("1","1234567890");
$cadast="UPDATE tbl_depoimentos SET nome='".$nome."',profissao='".$profissao."',depoimento='".$depoimento."',status='".$status."'  WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro alterado com sucesso.
                  </div>';

 //direciona
header('refresh: 3; url=index.php');

}elseif($enviocad=="s" AND $arquivo01_nome!=""){

//deletar avatar
if($line['avatar']!=""){
unlink("../../../uploads/depoimentos/".$line['avatar']."");
} 

//img
require"img-pq.php";

//alterar

$cod=rand("1","1234567890");
$cadast="UPDATE tbl_depoimentos SET nome='".$nome."',profissao='".$profissao."',depoimento='".$depoimento."',status='".$status."',avatar='".$avatar."'  WHERE id_cod='".$area."'";
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