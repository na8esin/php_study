<?php
$start    = new DateTime('2019-11-01');
$end      = new DateTime('2019-12-01');
$interval = new DateInterval('P1D');

$period = new DatePeriod($start, $interval, $end);

foreach ($period as $datetime) {
    echo $datetime->format('Y/m/d');
    echo "\n";
}