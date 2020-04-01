<?php
$a = 'demo';
$b = ($a=='demo') ?: 'default'; //trueが返る。$a=='demo'そのもの
var_dump($b);

$b = ($a) ?: 'default'; // demoが返る
var_dump($b);