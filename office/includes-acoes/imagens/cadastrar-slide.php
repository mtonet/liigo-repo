<?php
//cadastrar slide home

$texto1=$mysqli->real_escape_string(strip_tags(trim($_POST['texto1'])));
$texto2=$mysqli->real_escape_string(strip_tags(trim($_POST['texto2'])));
$status=$mysqli->real_escape_string(strip_tags(trim($_POST['status'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['imagem']['name'];     
$arquivo01_temporario=$_FILES['imagem']['tmp_name'];


//condicoes

if($arquivo01_nome==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe uma imagem.
                  </div>';


}elseif($status==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe o status.
                  </div>';

}elseif($enviocad=="s" AND $arquivo01_nome!=""){

//img
require"img-pq.php";

//cadastrar

$cod=rand("1","1234567890");
$cadast="INSERT into tbl_slide_home (id_cod,avatar,image,texto1,texto2,status) values ('".md5($cod)."','".$avatar."','".$avatar2."','".$texto1."','".$texto2."','".$status."')";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro realizado com sucesso.
                  </div>';

 //direciona
header('refresh: 3; url=slide-home.php');
}
?>