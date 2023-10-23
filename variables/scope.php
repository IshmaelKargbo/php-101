<?php

$account_bal = 1;

function account_bal() {
    global $account_bal;

    $account_bal = $account_bal + 19000;
}

account_bal();

echo $account_bal;

$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum();

echo $b;