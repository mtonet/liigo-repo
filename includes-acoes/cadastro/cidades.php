<?php
//conn
require"../../conn/exe.php";

$estado=$mysqli->real_escape_string(strip_tags(trim($_POST['estado'])));

//cidades
$listacidades="SELECT Nome,Uf from tbl_municipio WHERE Uf='".$estado."' ORDER BY Nome ASC";
$querycidades=$mysqli->query($listacidades);
$numcidades=$querycidades->num_rows;
if($numcidades==0){
echo"<option value=''>nenhum resultado ...</option>";
}else{
while($linecidades=$querycidades->fetch_array()){
?>
<option value="<?php echo utf8_encode($linecidades['Nome']);?>"><?php echo utf8_encode($linecidades['Nome']);?></option>
<?php
}
}
?>