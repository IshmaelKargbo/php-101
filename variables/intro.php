<?php

/*
Variables in PHP are represented by a dollar sign followed by the name of the variable. 

The variable name is case-sensitive.

Variable names follow the same rules as other labels in PHP. 
A valid variable name starts with a letter or underscore, followed by any number of letters,
numbers, or underscores. As a regular expression, it would be expressed thus: ^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$
A variable can have a short name (like x and y) or a more descriptive name (age, product, account_balance).
*/
$var = 'Bob';
$Var = 'Joe';

echo "$var, $Var";      // outputs "Bob, Joe"

$4site = 'not yet';     // invalid; starts with a number
$_4site = 'not yet';    // valid; starts with an underscore
$täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.

/*
By default, variables are always assigned by value. That is to say, 
when you assign an expression to a variable, the entire value of the 
original expression is copied into the destination variable. 

This means, for instance, that after assigning one variable's value to another, 
changing one of those variables will have no effect on the other.

PHP also offers another way to assign values to variables: assign by reference. 
This means that the new variable simply references (in other words, "becomes an alias for"
or "points to") the original variable. Changes to the new variable affect the original, and vice versa.

To assign by reference, simply prepend an ampersand (&) to the beginning of the variable
which is being assigned (the source variable). For instance, the following code snippet 
outputs 'My name is Bob' twice:
*/

$foo = 'Bob';              // Assign the value 'Bob' to $foo
$bar = &$foo;              // Reference $foo via $bar.
$bar = "My name is $bar";  // Alter $bar...
echo $bar;
echo $foo;                 // $foo is altered too.

// One important thing to note is that only named variables may be assigned by reference.

$foo = 25;
$bar = &$foo;      // This is a valid assignment.
$bar = &(24 * 7);  // Invalid; references an unnamed expression.

function test()
{
   return 25;
}

$bar = &test();    // Invalid.