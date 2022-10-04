<pre>
<?php
//1.1 strtoupper - повышает регистр строки
echo '1.1<br>';
$str = "php";
$str = strtoupper($str);
echo $str;



//1.2 strtolower - понижает регистр строки
echo '<br>1.2<br>';
$str = "PHP";
$str = strtolower($str);
echo $str;



//1.3 ucfirst - повышает регистр первого символа в строке
echo '<br>1.3<br>';
$str= 'london';
$str = ucfirst($str);
echo "$str";


//1.4 lcfirst - понижает регистр первого символа в строке
echo '<br>1.4<br>';
$str = 'London';
$str = lcfirst($str);
echo "$str";



//1.5 cwords - повышает регистр первого символа в каждом слове в строке
echo '<br>1.5<br>';
$str = "london is the capital of great britain";
$str = ucwords($str);
echo "$str";



//1.6
echo '<br>1.6<br>';
$str = "LONDON";
$str = strtolower($str);
$str = ucfirst($str);
echo "$str";



//2.1 strlen - считает количество символов в строке (в байтах (в кирилице 1 символ = 2 байтам))
echo '<br>2.1<br>';
$password = 3434;
echo ((strlen($password) < 6) ? "пароль не подходит" : ((strlen($password) < 10) ? "пароль подходит" : "пароль не подходит"));



//3.1 substr - "возвращает подстроку..."; вырезает из строки заданный диапазон и возвращает вырезанный элемент
echo '<br>3.1<br>';
$str = 'html css php';
echo substr($str, 5, 3).', ';
echo substr($str, -3, 3).', ';
echo substr($str, 0, -8);



//3.2
echo '<br>3.2<br>';
$str = 'ilovephp';
$str1 = substr($str, -3, 3); //Возвращает подстроку. Считает от заданного значения столько, сколько нам необходимо. В данном случае отсчет идет наоборот - сзади
echo $str1; 



//3.3
echo '<br>3.3<br>';
$str = 'http://idont.understand.php';
if (substr($str, 0, 7) == 'http://') //Получает часть строки и возращает ее
echo "да'";
else 
echo "нет";



//3.4
echo '<br>3.4<br>';
if(substr($str, 0, 7)== 'http://' || substr($str, 0, 8)== 'https://') //Получает часть строки и возращает ее. Проверяет от 0
echo "да'"; //Получает часть строки и возращает ее. Проверяет от 0
else
echo "нет";



//3.5
echo '<br>3.5<br>';
$str = 'ilovephp.png';
if(substr($str, 8, 4) == '.png') 
echo "да'";
else 
echo "нет";



//3.6
echo '<br>3.6<br>';
if(substr($str, 8, 4)== '.png' || substr($str, 8, 4)== '.jpg')
echo "да'";
else
echo "нет";



//3.7
echo '<br>3.7<br>';
$str = 'ilovehotbebra1';
$string = substr("$str", 5);
if ($string == '') {echo "$str";}
else ($string = substr($str, 5));
{echo "$string" . '...';} //Получает часть строки и возращает ее. Проверяет от 0 до 5. Если <= символов, то выведет ...
   


//4.1 
echo '<br>4.1<br>';
$str = '31.12.22';
echo str_replace('.', '-', $str); //Заменяет все вхождения строки поиска на строку замены. Здесь заменяются точки на дефисы



//4.2 str_replace - заменяет в строке выбранные элементы/значения (массивы) на выбранные значения (массивы)
echo '<br>4.2<br>';
$str = "She looked again at the calendar";
$num = array("1", "2", "3");
$ok= array("a", "e", "n");
$newstr = str_replace($ok, $num, $str); //Заменяет все вхождения строки поиска на строку замены. Здесь заменяются буквы на числа, которые находятся в массивах
echo $newstr; 



//4.3
echo '<br>4.3<br>';
$str = "1a2b3c4d5e6f7g8h9i0";
$num = array("1","2","3","4","5","6","7","8","9","0");
$no = array("");
$newstr = str_replace($num, $no, $str);
echo $newstr;


//5.1. Дана строка «She looked again at the calendar». Замените в ней все буквы «a» на цифру 1, буквы «e» - на 2, а буквы «n» - на 3.
echo '<br>5.1<br>';
$phrase = 'She looked again at the calendar';
$phrase_1 = strtr ($phrase, 'aen', '123'); //Преобразует заданные символы или заменяет подстроки. Тут мы задаем значения, которые нам нужно заменить
echo $phrase_1;
$phrase_2 = strtr ($phrase, //Здесь мы меняем на нужные символы
[
    'a' => 1, 
    'e' => 2, 
    'n' => 3
    ]
);
echo $phrase_2;



//6.1 substr_replace - в выбранном диапазоне заменяет символы на заданные
echo '<br>6.1<br>';
$str = 'She looked again at the calendar';
echo substr_replace($str, '!!!', 3, 5); /*сначала указываем ГДЕ заменяем символы, затем НА ЧТО заменям, затем указываем диапазон:
первое число - начиная с какого символа начинается замена;
второе число - сколько символов заменяется*/



//7.1 strpos - показывает позицию ПЕРВОГО вхождения символа в строке
echo '<br>7.1<br>';
$mystring = 'abc abc abc'; 
echo strpos($mystring, 'b'); //Возвращает позицию первого вхождения подстроки. Тут определяем позицию первой b


//7.2 strrpos - показывает позицию ПОСЛЕДНЕГО вхождения символа в строке
echo '<br>7.2<br>';
echo strrpos($mystring, 'b');


//7.3
echo '<br>7.3<br>';
echo strrpos($mystring, 'b', -3); // Возвращает позицию последнего вхождения подстроки в строке. Ищем b начиная с 3 позиции


//7.4
echo '<br>7.4<br>';
$str = 'aaa aaa aaa aaa aaa';
echo strpos($str, ' ', strpos($str,' ')+1); //Возвращает позицию последнего вхождения подстроки в строке. Тут мы определяем первый пробел



//7.5
echo '<br>7.5<br>';
$str = '..pudge';
if (strpos($str, '..') !== false) { 
echo 'есть'; }
else {
echo 'нет';
} 



//7.6
echo '<br>7.6<br>';
$str = 'http://meathook';
if (strpos($str, 'http://',0)=== 0){//Возвращает позицию первого вхождения подстроки. Начинаем с http://
echo 'да';
} else {
echo 'нет'; };//если не найдет $str, потому что такая функция. тройное равно проверяет сначала тип переменной



//8.1 trim — Удаляет пробелы (или другие символы) из начала и конца строки
echo '<br>8.1<br>';
$str = 'pochemutak ';
echo trim ($str, ' ');



//8.2 
echo '<br>8.2<br>';
$str = '/php/';
echo trim($str, '/'); //Удаляет пробелы (или другие символы) из начала и конца строки.



//8.3 rtrim — Удаляет пробелы (или другие символы) из конца строки
echo '<br>8.3<br>';
$str = 'слова слова слова';
$strtrimmed = rtrim($str, '.');
echo $strtrimmed, '.'; 


//9.1 strrev — Переворачивает строку задом наперёд
echo '<br>9.1<br>';
$str = '12345';
echo strrev($str);



//9.2 strrev — Переворачивает строку задом наперёд
echo '<br>9.2<br>';
$str = 'level';
echo strrev($str);


//10.1 str_shuffle — Переставляет символы в строке случайным образом
echo '<br>10.1<br>';
$str = 'the password cannot be empty';
echo str_shuffle($str);


//11.1 number_format — Форматирует число с разделением групп
echo '<br>11.1<br>';
$str = '12345678';
echo number_format($str,0, '', ' '); 



//12.1 strip_tags — Удаляет теги HTML и PHP из строки
echo '<br>12.1<br>';
$str = 'html, <b>php</b>,js';
echo strip_tags($str );



//12.2 strip_tags — Удаляет теги HTML и PHP из строки
echo '<br>12.2<br>';
$str = '<div><span>the <a>password</a></span> cannot <b><i>be</i></b> <strong>empty</strong></div>';
echo strip_tags($str, '<b><i>');



//12.3 htmlspecialchars — Преобразует специальные символы в HTML-сущности
echo '<br>12.3<br>';
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str);



//13.1 ord — Конвертирует первый байт строки в число от 0 до 255
echo '<br>13.1<br>';
echo ord('a'). ' '. ord('b').' '.  ord('c'). ' '. ord(' ');



//13.2 
echo '<br>13.2<br>';
echo '65-90'. ' '. '97-122';



//13.3 
echo '<br>13.3<br>';
echo chr(33); 



//13.4 chr — Генерирует односимвольную строку по заданному числу
echo '<br>13.4<br>';
$a=65;
$b=90;
$lett=rand($a,$b);
echo chr($letter);



//13.6
echo '<br>13.6<br>';
$str = 'f';
$answer = (ord($str) >= 65 && ord($str) <= 90) ? 'большая' : ((ord($str) >= 97 && ord($str) <= 122) ? 'маленькая' : 'Не является буквой латинского алфавита');
echo $answer;



//14.1 strchr - аходит первое вхождение подстроки
echo '<br>14.1<br>';
$str  = 'ab-cd-ef';
$a = strchr($str, '-cd-ef');
echo $a;


//14.2 strrchr — Находит последнее вхождение символа в строке
echo '<br>14.2<br>';
$str= 'ab-cd-ef';
$a = strrchr($str,'-ef');
echo $a;



//15.1
echo '<br>15.1<br>';
$str = 'ab--cd--ef';
$a = strstr($str, '--cd--ef');
echo $a;


//доп задание
echo '<br>дополнительное задание<br>';
$words = 'var_test_text';
echo str_replace(' ', '', lcfirst(ucwords(str_replace('_', ' ', $words)))); //Заменяет все вхождения строки поиска на строку замены. Заменяем на значения из $x3
?>
