PHP Operators In Hindi:- PHP Operators Ka Istemal Variable Ko operate Karne Ke Liye Kiya Jata Hain And PHP Main Koi Types Ke Operators Hote Hain |

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators


Waise To Har Programming Language Main Operators Ka Istemal Kiya Hain Lekin PHP Main Bas Kuch Difference Ke Sath Operators Ka Istemal Hota Hain |


PHP Arithmetic operators in Hindi
Arithmetic Operators Ka Istemal numeric values Ko arithmetical operations Ke Sath Istemal Kiya Hain – such as addition, subtraction, multiplication etc.

Operator	Name	Example	Result
+	Addition	$x + $y	Sum of $x and $y
–	Subtraction	$x – $y	Difference of $x and $y
*	Multiplication	$x * $y	Product of $x and $y
/	Division	$x / $y	Quotient of $x and $y
%	Modulus	$x % $y	Remainder of $x divided by $y
**	Exponentiation	$x ** $y	Result of raising $x to the $y’th power


<?php
$x = 10;
$y = 20;

  echo $x + $y; 
  echo "<br>";
  echo $x - $y;
  echo "<br>";
  echo $x * $y;
  echo "<br>";
  echo $x / $y;
  echo "<br>";
  echo $x % $y;
  echo "<br>";
  echo $x ** $y;

?>


PHP Assignment operators in Hindi
Assignment Operators Ka Ham Variable Main Value Assign Karne Ke Liye Istemal karte Hain |


Assignment	Same as…	Description
x = y	x = y	The left operand gets set to the value of the expression on the right
x += y	x = x + y	Addition
x -= y	x = x – y	Subtraction
x *= y	x = x * y	Multiplication
x /= y	x = x / y	Division
x %= y	x = x % y	Modulus


<?php

$x = 10;
$y = 20;

  echo $x = $y; 
  echo "<br>";
  echo $x = $x + $y;
  echo "<br>";
  echo $x = $x - $y;
  echo "<br>";
  echo $x = $x * $y;
  echo "<br>";
  echo $x = $x / $y;
  echo "<br>";
  echo $x = $x % $y;
  echo "<br>";


?>

PHP Comparison operators in Hindi
Comparison Operators Ka Istemal Two Values Ko Compare Karne Ke Liye Kiya Jata Hain – ( Number , String ) |


Operator	Name	Example	Result
==	Equal	$x == $y	Returns true if $x is equal to $y
===	Identical	$x === $y	Returns true if $x is equal to $y
!=	Not equal	$x != $y	Returns true if $x is not equal to $y
<>	Not equal	$x <> $y	Returns true if $x is not equal to $y
!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or Ye Same Type Ke Nhi Hain
>	Greater than	$x > $y	Returns true if $x is greater than $y
<	Less than	$x < $y	Returns true if $x is less than $y
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y
<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y
<=>	Spaceship	$x <=> $y


PHP Increment/Decrement operators in Hindi
PHP increment operatos ka istemal variable ki value ko increment karne ke liye Istemal Kiya Jata Hain |

PHP Decrement operatos ka istemal variable ki value ko Decrement karne ke liye Istemal Kiya Jata Hain |

Operator	Name	Description
++$x	Pre-increment	Increments $x by one, then returns $x
$x++	Post-increment	Returns $x, then increments $x by one
–$x	Pre-decrement	Decrements $x by one, then returns $x
$x–	Post-decrement	Returns $x, then decrements $x by one

<?php

$x = 10;

  echo ++$x; 
  echo "<br>";
  echo $x++;
  echo "<br>";
  echo --$x;
  echo "<br>";
  echo $x--;

?>

PHP Logical Operators in Hindi
PHP Logical Operatos Ka Istemal Conditional Statements Ko Combine Karne Ke Liye Kiya Jata Hain |

Operator	Name	Example	Result
and	And	$x and $y	True if both $x and $y are true
or	Or	$x or $y	True if either $x or $y is true
xor	Xor	$x xor $y	True if either $x or $y is true, but not both
&&	And	$x && $y	True if both $x and $y are true
||	Or	$x || $y	True if either $x or $y is true
!	Not	!$x	True if $x is not true
Is Logical Operators Ko Ham Next If Else If-else Part Main Dekhne Wale Hain |

PHP String Operators in Hindi
PHP Main Strings Ke Liye Two Operators Keval Design Kiye Hain Jo Niche Diye Gaye Hain |

Operator	Name	Example	Result
.	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2
.=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1

<?php

$x = "Master";
$y = "Programing";

echo $x.$y; 
echo "<br>";

echo $x.=$y; 
echo "<br>";

?>

PHP Array Operators in Hindi
PHP Array Operators Ka Istemal Arrays Ko Compare Karne Ke Liye Kiya Jata Hain |

Operator	Name	Example	Result
+	Union	$x + $y	Union of $x and $y
==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs
===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types
!=	Inequality	$x != $y	Returns true if $x is not equal to $y
<>	Inequality	$x <> $y	Returns true if $x is not equal to $y
!==	Non-identity	$x !== $y	Returns true if $x is not identical to $y
