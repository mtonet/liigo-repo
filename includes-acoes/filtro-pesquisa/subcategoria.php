<?php
//conn
require"../../conn/exe.php";

$precisabusc=$mysqli->real_escape_string(strip_tags(trim($_POST['precisabusc'])));

//categoria 
$listasub="SELECT status,categoria,subcategoria FROM tbl_anuncio WHERE categoria='".$precisabusc."' AND status='1' GROUP BY subcategoria ORDER BY subcategoria ASC";
$querysub=$mysqli->query($listasub);
$numsub=$querysub->num_rows;
if($numsub==0){
echo"<option value=''>nenhum resultado ...</option>";
}else{
while($linesub=$querysub->fetch_array()){
$mc=explode(",", $linesub['subcategoria']);
}
foreach($mc as $separado => $valor){
?>
<option value="<?php echo $valor;?>"><?php echo $valor;?></option>
<?php
}
}

?>