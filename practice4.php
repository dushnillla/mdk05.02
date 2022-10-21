<?php




/*
Задача 1. Используя рекурсию, реализовать функцию вычисления факториала числа.
*/

echo "Задание 1: ";

function factorial($n) {
    if ( $n <= 1 ) return 1;
    return $n *factorial($n-1);
}


echo factorial(4);


/*
Задача 2. Дан массив вида, который может иметь неограниченную вложенность.

Требуется реализовать рекурсивную функцию, которая, на основе данного массива
формировала список. Для формирования списка используются теги «<ul></ul><li></li>».
*/



echo "<br>Задание 2: ";


$mas = [
    'id' => 1,
    'name' => 'item1',
    'items' => [
      [
        'id' => 2,
        'name' => 'item2',
        'items' => [],
        ],
        [
            'id' => 3,
            'name' => 'item3',
            'items' => [],
        ],
        [
            'id' => 4,
            'name' => 'item4',
            'items' => [
        [
            'id' => 5,
            'name' => 'item5',
            'items' => [],
        ],
        [
            'id' => 6,
            'name' => 'item6',
            'items' => [],
                      ],
                ],
            ],
        ]
    ];


function spisok($mas) {
echo "<ul>";
    foreach ($mas as $key => $value) {
        echo "<li>";
        if(is_array($value)) {
            echo $key;
            spisok($value); }
        else {
            echo $value; }
        echo "</li>"; }
     echo "</ul>";
    }
    


 spisok($mas);


?>