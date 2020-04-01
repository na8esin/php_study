<?php
$classificationKeyValue = ['C001'=>['vvvv'=>'hogehoge']];
$classification_code = 'C001';
$value = 'vvvv';

var_dump(target($classificationKeyValue, $classification_code, $value));
var_dump(target($classificationKeyValue, $classification_code));
var_dump(target($classificationKeyValue));
var_dump(target($classificationKeyValue, '', 'vvvv'));

function target($classificationKeyValue, $classification_code = '', $value = null)
{
  if (isset($classificationKeyValue[$classification_code])) {
    $value = $value ? $classificationKeyValue[$classification_code][$value] : '';
  }
  return $value;
}
