<?php

/*
Variables are "containers" for storing information.

Creating (Declaring) a variable starts with the $ sign, followed by the name of the variable

A variable can have a short name (like x and y) or a more descriptive name (age, product, account_balance).

While creating a variable there are set of rules we need to maintain:
- A variable starts with the $ sign, followed by the name of the variable
- A variable name must start with a letter or the underscore character
- A variable name cannot start with a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variable names are case-sensitive ($age and $AGE are two different variables)
*/
$say_hello = "Hello world!";
$x = 7;
$y = 19.5;

/*
After the execution of the statements above, the variable $say_hello will hold the value Hello world!,
the variable $x will hold the value 7, and the variable $y will hold the value 19.5.

Note: When you assign a text value to a variable, put quotes around the value we can use ' or " bot will work fine.

Note: Unlike other programming languages, PHP has no command for declaring a variable. 
It is created the moment you first assign a value to it.

Output Variables

The echo statement is often used to output data to the screen.
*/

// Output the data that was stored in the say_hello variable
echo $say_hello;

// Output the sum of two variables x and y
echo $x + $y;

// Create a $name variable
$name = "Ishmael";

// Output text concatenate with the $name variable
echo "Hello " . $name . "!";