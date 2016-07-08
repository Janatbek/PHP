<?php
//buildin functions for strings.
$str = "I am, a string";


// strlen - get string length
echo strlen($str);
echo '<br/>';

// strtolower - make a string lowercase
echo strtolower($str);
echo '<br/>';

// strtoupper - make a string uppercase
echo strtoupper($str);
echo '<br/>';

// ucwords - uppercase the first character of each word in a string
echo ucwords($str);
echo '<br/>';
// str_replace - replace all occurrences of the search string with the replacement string
echo str_replace(" ", "_", $str) . "<br/>";

// stristr - find the first occurrence of a string
echo stristr($str, "am") . "<br/>";

// strpos - find the position of the first occurrence of a substring in a string

echo strpos($str, "am") . "<br/>";
// ==========================================
// buildin functions for arrays.
$myArray = array("Mike", "John", "Kelvin");


// explode - split a string
var_dump(explode( " " , $str));

// implode - joins arrays to a string
echo implode(", ", $myArray);
var_dump(implode(", ", $myArray));

//count - counts the number of rows in the array
var_dump(count($myArray));

//sort - sorts the array
var_dump(sort($myArray));
echo sort($myArray);

echo is_numeric($myArray); 

?>