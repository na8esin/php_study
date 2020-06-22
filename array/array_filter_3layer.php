<?php

$arr = [
  "2020/05/02"=>[
    ["id"=> 17,"login_id"=> "demo1", "events"=>["db_conf_name"=>"test"]],
    ["id"=> 18,"login_id"=> "demo1", "events"=>[]],
    ["id"=> 19,"login_id"=> "demo1", "events"=>["db_conf_name"=>"test"]],
  ],
  "2020/05/03"=>[
    ["id"=> 17,"login_id"=> "demo1", "events"=>[]],
    ["id"=> 18,"login_id"=> "demo1", "events"=>[]],
  ]
];

$specialId = 1;


$new = array_filter($arr, function($users, $date) use ($specialId) {
    $ret = array_filter($users, function($user, $k2) {
      if(!empty($user["events"])) return $user;
    }, ARRAY_FILTER_USE_BOTH);
//    var_dump($ret);
    if (!empty($ret)) return $ret;
}, ARRAY_FILTER_USE_BOTH);

// filterだと中の配列が消せない
//var_dump($new);

// 素直にforeach
$new2=[];
foreach($arr as $date => $users ) {
  $ret = array_filter($users, function($user, $k2) {
      if(!empty($user["events"])) return $user;
    }, ARRAY_FILTER_USE_BOTH);
  if(!empty($ret)) $new2[] = ["date" => $date, "users" => array_values($ret)];
}

var_dump($new2);
//var_dump(json_encode($new2));

