PHP String In Hindi – String Functions In Hindi:- String Main Multiple Characters Hote Hain And PHP Main String Ke Liye Bahut Se String Functions Hain Jinka Istemal String Par Operation Karne Ke Liye Kiya Jata Hain 

String Characters Ka Collection Hota Hain PHP Main String Ko “Double Quotes” Main Likha Jata Hain | Double Quotes(” “) Main Likhne Ke Sath Sath String Ko Single Quotes(‘ ‘) Main Bhi Likh Sakte Hain |


<?php /*

PHP String Function In Hindi – String Functions In Hindi:- String Main Multiple Characters Hote Hain And PHP Main String Ke Liye Bahut Se String Functions Hain Jinka Istemal String Par Operation Karne Ke Liye Kiya Jata Hain |


(PHP Main String Ke Kuch Functions Bhi Hote Hian Jo Koi Tarah Ke Task Ko Pura Karne Main Istemal Kiye Jate Hain |

PHP Main String Functions Ki Baat Ki Jaye To Ye Lagbhag 70+ Hain | Lekin Ham Kuch Important Function Ko Dekhne Wale Hain)


String Function	Description

strlen()	String Ki length Ko return Karta Hain|

strtolower()	Uppercase string Ko Lowercase string Main convert Kar Deta Hain|

strtoupper()	Lowercase string Ko Uppercase string Main convert Kar Deta Hain |

str_replace()	String Main Se Kuch characters Ya substring Ko Kisi Dusre character Ya substring Se replace Kiya Jata Hain |

strcmp()	Yaha Par 2 strings Ko compare Kiya Jata Hain |

trim()	Starting Main Or Ending Ke substring Ya characters Ko trim Kiya Jata Hain |

ltrim()	left-side Matlab Starting Ke substring Ya characters Ko trim Kiya Jata Hain|

rtrim()	right-side Matlab Ending Ke substring Ya characters Ko trim Kiya Jata Hain |

ucwords()	words Ke Har Pahle character Ko lowercase Se uppercase Main convert Kar Deta Hain |

lcfirst()	string Main Se Pahla character uppercase Se lowercase Main convert Kar Deta Hain |

ucfirst()	string Main Se Pahla character lowercase Se uppercase Main convert Kar Deta Hain |

strrev()	string Ko reverse Kiya Jata Hain |

strip_tags()	string Main Se HTML tags Ko remove Kar Deta Hain|

chop()	String Ke Ending characters Ko remove Kar Deta Hain |

htmlentities()	string Main Se HTML code Ko HTML entities Main convert Kar Deta Hain |*/



<?php
String Function	Description
//strlen()	String Ki length Ko return Karta Hain|

$str = "Hello World!";
echo $str . "<br />";
$len = strlen($str);
echo "Length of String is ".$len;
?>


<?php
//strtolower()	Uppercase string Ko Lowercase string Main convert Kar Deta Hain|

$str = "Hello World!";
echo $str . "<br />";
$lower = strtolower($str);
echo "LowerCase String : ".$lower;
?>

<?php
//strtoupper()	Lowercase string Ko Uppercase string Main convert Kar Deta Hain |

$str = "Hello World!";
echo $str . "<br />";
$upper = strtoupper($str);
echo "UpperCase String : ".$upper;
?>

<?php
//str_replace()	String Main Se Kuch characters Ya substring Ko Kisi Dusre character Ya substring Se replace Kiya Jata Hain |

$str = "Hello World!";
echo $str . "<br />";
$replace = str_replace("World", "Friends", $str);
echo "Replaced String : ".$replace;
?>

<?php
//strcmp()	Yaha Par 2 strings Ko compare Kiya Jata Hain |

$compare1 = strcmp("Hello World", "Hello World");
echo $compare1 . "<br />";
$compare2 = strcmp("Hello World", "hello World");
echo $compare2 . "<br />";
$compare3 = strcmp("hello World", "Hello World");
echo $compare3 . "<br />";
?>

<?php
//trim()	Starting Main Or Ending Ke substring Ya characters Ko trim Kiya Jata Hain |

$str = "Hello World!";
echo $str . "<br />";
$tr = trim($str, "Held!");
echo $tr;
?>

<?php
//ltrim()	left-side Matlab Starting Ke substring Ya characters Ko trim Kiya Jata Hain|

$str = "Hello World!";
echo $str . "<br />";
$ltr = ltrim($str, "Held!");
echo $ltr;
?>

<?php
//rtrim()	right-side Matlab Ending Ke substring Ya characters Ko trim Kiya Jata Hain |

$str = "Hello World!";
echo $str . "<br />";
$rtr = rtrim($str, "Held!");
echo $rtr;
?>

<?php
//ucwords()	words Ke Har Pahle character Ko lowercase Se uppercase Main convert Kar Deta Hain |

$str = "hello world!";
echo $str . "<br />";
$ucw = ucwords($str);
echo $ucw;
?>

<?php
//lcfirst()	string Main Se Pahla character uppercase Se lowercase Main convert Kar Deta Hain |

$str = "Hello World!";
echo $str . "<br />";
$lcf = lcfirst($str);
echo $lcf;
?>

<?php
//ucfirst()	string Main Se Pahla character lowercase Se uppercase Main convert Kar Deta Hain |

$str = "hello world!";
echo $str . "<br />";
$ucf = ucfirst($str);
echo $ucf;
?>

<?php
//strrev()	string Ko reverse Kiya Jata Hain |

$str = "hello world!";
echo $str . "<br />";
$rev = strrev($str);
echo "Reverse String : ".$rev;
?>

<?php
//strip_tags()	string Main Se HTML tags Ko remove Kar Deta Hain|

$str = "<p><strong>Hello World!</strong></p>";
echo $str . "<br />";
$strt = strip_tags($str);
echo $strt;
?>

<?php
//chop()	String Ke Ending characters Ko remove Kar Deta Hain |

$str = "Hello World!";
echo $str . "<br />";
$ch = chop($str, "world!");
echo $ch;
?>

<?php
//htmlentities()	string Main Se HTML code Ko HTML entities Main convert Kar Deta Hain |

$str = "<p><strong>Hello World!</strong></p>";
echo $str . "
";
$ent = htmlentities($str);
echo $ent;
?>