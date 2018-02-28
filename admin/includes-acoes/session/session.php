<?php
ini_set('session.gc_maxlifetime',600);
session_start();
//---
$md5=md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'] );
//---
if (!isset($_SESSION['md5'])) {
session_regenerate_id(); 
$_SESSION['md5']=$md5;
}
//---
if ($_SESSION['md5'] != $md5) {  
$_SESSION = array();
$_SESSION['md5'] = $md5;
}
//----
if(isset($_SESSION['logadaco_admin_liigo_526']))
$obtem_log = $_SESSION['logadaco_admin_liigo_526'];
if (isset($_SESSION['passadaco_admin_liigo_986']));
$obtem_pass = $_SESSION['passadaco_admin_liigo_986'];
if ( !(empty($obtem_log) or empty($obtem_pass) and !isset($_SESSION['md5'])))
{
$consultala="SELECT login,senha,nome,status from tbl_admin where login='".$obtem_log."' and senha='".md5($obtem_pass)."' and status='1'";
$queryla = $mysqli->query($consultala);
$dadosla = $queryla->fetch_array();
$linhala = $queryla->num_rows;
if($linhala==1){
if($obtem_log!=$dadosla['login'] and $_SESSION['md5']!=$md5){
unset ($_SESSION['logadaco_admin_liigo_526']);
unset ($_SESSION['passadaco_admin_liigo_986']);
header("Location: erro.php");
exit;
}
}else{
unset ($_SESSION['logadaco_admin_liigo_526']);
unset ($_SESSION['passadaco_admin_liigo_986']);
header("Location: erro.php");
exit;
}
}else{
header("Location: erro.php");
exit;
}
?>