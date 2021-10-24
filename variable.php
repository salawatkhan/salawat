PHP Variables – Variables In PHP in Hindi – PHP Main Data Ko Store Karne Ke Liye Variables Ka Istemal Kiya Jata Hai Or PHP Variables Ek Tarah Ka Containers Hota Hain Jo Data Ko Information Ke Rup Main Store Karte Hain |

PHP Main Variables Ko Create Karne Ke Liye ($ dollar sign) Se Start Karte Hain |

<php
  
  // How to Create Variables in PHP
  $name = "Hello"
  echo Welcome $name ;
  
?>



PHP Main Variables Ko Create Karte Waqt Data Types Batane Ki Jarurat Nhi Hoti Hai Kyoki PHP Main Value Assign Karte Hai Waqt Complier Khud Understand Kar Leta Hain. For Example String, Integer, Float, Etc |



Variables Ko Create Karne Ke Liye All Programming Language Main Rules Hote Hain Waise Hi Rules PHP Language Main Bhi Hote Hain. In Rules Ko Hamne Niche Ek List Main Understand Kiya Hain |

PHP Main variables Ko Start Ya define Karne Ke Liye $(dollar) sign Ka Istemal Kiya Jata Hain |
Variable Ko Start Kane ke Liye numbers Ka Istemal Nhi Kiya Ja Sakta Hain|
PHP Main variable Ko letters Or underscore character Duvara Hi Start Kiya Ja Sakta Hain Kyoki underscore Ek Character Hota Hain |
Jab Bhi variable Ko create Kare To Usme Sirf alpha-numeric character(A-z, 0-9) or underscore(_) Ko Hi contain Kar Sakte Ho|
Variable case-sensitive Hote Hain Iska Matlab Ki Letter or letter Dono variable Alag-Alag Hain|




<?php
$Demo = "This is Variable String";
$demO = 40;
$dEmo = 50.5;
echo "$Demo And demo Values is $demO And dEmo Values Is $dEmo"; 
?>

PHP Variables Concatenation In Hindi
Variables Ko Concatenate Karne Ke Liye Ham ( . dot) And (+ Plus) Ka Istemal Karte Hain |

. Dot Function:- . Dot Function Ke Keval Ham String Ko Concatenate Kar Sakte Hain |

<?php
$first_name = "Danish";
$last_name = " Ali";
echo $first_name.$last_name;

?>

+ Plus Function:- + Plus Function Se Keval Ham Integer And Float Data Types Ko Add Kar Sakte Hain |


<?php
  
$value1 = 10;
$value2 = 20;
echo $value1 + $value2;

?>

PHP Variables Scope In Hindi
PHP Variables Ko Declare Kiya Jata Hain Lekin Variables Ko Kaha Acces Kiya Jaye Use Ham Variables Scope Kahte Hain |

1. Local Variable
2. Global Variable
2. Static Variable
Local Variables
Local Variables functions ke under Hote Hain| Unki visibility sirf function ke under Hoti hain, jab wo function ke bahar Aate hai tab destroy ho Jate hain|

<?php
function myTest() {
  $x = 5; // local scope
  echo "Variable x inside function is: $x";
}
myTest();

echo "Variable x outside function is: $x";
?>

Aap Upper Diye Code Ko Dekh Sakte Hain Hamne Isme Ek Function myTest() Create Kiya Or Uske Under Ek Local Scope x Variable Create Kiya Hain Or Use Function Ke Under Hi Print Kar Diya Hain And Fir Use Function Ke Bahar Function myTest() Ko Call Kiya |

Lekin myTest() Function Ke Bahar Hamne Fir Local Scope x Variable Ko Print Kiya Lekin Ye Print Nhi Hoga Ye Error Show Karenga Kyoki Local Variable x Ko Ham Function Ke Bahar Print Nhi Kar Sakte Hain | Iska Niche Output Bhi Dkiya Gaya Hain |



Global Variables
Global Variables, Function Ke bahar Hote hai | Unki visibility function Ke under or bahar Hoti Hain. Unka scope pure program par Hota hai |

PHP Install
PHP Syntax
PHP Main Variable Ko global Banane Ke Liye global Keyword Ka Istemal Kiya Jata Hain|


<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; 
?>

Static Variables
Jab Function Main Static Variable Ka Istemal Kiya Jata Hain To, Jab Func() Call Kiya Jata Hain, Tab Usme Jo Variables Hote Hain, Vo Aapni Values Ko Hold Karke Rakhte Hain Ye Variables Destroyed Nhi Hote Hain |


<html>
<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest(); echo"<br>";
myTest(); echo"<br>";
myTest();
?>

</html>