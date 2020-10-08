<?php
// echo date('d/m/Y',strtotime('first date of this month'));
// echo ":";
// echo date('m/d/Y',strtotime('-1 Saturday'));

// $date ="32/32/2020";

// $result = explode("/",$date);

// echo strtotime("32/32/2020");


// var_dump (checkdate($result[1],$result[0],$result[2]));

$waktu=date_default_timezone_set('Asia/Jakarta');
$waktu=date("H:i:s:s d/m/Y");

echo $waktu;


?>