<?php
$users = [
  ["id" => "1",  "name" => "watanabe", "events" =>[]],
  ["id" => "2",  "name" => "kimura", "events" =>["id"=>1]],
  ["id" => "3",  "name" => "watanabe", "events" =>["id"=>1]],
];

// watanabe ならiswatanabeを追加する
$mapped = array_map(function($user) {
  if(!empty($user["events"])) {
    $user['isWatanabe'] = $user['name'] === "watanabe"?true:false;
    return $user;
  }
},
$users
);
// mapだと値を返さないと、そこの配列が削除されるんではなく、nullに置き換わる
var_dump($mapped);