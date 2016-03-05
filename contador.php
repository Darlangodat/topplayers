<?php  
$data_atual = date(‘d-m-Y h:i:s’);
$data_final = date(‘2016-04-29’);

$diferenca = strtotime($data_final) – strtotime($data_atual);

echo ($diferenca >= 0) ? $diferenca : 0;
?>