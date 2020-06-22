<?php
$dateString = '2039-01-01';
$format = 'Y-m-d H:i:s';
 
// UNIXタイムスタンプに変換
$date = strtotime( $dateString );
 
/// フォーマットして表示
echo date($format, $date);
?>