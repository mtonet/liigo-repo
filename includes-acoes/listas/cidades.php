<?php
//conn
require"../../conn/exe.php";

$estadof=$mysqli->real_escape_string(strip_tags(trim($_POST['estadof'])));

//cidades
$listacidadesf="SELECT Nome,Uf from tbl_municipio WHERE Uf='".$estadof."' ORDER BY Nome ASC";
$querycidadesf=$mysqli->query($listacidadesf);
$numcidadesf=$querycidadesf->num_rows;
if($numcidadesf==0){
echo"<option value=''>nenhum resultado ...</option>";
}else{
while($linecidadesf=$querycidadesf->fetch_array()){
?>
<option value="<?php echo utf8_encode($linecidadesf['Nome']);?>"><?php echo utf8_encode($linecidadesf['Nome']);?></option>
<?php
}
}
?>