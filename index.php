<?php


//this is how u print text
 echo 'hello world';
 //line break
 echo '<br>';
//declare var
 $myvar = 'Some Text i want to store in a variable <br>';
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


// to print out array of specified value of array
print_r($myAssoc ['value1']);

// this is how to define a class in php
class myclass{
// a class has properties
// 3 properties

//public are external to use properties outside of the class
// can use out side the class
//can be accessed outside the obj
public $myPublic;

// private is hidden and only useable for myPrivate
//cannot use outside the class
private $myPrivate;

// in between public and private but cannot use outside the class
protected $myProtected;

// the construct is method inside a class then method
// outside the class then function
public function __construct() {
//this is the internal refrence to the object within a class
$this->myPublic = 1;
$this->myprivate = 2;
$this->myProtected = 3;

// this is how u call a method and pass it to value/var
$this->sayHello('Dan');
}
//method
public function sayHello($name){
echo 'Hello' .$name;

}
// this is how you instanciated(take the class put and turn it into an obj) an object

// a class is a scamatics(blueprint)to an obj
  }
  $obj = new myclass;

  print_r($obj);

//for loop
//take each element from myassoc and send it to link 
foreach($myAssoc as $link ){
  foreach($link as $key => $value){
  echo $key. ' ' . $value . "\n";
  }
}









// print = echo

 // write a program that take array and make it into a table.
 ?>
