<?php
//alterar paginas internas

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$pagina=$mysqli->real_escape_string(strip_tags(trim($_POST['pagina'])));
$status=$mysqli->real_escape_string(strip_tags(trim($_POST['status'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['imagem']['name'];     
$arquivo01_temporario=$_FILES['imagem']['tmp_name'];

//dados
$lista="SELECT * from tbl_img_internas WHERE id_cod='".$area."'";
$query=$mysqli->query($lista);
$line=$query->fetch_array();

//categorias
$listacc="SELECT id_cod,nome from tbl_categoria ORDER BY nome ASC";
$querycc=$mysqli->query($listacc);

$listacc2="SELECT id_cod,nome from tbl_categoria WHERE id_cod='".$pagina."'";
$querycc2=$mysqli->query($listacc2);
$linecc2=$querycc2->fetch_array();

//condicoes

if($pagina==""){
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

}elseif($enviocad=="s" AND $arquivo01_nome==""){        


//alterar

$cadast="UPDATE tbl_img_internas SET id_pagina='".$linecc2['id_cod']."',pagina='".$linecc2['nome']."',status='".$status."' WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro alterado com sucesso.
                  </div>';

 //direciona
header('refresh: 3; url=paginas-internas.php');


}elseif($enviocad=="s" AND $arquivo01_nome!=""){

//deletar avatar
if($line['avatar']!=""){
unlink("../../../uploads/paginas-internas/thumb/".$line['avatar']."");
unlink("../../../uploads/paginas-internas/".$line['image']."");
} 

//img
require"img-pq2.php";

//alterar

$cadast="UPDATE tbl_img_internas SET avatar='".$avatar."',image='".$avatar2."',id_pagina='".$linecc2['id_cod']."',pagina='".$linecc2['nome']."',status='".$status."' WHERE id_cod='".$area."'";
$query=$mysqli->query($cadast);

$msgs='<div class="alert alert-info alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Cadastro alterado com sucesso.
                  </div>';

 //direciona
header('refresh: 3; url=paginas-internas.php');
}
?>