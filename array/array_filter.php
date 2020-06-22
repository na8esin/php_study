<?php

$arr = [
  ['id' => 1],
  ['id' => 2],
  ['id' => 3],
  ['id' => 4]
];

$specialId = 3;

// keyもそのまま帰ってくるね
var_dump(array_filter($arr, function($v, $k) use ($specialId) {
    //var_dump($v);
    return $v['id'] == $specialId;
}, ARRAY_FILTER_USE_BOTH));
/*
array(1) {
  [2]=>
  array(1) {
    ["id"]=>
    int(3)
  }
}
*/