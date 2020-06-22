<?php
const KEYMAP = [
        'date' => 'dateFrom',
        'timeTo' => 'dateToHhmm',
        'timeFrom' => 'dateFromHhmm'
    ];

// 変換しなくていい関係ないデータがあるとなー。
$data = [
  'date' => '2020-05-18',
  'timeTo' => '10:00',
  'timeFrom' => '09:00'
  'id' => 1
]

// keyが取れないからなー
array_map(
  function($e) {
    var_dump($e);
  }
  ,KEYMAP);

// $dataの配列の数が一致しないから使えない
// そうなるとfilterとかしないといけないけどラムダが使えないバージョンだとつらい
array_map(
  function($key, $value) {
    []
  }
  ,array_keys(KEYMAP), array_values(KEYMAP), $data);