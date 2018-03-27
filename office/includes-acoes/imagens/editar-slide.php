<?php
//alterar slide home

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$texto1=$mysqli->real_escape_string(strip_tags(trim($_POST['texto1'])));
$texto2=$mysqli->real_escape_string(strip_tags(trim($_POST['texto2'])));
$status=$mysqli->real_escape_string(strip_tags(trim($_POST['status'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['imagem']['name'];     
$arquivo01_temporario=$_FILES['imagem']['tmp_name'];


//dados
$lista="SELECT * from tbl_slide_home WHERE id_cod='".$area."'";
$query=$mysqli->query($lista);
$line=$query->fetch_array();

//condicoes

if($status==""){
$msgs='<div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Por favor informe o status.
                  </div>';

}elseif($enviocad=="s" AND $arquivo01_nome==""){

//alterar

$cadast="UPDATE tbl_slide_home SET texto1='".$texto1."',texto2='".$texto2."',status='".$status."' WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro alterado com sucesso.
                  </div>';

 //direciona
header('refresh: 3; url=slide-home.php');

}elseif($enviocad=="s" AND $arquivo01_nome!=""){

//deletar avatar
if($line['avatar']!=""){
unlink("../../../uploads/slide-home/thumb/".$line['avatar']."");
unlink("../../../uploads/slide-home/".$line['image']."");
} 

//img
require"img-pq.php";

//alterar

$cadast="UPDATE tbl_slide_home SET avatar='".$avatar."',image='".$avatar2."',texto1='".$texto1."',texto2='".$texto2."',status='".$status."' WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro alterado com sucesso.
                  </div>';

 //direciona
header('refresh: 3; url=slide-home.php');
}
?>