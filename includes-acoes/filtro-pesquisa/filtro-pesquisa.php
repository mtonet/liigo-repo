<?php
//filtro pesquisa

//estados dos anuncios apenas
$listaestados="SELECT estado, COUNT(estado) AS estados from tbl_anuncio GROUP BY estado ORDER BY estado ASC";
$queryestados=$mysqli->query($listaestados);


?>