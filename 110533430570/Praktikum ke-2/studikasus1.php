<?php

function greeting()
{
$day=date("H : i");
if ($day>=00 and $day<11){
echo "Selamat Pagi..";
} else if($day>=11 and $day<15){
echo "Selamat siang..";
}else if($day>=15 and $day<19){
echo "Selamat sore..";
}else if($day>=19 and $day<24){
echo "Selamat malam..";
}else echo "Waktu salah..";
}
?>

<?php
greeting();
?>