<?php
class SomeForeach
{
  const SOME_LIST = [
    ['key'=>1],
    ['key'=>3],
    ['key'=>5],
    ['key'=>7]];

  public static function newList()
  {
    $returnList = [];
    foreach(self::SOME_LIST as $v) {
      $returnList[] = $v['key'];
    }
    return $returnList;
  }

  public static function newList2()
  {
    $returnList = [];
    foreach(self::SOME_LIST as $v) {
      $returnList[] = $v;
    }
    return $returnList;
  }
}

var_dump(SomeForeach::newList());
var_dump(SomeForeach::newList2());

class SomeForeach2
{
  const SOME_LIST = [
    ['key'=>1],
    ['key'=>3],
    ['key'=>5],
    ['key'=>7]];

  public static function newList()
  {
    return self::common(function($v) {return $v['key'];});
  }

  public static function newList2()
  {
    return self::common(function($v) {return $v;});
  }

  private static function common(callable $callback)
  {
    $returnList = [];
    foreach(self::SOME_LIST as $v) {
      $returnList[] = $callback($v);
    }
    return $returnList;
  }
}

var_dump(SomeForeach2::newList());
var_dump(SomeForeach2::newList2());
