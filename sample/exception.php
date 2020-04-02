<?php
try {
    some();
} catch (\Exception $e) {
    print_r(json_encode($e->getMessage()));
    echo PHP_EOL;
    echo PHP_EOL;
    print_r(json_encode($e->getTrace()));
    echo PHP_EOL;
    echo PHP_EOL;
    print_r(($e->getTraceAsString()));

    
}

function some ()
{
    some2();
}

function some2()
{
    throw new \Exception("hogehogehuga");
}