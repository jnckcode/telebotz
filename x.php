<?php
$token="5568317626:AAHdV-0FrwM45t0FnMFIUbrKoTKkz9US2Bg";
$path = "https://api.telegram.org/bot".$GLOBALS['token'];
$update = json_decode(file_get_contents("php://input"), TRUE);

$chatid = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

function Send($chatid,$reply){
	//$api = "https://api.telegram.org/bot5568317626:AAHdV-0FrwM45t0FnMFIUbrKoTKkz9US2Bg";
	file_get_contents($GLOBALS['path']."/sendmessage?chat_id=$chatid&text=$reply&parse_mode=HTML");
}
//========> end Of Mechanism <=========

//Start & Command list
if (strpos($message, "/start") === 0) {
$gretz= "<i>Hello bitch,%0AHere you go ! use /cmd to see the Command List.</i>";
Send($chatid,"<i>$gretz</i>");
}
if (strpos($message, "/cmd") === 0) {
$cmd="<i>/start - Starting bot service.%0A/cmd - Command list.%0A/encode64 - Base64 encode.%0A/decode64 - Base64 decode.%0A/binhex - Convert bin to hex.%0A/hexbin - Convert hex to bin.%0A/mail - Fakemail generator.%0A/ccleaner - Ccleaner Key PC version.%0A/winrar - Winrar Key PC version.%0A/revo - RevoUninstaller Key.%0A/notes - Check Notes.%0A%0ACreated By Jnckteam </i>";
Send($chatid,"<i>$cmd</i>");
}

//Base64
if (strpos($message, "/encode64") === 0) {
$enc64= substr($message, 10);
$en64=base64_encode($enc64);
Send($chatid,"<i>$en64</i>");
}
if (strpos($message, "/decode64") === 0) {
$dec64= substr($message, 10);
$de64=base64_decode($dec64);
Send($chatid,"<i>$de64</i>");
}

//BinHex
if (strpos($message, "/binhex") === 0) {
$bnhx= substr($message, 8);
$binhex= bin2hex($bnhx);
Send($chatid,"<i>$binhex</i>");
}
if (strpos($message, "/hexbin") === 0) {
$hxbn= substr($message, 8);
$hexbin= hex2bin($hxbn);
Send($chatid,"<i>$hexbin</i>");
}

//Notes&Quote
if (strpos($message, "/notes") === 0) {
$notes=file_get_contents('http://safeyour.000webhostapp.com/file/629adc5242425.txt');
Send($chatid,"<i>$notes</i>");
}

//Key
if (strpos($message, "/ccleaner") === 0) {
for ($i=0; $i < 1; $i++) {
$id1=substr(str_shuffle('ABC123GHIJKLMNOPQRSTUVWXYZDEF456789'), 0,4);
$id2=substr(str_shuffle('123456GHIJKLMNOPQRSTUVWXYZABCDEF789'), 0,4);
$id3=substr(str_shuffle('ABCDEFGHI34567OPQRSTUVWXYZ12JKLMN89'), 0,4);
$id4=substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'), 0,1);
   $pattern="C2YW-$id1-$id2-$id3-$id4"."ZPC";
Send($chatid,"<i>$pattern</i>");
}
}

if (strpos($message, "/winrar") === 0) {
for ($i=0; $i < 1; $i++) {
$w1=substr(str_shuffle('ABC123GHIJKLMNOPQRSTUVWXYZDEF456789'), 0,5);
$w2=substr(str_shuffle('123456GHIJKLMNOPQRSTUVWXYZABCDEF789'), 0,5);
$w3=substr(str_shuffle('ABCDEFGHI34567OPQRSTUVWXYZ12JKLMN89'), 0,5);
$w4=substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'), 0,5);
$w5=substr(str_shuffle('A1B2C3D4EF5G67HIJKLMNOPQRSTU890VWXYZ'),0,5);
   $winrar="$w1-$w2-$w3-$w4-$w5";
Send($chatid,"<i>$winrar</i>");
}
}

if (strpos($message, "/revo") === 0) {
for ($i=0; $i < 1; $i++) {
$r1=substr(str_shuffle('ABC123GHIJKLMNOPQ0RSTUVWXYZDEF456789'), 0,5);
$r2=substr(str_shuffle('123456GHIJKL0MNOPQRSTUVWXYZABCDEF789'), 0,5);
$r3=substr(str_shuffle('ABCDEFGHI34567OPQRS0TUVWXYZ12JKLMN89'), 0,5);
$r4=substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVW0XYZ123456789'), 0,5);
$r5=substr(str_shuffle('A1B2C3D4EF5G67HIJKLMNOPQRSTU890VWXYZ'),0,5);
   $revo="$r1-$r2-$r3-$r4-$r5";
Send($chatid,"<i>$revo</i>");
}
}

//Mail
if (strpos($message, "/mail") === 0) {
for ($i=0; $i < 1; $i++){ 
	$name=substr(str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890'),0,6);
	$mail=array("@emvil.com","@eluvit.com","@lohpcn.com","@readof.site","@ffo.kr","@txtee.site","@lovebite.net","@4su.one");
	$result=$name.$mail[array_rand($mail)]; //For CLi
	Send($chatid,"<i>https://generator.email/$result</i>");
}
}

/*
Credits :
Reza andrian firnanda @ Jnckcode 2022
Telegram Bot v2.1 {BuildName: Nezuko-chan v2.1-06-06-2022}
*/
?>