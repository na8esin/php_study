<?php
$list = [
['id' => 1, 'name' => 'aaa'],
['id' => 2, 'name' => 'bbb'],
['id' => 1, 'name' => 'ccc'],
['id' => 3, 'name' => 'ddd'],
];

var_dump(array_unique(array_column($list, 'id')));