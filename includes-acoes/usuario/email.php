<?php
//----email
/////dados email
$headers ="MIME-Version: 1.1\n";
$headers.="Content-type: text/html; charset=utf-8\n";
$headers .= "From: Liigo <'webmaster@rcdesigners.com.br'>\n";
$headers .= "Return-Path: 'webmaster@rcdesigners.com.br'\n";
$subject="Alteracao de acesso Liigo";
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
    <td align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:20px; color:#000;'><b>Alteração de acesso Liigo</b></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align='center' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000;'>Olá <b>".$linedpu['nome']."</b><br>Abaixo segue seu login e senha que serão utilizados para acessar o nosso site.<br />
      Qualquer dúvida estamos a disposição.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width='500' border='0' align='center'>
      <tr>
        <td width='240' align='right' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000;'>Login:</td>
        <td width='250' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000;'>".$linedpu['email']."</td>
      </tr>
      <tr>
        <td align='right' style='font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000;'>Senha:</td>
        <td style='font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#000;'>".$pass."</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor='#174A66'>&nbsp;</td>
  </tr>
</table>";
//envio do email
mail($linedpu['email'], $subject, $message, $headers);
//mail($to, $subject, $message, $headers,"-r".$emailsender);
//----
?>