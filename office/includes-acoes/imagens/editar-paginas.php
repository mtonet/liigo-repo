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
$rowcc2=$querycc2->num_rows;

if($rowcc2==""){

switch ($pagina) {
    case 1:
        $idcat="1";
        $cat="Cadastre-se";
        break;
    case 2:
        $idcat="2";
        $cat="Anuncie";
        break;
    case 3:
        $idcat="3";
        $cat="Anúncio assistência";
        break;
    case 4:
        $idcat="4";
        $cat="Detalhe Anúncio";
        break;
    case 5:
        $idcat="5";
        $cat="Anúncio equipamento";
        break;
    case 6:
        $idcat="6";
        $cat="Anúncio serviço";
        break;
    case 7:
        $idcat="7";
        $cat="Anúncio suprimento";
        break;
    case 8:
        $idcat="8";
        $cat="Anúncio transportadora";
        break;
    case 9:
        $idcat="9";
        $cat="Chat";
        break;
    case 10:
        $idcat="10";
        $cat="Envio anúncio";
        break;
    case 11:
        $idcat="11";
        $cat="Lista assistência";
        break;
    case 12:
        $idcat="12";
        $cat="Lista anúncios";
        break;
    case 13:
        $idcat="13";
        $cat="Lista equipamento";
        break;
    case 14:
        $idcat="14";
        $cat="Lista suprimento";
        break;
    case 15:
        $idcat="15";
        $cat="Lista transportadora";
        break;
    case 16:
        $idcat="16";
        $cat="Lista login";
        break;
    case 17:
        $idcat="17";
        $cat="Resultado busca";
        break;
    case 18:
        $idcat="18";
        $cat="Esqueci senha";
        break;
    case 19:
        $idcat="19";
        $cat="Favoritos";
        break;
    case 20:
        $idcat="20";
        $cat="Meus anúncios";
        break;
    case 21:
        $idcat="21";
        $cat="Meu perfil";
        break;
    case 22:
        $idcat="22";
        $cat="Login";
        break;
    case 23:
        $idcat="23";
        $cat="Senha";
        break;
}

}else{
$idcat=$pagina;
$cat=$linecc2['nome'];
}

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

$cadast="UPDATE tbl_img_internas SET id_pagina='".$idcat."',pagina='".$cat."',status='".$status."' WHERE id_cod='".$area."'";
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

$cadast="UPDATE tbl_img_internas SET avatar='".$avatar."',image='".$avatar2."',id_pagina='".$idcat."',pagina='".$cat."',status='".$status."' WHERE id_cod='".$area."'";
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