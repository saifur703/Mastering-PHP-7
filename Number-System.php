
<?php    

/* 
Number System
--------------
1. Decimal
2. Binary
3. Octal
4. Hexadecimal

Base
-------
Decimal = 10
Binary = 2
Octal = 8
Hexadecimal = 16

Number
-------
Decimal: 0,1,2,3,4,5,6,7,8,9
Binary: 0,1
Octal: 0,1,2,3,4,5,6,7
Decimal: 0,1,2,3,4,5,6,7,8,9, A(10), B(11), C(12), D(13), E(14), F(15)

Start with
-----------
Binary: 0b || 0B
Octal: 01
Hexadecimal: 0x || 0X

Output
-------
Decimal: %d
Binary: %b
Octal: %o
Hexadecimal: %x || %X
*/

// Example:

$n = 0b10;
$n2 = 013;
$n3 = 0x3;
printf("Decimal = %d\n", $n3);
printf("Binary = %0b\n", $n);
printf("Octal = %o\n", $n);
printf("Hexa Decimal = %X\n", $n);

