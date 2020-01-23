<?php

date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');
echo "<hr>";

$date = date('Y-m-d'); //DATE
$datetime = date('Y-m-d H:i:s');
echo $datetime;
echo "<br>";
echo time();

$time = time();
echo "<br>";

echo date ('d/m/Y', $time);


//MKTIME
echo "<br>";

$data_pagamento = mktime(15,30,00,02,15,2023);
echo date('d/m - h:i',$data_pagamento);

echo "<br>";

//strtotime
$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y', $data);