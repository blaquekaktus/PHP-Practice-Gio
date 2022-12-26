<?php

#Data types and type casting
#scalar types
    #bool
    #int
    #float
    #string

#compound types
    #array
    $company = [1,2,3,0.5, -9.2, true,'a', 'b'];
    print_r($company);
    #object
    #callable
    #iterable

#special types
    #resource
    #null

#echo gettype(variable) returns the variable type
#  var_dump(variable) prints everything known about the variable

    function sum ($x, $y){
        return $x +$y;
    }
    echo '<br />'.sum(3,4);

    #integers

    #Decimal (base 10) 0 1 2 3 4 5 6 7 8 9
    $x=42;
    var_dump($x);
    echo '<br />'.$x.'<br />';

    #Hexadecimal (base 16)  0 1 2 3 4 5 6 7 8 9 A B C D E F
    #Hexadecimal numbers are written starting with 0x
    $x= 0x2A;
    var_dump($x);
    echo '<br />'.$x.' is written as 0x2A as a Hexadecimal number (base 16) <br />';

    #Octal (base 8)  0 1 2 3 4 5 6 7
    #Hexadecimal numbers are written starting with 0
    $x=052;
    var_dump($x);
    echo '<br />'.$x.' is written as 052 in Octal (base 8) <br />';

    #Binary (base 2)  0 1
    #Hexadecimal numbers are written starting with 0b
    $x=0b101010;
    var_dump($x);
    echo '<br />'.$x.' is written as 0b101010 in Binary (base 2) <br />';
    echo '<br/>';

    $x= PHP_INT_MAX;
    echo ($x);
    echo '<br/>';

    $x= PHP_INT_MAX +1;
    var_dump($x);
    echo '<br/>';

    $x= (int)PHP_INT_MAX ;
    var_dump($x);
    echo '<br/>';

    #Strings

    $family_name = 'Lechner';
    $mom_name = "Sonja $family_name";   // variables can be referenced inside double quotes
    $son_name =  "Jason $family_name";
    $daughter1_name = "Josan $family_name";
    $daughter2_name = "Susan-Jolie $family_name";

    echo '<br/>';
    echo $mom_name.'<br/>'.$son_name.'<br/>'.$daughter1_name.'<br/>'.$daughter2_name;
    echo '<br/>';
    echo $family_name[2].'<br/>';
    $family_name[1]='a';
    echo $family_name.'<br/>';
    $family_name[-2]='a';
    echo $family_name[-2].'<br/>';
    echo $family_name.'<br/>';


    $x = 2;
    $y = 5;
    //Heredoc
    $text = <<<TEXT
    This is an example
    of heredoc,
    something I dont really understand
    $x
    $y
    TEXT;

    echo '<br/>'.$text;
    echo '<br/>'.nl2br($text); #nl2br converts new line (\n) to html break(<br/>) element



    //Nowdoc does now allow variables to be rendered properly

    $text = <<<'TEXT'
        This is an example
        of nowdoc,
        something I dont really understand
        but now doc does not allow variables to be displayed as values
        $x
        $y
        TEXT;

    echo '<br/>'.$text;
    echo '<br/>'.nl2br($text); #nl2br converts new line (\n) to html break(<br/>) element

    //NULL

    $z=123;
    var_dump($z);
    unset($z);
    //var_dump($z);
    $x=null;
    var_dump((array) $x);



    //Arrays

$programmingLanguage1 = 'PHP';
$programmingLanguage2 = 'Java';
$programmingLanguage3 = 'Python';

$programmingLanguages = ['Java', 'PHP', 'Python'];
echo '<br/>';
echo $programmingLanguages[0];
echo '<br/>';
var_dump($programmingLanguages);
echo '<br/>';
$programmingLanguages[3] = 'C++'; //add a new element to an array at a a specific index;
array_push($programmingLanguages, 'Ruby', 'C#','R'); //push an new element to an array at the end;
$programmingLanguages[] = 'Go'; //push a new element to the end of an array
var_dump($programmingLanguages);
echo '<br/>';
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';
echo '<br/>';
echo count($programmingLanguages);
echo '<br/>';
echo $programmingLanguages [] = 'Javascript';
echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$programmingLanguages2 = [
    'Python'=>[
        'creator'=>'Guido von Rossum',
        'extension'=>'.py',
        'website'=>'www.python.org',
        'isOpenSource'=>true,
        'versions'=>[
            ['version'=>3.9, 'releaseDate'=>'Oct 5, 2020'],
            ['version'=>3.8,'releaseDate'=>'Oct 14,2019']
        ]
    ],
    'PHP'=>[
        'creator'=>'Rasmus Lerdorf',
        'extension'=>'.php',
        'website'=>'www.php.net',
        'isOpenSource'=>true,
        'versions'=>[
            ['version'=>8.0, 'releaseDate'=>'Nov 26, 2020'],
            ['version'=>7.4,'releaseDate'=>'Nov 28, 2019']
        ]
    ]
];
echo '<pre>';
print_r($programmingLanguages2);
echo '</pre>';

echo $programmingLanguages2['PHP']['versions'][1]['releaseDate'];
//array_pop(Arrayname) removes the last element of the array

//array_shift(Arrayname) removes the first element of the array and reindexes the array

//unset (arrayName []) removes the element at the specified index without reindexing

#array_key_exists(key, arrayname) checks is a key exist in an array

//isset(arrayname[key]) checks if a key exists in array and has a value


//EXPRESSIONS

echo '<br/>';
 $x=15;
 $y=4;
 $z='4';
 $t=0;
 var_dump($x + $y);
 echo '<br/>';
var_dump($x - $y);
echo '<br/>';
var_dump($x / $y);
echo '<br/>';
var_dump($x % $y);
echo '<br/>';
var_dump($x * $y);
echo '<br/>';
var_dump($x ** $y);

echo '<br/>';
var_dump($x + $z);
echo '<br/>';
var_dump($x + (+$z));
echo '<br/>';
var_dump($x + (-$z));
echo '<br/>';
var_dump($x - $y);
echo '<br/>';
var_dump(fdiv($x , $t));
echo '<br/>';
//var_dump($x / $t);
echo '<br/>';
var_dump($x % $z);
echo '<br/>';
var_dump($x * $z);
echo '<br/>';
var_dump($x ** $z);
echo '<br/>';


#comparison operators return booleans (bool) types

$x=5;
$y='5';
$z=10;
var_dump($x == $y);     //returns true - loose comparison checks if the values are the same (string is converted to int)
echo '<br/>';
var_dump($x === $y);    // returns false - strict comparison where the data type is also checked along with the value
echo '<br/>';
var_dump($x != $y);     // returns false because the values are the same
echo '<br/>';
var_dump($x !== $y);    // returns true because of the strict comparison and diff data types
echo '<br/>';
var_dump($x <= $z);     //returns  false
echo '<br/>';
var_dump($x >= $z);     //returns true
echo '<br/>';
var_dump($x <=> $z);    //returns an INTEGER (not bool) 0 if x= z, -1 if x is less than z and 1 if x is more than z
echo '<br/>';


$s='Hello World';
$t=strpos($s, 'e');     //The strpos() function finds the position of the first occurrence of a string or character inside another string
if($y == false){                //safer to use if($y === false) because if the index is 0, this could lead to wron
    echo 'e not found';
}else{
    echo 'e found at index '.$t. 'in String: '.$s;
}
echo '<br/>';
$result = $y === false? 'e not found':'e found at index '.$t. 'in String: '.$s;
echo $result;
echo '<br/>';


$target = 1;
$start = 3;

switch ($target) {
    case $start - 1:
        print "A";
        break;
    case $start - 2:
        print "B";
        break;
    case $start - 3:
        print "C";
        break;
    case $start - 4:
        print "D";
        break;
}
echo '<br/>';

$x=null;
$z = 'Hi';
$y=$x ?? 'Hello';
var_dump($y);
echo '<br/>';
$y=$z ?? 'Hello';
var_dump($y);
echo '<br/>';
