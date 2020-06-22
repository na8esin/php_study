<?php
$users = [
  ["id" => "1",  "name" => "watanabe", "events" =>[]],
  ["id" => "2",  "name" => "kimura", "events" =>["id"=>1]],
  ["id" => "3",  "name" => "watanabe", "events" =>["id"=>1]],
];

// watanabe ならiswatanabeを追加する
$reduced = array_reduce(
  $users,
  function($carry, $user) {
    if(!empty($user["events"])) {
      $user['isWatanabe'] = $user['name'] === "watanabe"?true:false;
      $carry[] = $user;
    }
    // carryを返さない場合があると、次のループで初期化される。たぶん
    return $carry;
  },[]);

var_dump($reduced);
/*
array(2) {
  [0]=>
  array(4) {
    ["id"]=>
    string(1) "2"
    ["name"]=>
    string(6) "kimura"
    ["events"]=>
    array(1) {
      ["id"]=>
      int(1)
    }
    ["isWatanabe"]=>
    bool(false)
  }
  [1]=>
  array(4) {
    ["id"]=>
    string(1) "3"
    ["name"]=>
    string(8) "watanabe"
    ["events"]=>
    array(1) {
      ["id"]=>
      int(1)
    }
    ["isWatanabe"]=>
    bool(true)
  }
}
*/
