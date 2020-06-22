<?php
try {
    some();
} catch (\Exception $e) {
    print_r($e->getMessage());
    echo PHP_EOL;
    echo PHP_EOL;
    print_r(json_encode($e->getMessage()));
    echo PHP_EOL;
    echo PHP_EOL;
    print_r(json_encode($e->getTrace()));
    echo PHP_EOL;
    echo PHP_EOL;
    print_r(($e->getTraceAsString()));
    echo PHP_EOL;
    echo PHP_EOL;
}
echo 'external try';
echo PHP_EOL;
print_r($e->getMessage());


function some()
{
    try {
        some2();
    } catch (\Exception $e) {
        throw $e;
        // こうやると例外が上書きされるけど、いっぺんに2つの例外が表示されることって一般的にないね
        //throw new \Exception("system down.");
    }
}

function some2()
{
    throw new \Exception("hogehogehuga");
}
