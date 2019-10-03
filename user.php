<?php
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */
$des = "{$green2}>{$red2}X{$green2}<";
$des1 = "{$yellow2}*";

$banner = "{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}
    .___               .___       ____   ____.___.___.___.
  __| _/____  ____   __| _/____   \   \ /   /|   |   |   |
 / __ |/ ___\/  _ \ / __ |/ __ \   \   Y   / |   |   |   |
/ /_/ \  \__(  <_> ) /_/ \  ___/    \     /  |   |   |   |
\____ |\___  >____/\____ |\___  >    \___/   |___|___|___|
     \/    \/           \/    \/
{$putih2}  Salam Damai Tuyuler Indonesia!!      {$red2}『 {$putih2}Bot Termux{$red2} 』
{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}{$des1}{$des}
{$lblue2}Dibuat Oleh {$abu2} :{$res} Anak Indonesia\n
{$lblue2}Group Tele{$abu2}  :{$res} @jancokkau990\n";

echo $banner."\n";
echo "\033[1;32mMasukkan Kode \033[1;30m:\033[1;0m ";
$result="45";
   $passw = trim(fgets(STDIN));
    if ($passw == $result){
       echo "gaspol";

    }else{
       $passw++;
       echo "\033[1;31 Kode Salah.......!\n";
exit;
}
?>
