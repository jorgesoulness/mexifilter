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
$mail->Password = 'FS^EwgDL+7_v';                                                               
$mail->isHTML(true);
$plantilla="<table width='600' border='0' cellspacing='0' cellpadding='5'>
  <tr>
    <th colspan='2'>Mexifilter - Contacto</th>
  </tr>
  <tr>
    <td colspan='2' height='0'></td>
  </tr>
  <tr>
    <td width='141'>Email:</td>
    <td width='419'>".$_POST['email']."</td>
  </tr>
  <tr>
    <td>Nombre:</td>
    <td>".$_POST['nombre']."</td>
  </tr>
  <tr>
    <td>Teléfono</td>
    <td>".$_POST['telefono']."</td>
  </tr>
  <tr>
    <td>Asunto</td>
    <td>".$_POST['asunto']."</td>
  </tr>
  <tr>
    <td>Comentario</td>
    <td>".$_POST['mensaje']."</td>
  </tr>
  <tr>
    <td colspan='2' align='center'>Pronto nos pondrémos en contacto Mexifilter.</td>
  </tr>
</table>";  
$msg=$plantilla;

$mail->setFrom = 'sender@mexifilter.com';
$mail->FromName = $_POST['nombre'];
$mail->Subject = "Formulario de Contacto Mexifilter";
$mail->addAddress('contacto@mexifilter.com');

$mail->Body = $msg;
$mail->AltBody = $msg;
  

$resEmail = $mail->Send();


if($resEmail) {
  $ok = 'ok'; 
}else{
  $ok = $mail->ErrorInfo;
}
  echo $ok; 
}else{
  echo 'Error post vacio';
}

