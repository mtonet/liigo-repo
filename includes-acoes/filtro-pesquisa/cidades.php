<?php
//conn
require"../../conn/exe.php";

$estadobusc=$mysqli->real_escape_string(strip_tags(trim($_POST['estadobusc'])));

//cidades
$listacidades="SELECT status,estado,cidade, COUNT(cidade) AS cidades from tbl_anuncio WHERE estado='".$estadobusc."' AND status='1' GROUP BY cidade ORDER BY cidade ASC";
$querycidades=$mysqli->query($listacidades);
$numcidades=$querycidades->num_rows;
if($numcidades==0){
echo"<option value=''>nenhum resultado ...</option>";
}else{
while($linecidades=$querycidades->fetch_array()){
?>
<option value="<?php echo $linecidades['cidade'];?>"><?php echo ucfirst($linecidades['cidade']);?></option>
<?php
}
}
?>