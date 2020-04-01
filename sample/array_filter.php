<?php

$arr = [
  ['id' => 1],
  ['id' => 2],
  ['id' => 3],
  ['id' => 4]
];

$specialId = 1;

var_dump(array_filter($arr, function($v, $k) use ($specialId) {
    //var_dump($v);
    return $v['id'] == $specialId;
}, ARRAY_FILTER_USE_BOTH));