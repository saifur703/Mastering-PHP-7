<?php 

/* 
PHP Data Types:
1. String
2. Integer
3. Float
4. Boolean
5. Array
6. Object
7. Null
8. Resource
*/

// output show by echo and printf
$name = "Earth";
echo($name);
echo $name;
echo "We're living on {$name}";

// Information about the Variable
$var1 = "Hello";
$var2 = 34.56;
$var3 = true;
var_dump($var1);
var_dump($var2,$var3);

// concatenate
$fname = "Saifur";
$lname = "Rahman";
echo "My First Name is ".$fname." and My Last Name is ".$lname."\n";

echo "My First Name is {$fname} and My Last Name is {$lname}\n";

// Printf
printf("My First Name is %s and My Last Name is %s", $fname, $lname);

// Advance topic
$fn = "Md";
$mn = "saifur";
$ln = "rahman";
printf('%3$s %2$s %1$s', $fn, $mn, $ln); // have to use single quote
// Output will be: rahman saifur Md
