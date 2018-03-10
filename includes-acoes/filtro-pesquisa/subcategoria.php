<?php
//conn
require"../../conn/exe.php";

$precisabusc=$mysqli->real_escape_string(strip_tags(trim($_POST['precisabusc'])));

//categoria 
$listasub="SELECT * from tbl_subcategoria WHERE categoria='".$precisabusc."' AND status='1' ORDER BY nome ASC";
$querysub=$mysqli->query($listasub);
$numsub=$querysub->num_rows;
if($numsub==0){
echo"<option value=''>nenhum resultado ...</option>";
}else{
while($linesub=$querysub->fetch_array()){
?>
<option value="<?php echo $linesub['nome'];?>"><?php echo $linesub['nome'];?></option>
<?php
}
}
?>