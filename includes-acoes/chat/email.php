<?php
//----email
/////dados email
$headers ="MIME-Version: 1.1\n";
$headers.="Content-type: text/html; charset=utf-8\n";
$headers .= "From: Liigo <'webmaster@rcdesigners.com.br'>\n";
$headers .= "Return-Path: 'webmaster@rcdesigners.com.br'\n";
$subject="Nova mensagem Liigo";
//mensagem
$message="<table width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align='center'><img src='http://liigo.com.br/email/logo-email.png' width='172' height='95' border='0' style='border:0; display:block;'/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:20px; color:#000;'><b>Nova mensagem Liigo</b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000;'>Olá <b>".$linemail['nome']."</b>.</td>
  </tr>
  <tr>
    <td align='center'>&nbsp;</td>
  </tr>
  <tr>
    <td align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000;'>Você recebeu uma nova mensagem de <b>".$user1."</b>.<br>
      <br>
Para responder e visualizar a mensagem, acesse seu <br>
painel de controle e selecione a opção chat.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor='#174A66'>&nbsp;</td>
  </tr>
</table>";
//envio do email
mail($linemail['email'], $subject, $message, $headers);
//mail($to, $subject, $message, $headers,"-r".$emailsender);
//----
?>