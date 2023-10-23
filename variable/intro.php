<?php 
/**
 * Variable
 * 
 * variable are contain that stores data which can 
 * access when needed, the way we create variable in 
 * php is by using the $ follow by the name of the variable.
 * 
 * There are convenction while creating variable 
 * 1. variable should start with a letter or _
 * 2. variable must not contain any speical character eg: #@%^&*()
 */

// create $name variable and asign 'Ishmael Kargbo'
$name = 'Ishmael Kargbo';

// echo $name will output Hello Ishmael Kargbo
echo "Hello {$name}";

// overide the value og $name
$name = 'isho';

// echo $name will output Hello ishok
echo "Hello {$name}";
