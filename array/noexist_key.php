<?php
$a = ['dateFrom'=>'2019-01-01'];

$a['date'] = $a['dateFrom'];

var_dump($a);

$b = [];
// Undefined index: noexist
$noexist = $b['noexist'];

var_dump(copyAndUnset(['dateFrom' => 'date'], $a));
var_dump(copyAndUnset(['date'=> 'dateFrom'], $a));

function copyAndUnset(array $fromTo, array $target)
{
	foreach ($fromTo as $from => $to) {
		if (!isset($target[$from])) continue;
		$target[$to] = $target[$from];
		unset($target[$from]);
	}
	return $target;
}