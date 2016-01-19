<?php

require 'PHPMailerAutoload.php';

if(isset($_POST) && !empty($_POST['email'])){

$mail = new PHPMailer;
$mail->CharSet = "UTF-8";
$mail->isSMTP();                       
$mail->Host = 'mail.mexifilter.com';  
$mail->SMTPAuth = true;                
$mail->Port       = 26;   
$mail->Username = 'sender@mexifilter.com';                            
$mail->Password = 'eUx*=e9ISCOa';                                                               
$mail->isHTML(true);
$plantilla="<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
  <tr>
    <td colspan='2'><img src='http://creadoresdepaginaweb.com:82/telch/sitio/wp-content/themes/TelchTheme/img/head_mail_telch.png' width='600' height='115' alt='Contacto Telch' /></td>
  </tr>
  <tr>
    <td colspan='2' style='text-align: center; font-size: 16px; color: #666;'>Se ha envíado un correo electrónico desde Corporación Telch</td>
  </tr>
  <tr>
    <td colspan='2' height='10'></td>
  </tr>
  <tr>
    <td bgcolor='#eee' width='300'>
    	<strong>Nombre:</strong><br /><br />
        ".$_POST['nombre']."
    </td>
    <td bgcolor='#eee' width='300'>
    	<strong>Email:</strong><br /><br />
        ".$_POST['email']."
    </td>
  </tr>
  <tr>
    <td colspan='2' height='10'></td>
  </tr>
  <tr>
    <td bgcolor='#eee' colspan='2'>
    	<strong>Asunto:</strong><br /><br />
        ".$_POST['asunto']."
    </td>
  </tr>
  <tr>
    <td colspan='2' height='10'></td>
  </tr>
  <tr>
    <td bgcolor='#eee' colspan='2'>
    	<strong>Mensaje:</strong><br /><br />
        ".$_POST['mensaje']."
    </td>
  </tr>
  <tr>
    <td colspan='2' height='10'></td>
  </tr>
  <tr>
    <td colspan='2' bgcolor='#001361' style='padding: 10px 0px 10px 0px; font-size: 11px; color: white; text-align: center;'>Corporativo TELCH @ 2015</td>
  </tr>
</table>";  
$msg=$plantilla;

$mail->setFrom = 'sender@mexifilter.com';
$mail->FromName = $_POST['nombre'];
$mail->Subject = "Formulario de Mexifilter";
$mail->addAddress('soulness.works@gmail.com');

$mail->Body = $msg;
$mail->AltBody = $msg;
	

$resEmail	=	$mail->Send();


if($resEmail) {
	$ok	=	'ok';	
}else{
	$ok	=	$mail->ErrorInfo;
}
	echo $ok;	
}else{
	echo 'Error post vacio';
}

