<?php


//this is how u print text
 echo 'hello world';
 //line break
 echo '<br>';
//declare var
 $myvar = 'Some Text i want to store in a variable';
//diff between ' and "
 echo '$myvar';
 echo '<br>';
 echo "$myvar";

 //this is an example of php arrays
 //declare array
 $myarray = array();

//take the value push it into the array
 $myarray[] = 'some value 1';
 $myarray[] = 'some value 2';
 $myarray[] = 'some value 3';

//print_r is use to see to view/look inside of an obj or an array
// u'll always looking inside the array/obj
// when u use print_r use view page source in the browser to understand

print_r($myarray);
//Assoc = associative array
//nested array
$myAssoc = array('value' => $myarray, 'value2' => $myarray);
echo '<br>';
print_r($myAssoc);

















// print = echo

 
 ?>
