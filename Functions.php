<?php

/*variable, anaonymous & arrow functions*/

function sum(int|float...$numbers){
    return array_sum($numbers);
}

$x = 'sum';
 if(is_callable($x)) {
     echo $x(1, 2, 3, 4);
 }
 else{
     echo 'Not callable';
 }

 #Anonymous functions (Lambdas)

$x = 1;
$sum= function (int|float...$numbers)use ($x): int|float{
    return array_sum($numbers);
};

$x = 'sum';
if(is_callable($x)) {
    echo $x(1, 2, 3, 4);
}
else{
    echo 'Not callable';
}


$array =[1,2,3,4];

$array2 = array_map (function($element){  #option 1
    return $element * 2;
}, $array);

$x = function($element) {
    return $element * 3;
};

$array3= array_map ($x,$array);

function foo($element): float|int
{
    return $element * 4;
}

$array4= array_map ('foo',$array);



echo '<pre>';
print_r($array);

print_r($array2);

print_r($array3);

print_r($array4);

echo '</pre>';

$sum= function (callable $callback, int|float...$numbers): int|float{
    return $callback(array_sum($numbers));
};

echo $sum(function($element){
    return $element * 2;
}, 1,2,3,4);

# arrow function

$sarray = [1, 2, 3, 4];

$array2= array_map(function($number){
    return $number *  $number;
}, $array);

$array3=array_map(fn($number)=> $number*$number, $array);


echo '<pre>';
print_r ($array);

print_r ($array2);

print_r ($array3);
echo '</pre>';




