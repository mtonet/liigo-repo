<?php
//conn
require"../../conn/exe.php";
//regras
require"../../includes-acoes/regras/regras.php";

//$estadobusc=$mysqli->real_escape_string(strip_tags(trim($_POST['estadobusc'])));
$estadobusc="SP";

//cidades
//$listacidades="SELECT * from tbl_anuncio WHERE estado='".$estadobusc."' ORDER BY cidade ASC";
$listacidades="SELECT estado,cidade, COUNT(cidade) AS cidades from tbl_anuncio WHERE estado='".$estadobusc."' GROUP BY cidade ORDER BY cidade ASC";
$querycidades=$mysqli->query($listacidades);
$numcidades=$querycidades->num_rows;
echo"<option value=''>selecione...</option>";
if($numcidades==0){
echo"<option value=''>nenhum resultado disponível...</option>";
}else{
while($linecidades=$querycidades->fetch_array()){
?>
<option value="<?php echo $linecidades['cidade'];?>"><?php echo $linecidades['cidade'];?></option>
<?php
}
}
?>