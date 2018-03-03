<?php
//cadastrar paginas internas

$pagina=$mysqli->real_escape_string(strip_tags(trim($_POST['pagina'])));
$status=$mysqli->real_escape_string(strip_tags(trim($_POST['status'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['imagem']['name'];     
$arquivo01_temporario=$_FILES['imagem']['tmp_name'];

//categorias
$listacc="SELECT id_cod,nome from tbl_categoria ORDER BY nome ASC";
$querycc=$mysqli->query($listacc);

$listacc2="SELECT id_cod,nome from tbl_categoria WHERE id_cod='".$pagina."'";
$querycc2=$mysqli->query($listacc2);
$linecc2=$querycc2->fetch_array();

//condicoes

if($arquivo01_nome==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe uma imagem.
                  </div>';

}elseif($pagina==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor selecione uma página.
                  </div>';

}elseif($status==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe o status.
                  </div>';

}elseif($enviocad=="s" AND $arquivo01_nome!=""){

//img
require"img-pq2.php";

//cadastrar

$cod=rand("1","1234567890");
$cadast="INSERT into tbl_img_internas (id_cod,avatar,image,id_pagina,pagina,status) values ('".md5($cod)."','".$avatar."','".$avatar2."','".$linecc2['id_cod']."','".$linecc2['nome']."','".$status."')";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro realizado com sucesso.
                  </div>';

 //direciona
header('refresh: 3; url=paginas-internas.php');
}
?>