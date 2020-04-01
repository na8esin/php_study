<?php
$formName = 'appoints';

$requestData = ['appoints' => ['date' => '2019']];

$data = $formName ? $requestData[$formName] : $requestData;

$data['date'] = '2018';

$some = $formName ? [$formName => $data] : $data;
//var_dump($some);
var_dump(array_merge($requestData, $formName ? [$formName => $data] : $data));

var_dump(array_merge($requestData, $some));

//var_dump(array_merge_recursive($requestData, ['appoints' => ['date' => '2017']]));
