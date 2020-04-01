<?php
class A
{
  public $agent;
  public function __set($name , $value)
  {
    throw new Exception('no exists');
  }
}

$a = new A;
$a->agent = 'ccc';
var_dump($a->agent);

$a->user = 'bbb';
var_dump($a->user);