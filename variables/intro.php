<?php
$var = 'Bob'; // Assign the value 'Bob' to $var
$x = 5;
$state = false;

echo $var; // Output Bob
echo $x; // Output 5
echo $state; // Output false

$foo = 25;
$bar = &$foo; // This is a valid assignment.

$foo = 'Bob'; // Assign the value 'Bob' to $foo
$bar = &$foo; // Reference $foo via $bar.
$bar = "My name is $bar"; // Alter $bar...

echo $bar;
echo $foo; // $foo is altered too.

$foo = 25;
$bar = &$foo;      // This is a valid assignment.