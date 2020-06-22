<?php
$users = [
  ["id" => "87",  "name" => "watanabe", "groupUser" =>["division"=>["id"=>78]]],
  ["id" => "87",  "name" => "watanabe", "groupUser" =>["division"=>["id"=>24]]],
  ["id" => "3",   "name" => "kimura",   "groupUser" =>["division"=>["id"=>78]]],
];

$reduced = array_reduce(
  $users,
  function($carry, $user) {
    $userId = $user["id"];
    $find = array_filter($carry, function($e) use($userId) {
      //print_r($e["id"]);
      return $e["id"] === $userId;
    });

    $group = $user["groupUser"]["division"];
    
    if($find) {
      //print_r($find);
      // すでに過去のループであった場合
      $carry[key($find)]['groups'][] = $group;
    } else {
      $user['groups'][] = $user["groupUser"]["division"];
      unset($user["groupUser"]);
      $carry[] = $user;
    }

    // carryを返さない場合があると、次のループで初期化される。たぶん
    return $carry;
  },[]);

var_dump($reduced);
/*
  ["id" => "87",  "name" => "watanabe", "groups" =>[["division_id"=>78],["division_id"=>24]]],
*/
