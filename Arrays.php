<?php
$items = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4,'e'=>5];

echo '<pre>';
print_r (array_chunk($items,3)).'<br/>';
echo '<pre>';

$array1= ['a', 'b', 'c'];
$array2= [1,2,3];

echo '<pre>';
print_r(array_combine($array1, $array2)).'<br/>';
echo '<pre>';
