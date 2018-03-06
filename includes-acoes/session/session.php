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
if(isset($_SESSION['logadaco_site_liigo_265']))
$obtem_log = $_SESSION['logadaco_site_liigo_265'];
if (isset($_SESSION['passadaco_site_liigo_689']));
$obtem_pass = $_SESSION['passadaco_site_liigo_689'];
if ( !(empty($obtem_log) or empty($obtem_pass) AND !isset($_SESSION['md5'])))
{
$consultala="SELECT id,email,pass FROM tbl_usuarios WHERE email='".$obtem_log."' AND pass='".md5($obtem_pass)."'";
$queryla = $mysqli->query($consultala);
$dadosla = $queryla->fetch_array();
$linhala = $queryla->num_rows;
if($linhala==1){
if($obtem_log!=$dadosla['login'] AND $_SESSION['md5']!=$md5){
unset ($_SESSION['logadaco_site_liigo_265']);
unset ($_SESSION['passadaco_site_liigo_689']);
header("Location: login");
exit;
}
}else{
unset ($_SESSION['logadaco_site_liigo_265']);
unset ($_SESSION['passadaco_site_liigo_689']);
header("Location: login");
exit;
}
}else{
header("Location: login");
exit;
}
?>