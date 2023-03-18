<?php
echo '1) ';
$arr = [0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5];
echo $arr [count($arr) - 1]; 

//1
echo '<br>задание 1<br>';
$arr = [1,2,3,4];
$arr = count($arr);
echo ($arr);


//2
echo '<br>задание 2<br>';
$arr = array(1,2,3,4,5);
if (in_array(3, $arr)) {
    echo 'нашел: 3';
}


//3
echo '<br>задание 3<br>';
$arr = [1,2,3,4,5];
$arr = array_sum($arr);
echo $arr;


//4
echo '<br>задание 4<br>';
$arr = [1,2,3,4,5];
$arr = array_sum($arr)/count($arr);
echo $arr;


//5
echo '<br>задание 5<br>';
foreach (range(1,100) as $value) {
    echo $value;
}


//6
echo '<br>задание 6<br>';
foreach (range('a','z') as $value) {
    echo $value;
}


//7
echo '<br>задание 7<br>';
echo array_sum(range(1,100));


//8
echo '<br>задание 8<br>';
$arr1 = [1,2,3];
$arr2 = ['a','b','c'];
$res = array_merge($arr1, $arr2);
print_r($res);


//9
echo '<br>задание 9<br>';
$arr = [2,2,3,4,5, 2=>1, 1=>4, 3=>5];
var_dump($arr);
$arr = array_slice($arr,1,3);
print_r($arr);


//10
echo '<br>задание 10<br>';
$arr = [1,2,3,4,5, 1=>0,2=>1,3=>2,1=>1];
var_dump($arr);
array_splice($arr,1,2);
print_r($arr); 


//11
echo '<br>задание 11<br>';
$arr = [1,2,3,4,5];
array_splice($arr,3,0, ['a','b','c']);
print_r($arr);


//12
echo '<br>задание 12<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo 'ключи массива: ';
print_r(array_keys($arr));
echo '<br>';
echo 'значения массива: ';
print_r((array_values($arr)));

//13
echo '<br>задание 13<br>';
$arr1 = [1,2,3];
$arr2 = ['a','b','c'];
$res = array_combine($arr2,$arr1);
print_r($res);

//14
echo '<br>задание 14<br>';
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$res = array_flip($arr);
print_r($res);

//15
echo '<br>задание 15<br>';
$arr = [1,2,3,4,5];
$arr = array_reverse($arr);
print_r($arr);

//16
echo '<br>задание 16<br>';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$arr = array_search('-',$arr);
echo $arr;

//17
echo '<br>задание 17<br>';
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$val = '-';
$key = array_search($val, $arr, true);
if ($key !== false) {
   array_splice($arr, $key, 1);
}
print_r($arr);

//18
echo '<br>задание 18<br>';
$arr1 = ['a', 'b', 'c', 'd', 'e'];
$arr2 = [0 => '3', 3 => '!!!'];
$res = array_replace($arr1, $arr2);
print_r($res);

//19
echo '<br>задание 19<br>';
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
arsort($arr);
print_r($arr);
echo '<br>';
asort($arr);
print_r($arr);
echo '<br>';
ksort($arr);
print_r($arr);
echo '<br>';
krsort($arr);
print_r($arr);

//20
echo '<br>задание 20<br>';
$arr = ['a'=>1,'b'=>2,'c'=>3];
echo array_rand($arr); 

//21
echo '<br>задание 21<br>';
$arr = ['a'=>1,'b'=>2,'c'=>3];
echo $arr[array_rand($arr)];

//22
echo '<br>задание 22<br>';
$arr = [1,2,3,4,5];
shuffle($arr);
print_r($arr);

//23
echo '<br>задание 23<br>';
$arr = range(1,25);
shuffle($arr);
print_r($arr);

//24
echo '<br>задание 24<br>';
$arr = ['a', 'g', 's', 'h', 'i'];
shuffle($arr);
print_r($arr);

//25
echo '<br>задание 25<br>';
$arr = ['a', 'b', 'c', 'b', 'a'];
print_r(array_unique($arr));

//26
echo '<br>задание 26<br>';
$arr = [1,2,3,4,5];
echo array_shift($arr). ' ' . array_pop($arr);

//27
echo '<br>задание 27<br>';
$arr = [1,2,3,4,5,6,7,8];
foreach ($arr as $val) {
    echo array_shift($arr);
    echo array_pop($arr);
}

//28
echo '<br>задание 28<br>';
$arr = ['a','b','c'];
$arr = array_pad($arr, 6, '-');
print_r($arr);

//29
echo '<br>задание 29<br>';
$arr = range(1,20);
$arr = array_chunk($arr, 4);
print_r($arr);

//30
echo '<br>задание 30<br>';
$arr = ['a', 'b', 'c', 'b', 'a'];
print_r(array_count_values($arr));

//31
echo '<br>задание 31.1<br>';
function cube($n) {
    return ($n * $n * $n);
}

$mas = [1, 2, 3, 4, 5];
$res = array_map('cube', $mas);
print_r($res);



echo '<br>задание 31.2<br>';
$funcCub = function($val) {
    return $val * $val * $val;
};
print_r(array_map($funcCub, range(1, 5)));



echo '<br>задание 31.3<br>';
$arr = [1, 8, 27, 64, 125];
var_dump(array_map(null, $arr));


// function funcCube3(int $n, string $m): string {
//     return "квадратный корень числа {$n} равен - {$m}";
// }

// $a = [1, 2, 3, 4, 5];
// $b = ['1', '8', '27', '64', '125'];
// $res = array_map('funcCube3', $a, $b);
// var_dump($res);


// echo '<br>задание 31.4<br>';
// $arr = [
//     '1' => '1',
//     '2' => '8',
//     '3' => '27',
//     '4' => '64',
//     '5' => '125',
// ];

// $res = array_map($callback, array_keys($arr), array_values($arr));
// var_dump($res);


//32
echo '<br>задание 32<br>';
$arr = ['<b>php</b>', '<i>html</i>'];
$res = array_map('strip_tags', $arr);
print_r($res);

//33
echo '<br>задание 33<br>';
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$res = array_intersect($arr1, $arr2);
print_r($res);

//34
echo '<br>задание 34<br>';
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$res1 = array_diff($arr1, $arr2);
$res2 = array_diff($arr2, $arr1);
print_r($res1). ' ';
print_r($res2);
?>