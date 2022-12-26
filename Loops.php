<?php
declare(strict_types=1); #means that types must be adhered to

#LOOPS

#While loops

$i = 0;
$x = 0;
while($i <= 15){
    $i++;
    echo $i.', ' ;

}
echo'<br />';
while (true){
    if ($x >= 15){
        break;
    }
    echo $x++.', ';

}

 /** functions */

function foo(int|float $x, int | float $y = 10): int| float{ //y is an optional parameter. If no value is entered. The value 10 is assigned to $y
    return $x * $y;
}

echo'<br />';
echo foo(3, 5);

echo'<br />';
echo foo(3.0, 5);

echo'<br />';

function foo2(int | float &$x, int &$y): int| float{  #parameters called by reference
    if($x % 2 === 0){
        $x/= 2;
    }
    return $x * $y;
}

$a = 4;
$b = 12;

echo foo2($a, $b).'<br />';
echo $a.'<br />';

function sum(...$numbers){      #...$numbers, sets an undefined amount of parameters
    return array_sum($numbers); #calls a built in function that adds up numbers in an array
}

echo sum($a, $b, 5, 45, 76, 34, 23).'</br>';

setcookie(name:'cookie', value:'set',httponly: true );


#variable scopes
function getvalue(){

   static $value = null;
   if ($value===null){
       $value=expensiveFunction();
   }
    return $value;

}

function expensiveFunction(){
    sleep(2);
    return 10;
}

echo getvalue().'<br/>';
echo getvalue().'<br/>';
echo getvalue().'<br/>';