PHP Data Types In Hindi:- Data Types Ko Variables Ki Value Ko Store Karne Ke Liye Istemal Kiya Jata Hain Ye Data Types Sabhi Programming Language Main Hote Hain 

Variable Main Value Ko Store Karne Ke Liye Ham Data Types Ka Istemal Karte Hain. Variable Main Ham Kisi Bhi Data Types Ki Value Ko Store Kar Sakte Hain. PHP Main Data Types Koi Types Ke Hote Hain For Example:

String
Integer
Float (Floating point numbers )
Boolean (true or false)
Array
Object
NULL
Resource
String Data Type in Hindi
String Characters Ka Collection Hota Hain And Ek String Koi Tarah Ke Characters Se Bani Ho Sakti Hain. String Main Numbers Nhi Aate Hain And Jo Data Type Bina Number ke Word Main Istemal Ki Jati Hai Use Hi String Data Type Kahte Hain. String Ko “Double Quotes” And ‘Single Quotes’ Ke Under Likhi Jati Hain.


<?php
$first_name="Danish";
$last_name=' Ali';
echo $first_name;
echo $last_name;
?>

Integer Data Type in Hindi
PHP Integer Data Type Non-Decimal Number Hote Hain And Non-Decimal Ka Matlab Hota Hain Jin Numbers Main Kabhi Decimal Nhi Aati Hain. Integer Data Type Positive And Negative Bhi Hote Sakte Hain |


<?php
  $number = 10000;
  echo $number;
?>

Float Data Type Decimal Number Hote Hain And PHP Float Data Type Floating Point Number Ke Liye Istemal Kiye Jate Main |

<?php
  $float_number = 12.23;
   echo $float_number;
?>


Boolean Data Type in Hindi
Boolean Data Type 2 Status Ko Represent Karta Hain Ya to TRUE ya FALSE | Boolean Se Matlab true and false Se Hota Hain Jisme Ya to Value True Hoti hai ya False |

$x = true;
$y = false;



Array Data Type in Hindi
Array Ek Same Data Items Ka Ek Collection Hain. Array Ka Istemal Bahut Sare Data Values Ko Ek Variable Main Store Karne Main Kiya Jata Hain | Array Ke Under Ham Multiple Data Ko Aashani Se Store Kar And Uska Istemal Kar Sakte Hain |

<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

Objects Data Type in Hindi
PHP Object Ek Type ka Data Hain Jo Ki Data Or Information Ko Store Karke Rakhta Hain Jiske Duvara Function Ki Functionality Ko Access Kiya Ja Sakta Hain |



<?php
class Laptop {
    function Laptop() {
        $this->model = "MasterPrograming.com";
    }
}

// create an new object
$b = new Laptop ();

// Show all properties 
echo $b->model;
?>


NULL Data Type in Hindi
Null Variable Ek Tarah Ka Variable Hota Hain Jise Koi Value Nhi Di Jati Hain And Null Ek Special Data Type Hain Jiski Keval Ek Hi Value Hoti Hain |

<?php
$num = null;
echo $num;
?>

Resource Data Type in Hindi
PHP Main Different Type Ke Data Jaise Integer, Double, String Etc. Ye Sab Resource Data Types Ki List Main Aate Hain |