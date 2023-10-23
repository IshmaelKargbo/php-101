<?php
function test()
{
    static $a = 0;
    echo $a;
    $a++;
}

test();
echo ",";
test();
echo ",";
test();