<pre>
<?php
/*Задача 1.1. Дана строка «php». Сделайте из нее строку «PHP».
strtoupper - повышает регистр строки*/
echo '1.1<br>';
$str = "php";
$str = strtoupper($str);
echo $str;



/*Задача 1.2. Дана строка «PHP». Сделайте из нее строку «php».
strtolower - понижает регистр строки*/
echo '<br>1.2<br>';
$str = "PHP";
$str = strtolower($str);
echo $str;



/*Задача 1.3. Дана строка «london». Сделайте из нее строку «London».
ucfirst - повышает регистр первого символа в строке*/
echo '<br>1.3<br>';
$str= 'london';
$str = ucfirst($str);
echo "$str";


/*Задача 1.4. Дана строка «London». Сделайте из нее строку «london».
lcfirst - понижает регистр первого символа в строке*/
echo '<br>1.4<br>';
$str = 'London';
$str = lcfirst($str);
echo "$str";



/*Задача 1.5. Дана строка «london is the capital of great britain». Сделайте из нее строку
«London Is The Capital Of Great Britain».
cwords - повышает регистр первого символа в каждом слове в строке*/
echo '<br>1.5<br>';
$str = "london is the capital of great britain";
$str = ucwords($str);
echo "$str";



/* Задача 1.6. Дана строка «LONDON». Сделайте из нее строку «London».*/
$a = 'LONDON';
echo ucfirst(strtolower($a));



/* Задача 2.1. Дана переменная $password, в которой хранится пароль пользователя.
Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю
сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать
другой пароль.
strlen - считает количество символов в строке (в байтах (в кирилице 1 символ = 2 байтам))*/
echo '<br>2.1<br>';
$password = 3434;
echo ((strlen($password) < 6) ? "пароль не подходит" : ((strlen($password) < 10) ? "пароль подходит" : "пароль не подходит"));



/*Задача 3.1. Дана строка «html css php». Вырежьте из нее и выведите на экран слово
«html', слово «css» и слово «php».
substr - "возвращает подстроку..."; вырезает из строки заданный диапазон и возвращает вырезанный элемент*/
echo '<br>3.1<br>';
$str = 'html css php';
echo substr($str, 5, 3).', ';
echo substr($str, -3, 3).', ';
echo substr($str, 0, -8);



/* Задача 3.2. Дана строка. Вырежьте и выведите на экран последние 3 символа этой
строки.*/
echo '<br>3.2<br>';
$str = 'ilovephp';
$str1 = substr($str, -3, 3); //Возвращает подстроку. Считает от заданного значения столько, сколько нам необходимо. В данном случае отсчет идет наоборот - сзади
echo $str1; 



/* Задача 3.3. Дана строка. Проверьте, что она начинается на «http://». Если это так,
выведите «да', если не так - «нет».*/
echo '<br>3.3<br>';
$str = 'http://idont.understand.php';
if (substr($str, 0, 7) == 'http://'){
    echo "да'";
}else{
    echo "нет";
}






/* Задача 3.4. Дана строка. Проверьте, что она начинается на «http://» или на «https://».
Если это так, выведите «да', если не так - «нет».*/
echo '<br>3.4<br>';
if(substr($str, 0, 7)== 'http://' || substr($str, 0, 8)== 'https://'){
    echo "да'"; 
} else{
   echo "нет"; 
}



/*Задача 3.5. Дана строка. Проверьте, что она заканчивается на «.png». Если это так,
выведите «да', если не так - «нет».*/
echo '<br>3.5<br>';
$str = 'ilovephp.png';
if(substr($str, 8, 4) == '.png'){
    echo "да'";
}else{
    echo "нет";
} 



/*Задача 3.6. Дана строка. Проверьте, что она заканчивается на «.png» или на «.jpg».
Если это так, выведите «да', если не так - «нет».*/
echo '<br>3.6<br>';
if(substr($str, 8, 4)== '.png' || substr($str, 8, 4)== '.jpg'){
    echo "да'";
}else{
   echo "нет"; 
}




/* Задача 3.7. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее
первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой
строке 5 и менее символов - просто выведите эту строку на экран.*/
echo '<br>3.7<br>';
$a = 'ghbdtnvbh';
$b = strlen($a);
if ( $b > 5)  {
    echo substr($a, 0, 5) . '...';
} else {
    echo $a;
}
   


/*Задача 4.1. Дана строка «31.12.2022». Замените все точки на дефисы.*/
echo '<br>4.1<br>';
$str = '31.12.22';
echo str_replace('.', '-', $str); //Заменяет все вхождения строки поиска на строку замены. Здесь заменяются точки на дефисы



/* Задача 4.2. Дана строка «She looked again at the calendar». Замените в ней все буквы
«a» на цифру 1, буквы «e» - на 2, а буквы «n» - на 3
str_replace - заменяет в строке выбранные элементы/значения (массивы) на выбранные значения (массивы)*/
echo '<br>4.2<br>';
$str = "She looked again at the calendar";
$num = array("1", "2", "3");
$ok= array("a", "e", "n");
$newstr = str_replace($ok, $num, $str); //Заменяет все вхождения строки поиска на строку замены. Здесь заменяются буквы на числа, которые находятся в массивах
echo $newstr; 



/*Задача 4.3. Дана строка с буквами и цифрами, например, «1a2b3c4b5d6e7f8g9h0».
Удалите из нее все цифры. То есть в нашем случае должна получится строка «abcbdefgh».*/
echo '<br>4.3<br>';
$str = "1a2b3c4d5e6f7g8h9i0";
$num = array("1","2","3","4","5","6","7","8","9","0");
$no = array("");
$newstr = str_replace($num, $no, $str);
echo $newstr;


//5.1. Дана строка «She looked again at the calendar». Замените в ней все буквы «a» на цифру 1, буквы «e» - на 2, а буквы «n» - на 3.
echo '<br>5.1<br>';
$a = 'She looked again at the calendar' ;
echo strtr($a, ['a' => 1, 'e' => 2, 'n' => 3]); //Преобразует заданные символы или заменяет подстроки



/* Задача 6.1. Дана строка «the password cannot be empty». Вырежите из нее подстроку
с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте «!!!». substr_replace - в выбранном диапазоне заменяет символы на заданные*/
echo '<br>6.1<br>';
$str = 'She looked again at the calendar';
echo substr_replace($str, '!!!', 3, 5); 



/* Задача 7.1. Дана строка «abc abc abc». Определите позицию первой буквы «b». strpos - показывает позицию ПЕРВОГО вхождения символа в строке*/
echo '<br>7.1<br>';
$mystring = 'abc abc abc'; 
echo strpos($mystring, 'b'); //Возвращает позицию первого вхождения подстроки. Тут определяем позицию первой b


/* Задача 7.2. Дана строка «abc abc abc». Определите позицию последней буквы «b». strrpos - показывает позицию ПОСЛЕДНЕГО вхождения символа в строке*/
echo '<br>7.2<br>';
$mystring = 'abc abc abc';
echo strrpos($mystring, 'b');


/* Задача 7.3. Дана строка «abc abc abc». Определите позицию первой найденной
буквы b, если начать поиск не с начала строки, а с позиции 3*/
echo '<br>7.3<br>';
$mystring = 'abc abc abc';
echo strrpos($mystring, 'b', 3); // Возвращает позицию последнего вхождения подстроки в строке. Ищем b начиная с 3 позиции


/*Задача 7.4. Дана строка «aaa aaa aaa aaa aaa». Определите позицию второго пробела.*/
echo '<br>7.4<br>';
$str = 'aaa aaa aaa aaa aaa';
echo strpos($str, ' ', strpos($str,' ')+1); //Возвращает позицию последнего вхождения подстроки в строке. Тут мы определяем первый пробел



/* Задача 7.5. Проверьте, что в строке есть две точки подряд. Если это так - выведите
«есть', если не так - «нет».*/
echo '<br>7.5<br>';
$str = '..pudge';
if (strpos($str, '..') !== false) { 
echo 'есть'; }
else {
echo 'нет';
} 



/* Задача 7.6. Проверьте, что строка начинается на «http://». Если это так - выведите
«да', если не так - «нет».*/
echo '<br>7.6<br>';
$str = 'http://wwqeewqweeee';
if (strpos ($str, 'http://') === 0) { 
    echo 'да'; }
    else {
    echo 'нет'; 
} 



/*Задача 8.1. Дана строка. Очистите ее от концевых пробелов.trim — Удаляет пробелы (или другие символы) из начала и конца строки*/
echo '<br>8.1<br>';
$str = 'pochemutak ';
echo trim ($str, ' ');



/* Задача 8.2. Дана строка «/php/». Сделайте из нее строку «php', удалив концевые
слеши.*/
echo '<br>8.2<br>';
$str = '/php/';
echo trim($str, '/'); 



/* Задача 8.3. Дана строка «слова слова слова.». В конце этой строки может быть
точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла
точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать.
Задачу решите через rtrim без всяких ифов. rtrim — Удаляет пробелы (или другие символы) из конца строки*/
echo '<br>8.3<br>';
$str = 'слова слова слова.';
echo rtrim($str, '.') . '.'; 


/* Задача 9.1. Дана строка «12345». Сделайте из нее строку «54321».strrev — Переворачивает строку задом наперёд*/
echo '<br>9.1<br>';
$str = '12345';
echo strrev($str);



/*Задача 9.2. Проверьте, является ли слово палиндромом (одинаково читается во всех
направлениях, примеры таких слов: madam, otto, kayak, nun, level).strrev — Переворачивает строку задом наперёд*/
echo '<br>9.2<br>';
$str = 'level';
echo strrev($str);


/*Задача 10.1. Дана строка «the password cannot be empty». Перемешайте символы
этой строки в случайном порядке. str_shuffle — Переставляет символы в строке случайным образом*/
echo '<br>10.1<br>';
$str = 'the password cannot be empty';
echo str_shuffle($str);


/* Задача 11.1. Дана строка «12345678». Сделайте из нее строку «12 345 678». number_format — Форматирует число с разделением групп*/
echo '<br>11.1<br>';
$str = '12345678';
echo number_format($str,0, '', ' '); 



/* Задача 12.1. Дана строка «html, <b>php</b>, js». Удалите теги из этой строки. strip_tags — Удаляет теги HTML и PHP из строки*/
echo '<br>12.1<br>';
$str = 'html, <b>php</b>,js';
echo strip_tags($str);



/*Задача 12.2. Дана строка «<div><span>the <a>password</a></span> cannot
<b><i>be</i></b> <strong>empty</strong></div>». Удалите все теги из этой строки, кроме
тегов <b> и <i>. strip_tags — Удаляет теги HTML и PHP из строки*/
echo '<br>12.2<br>';
$str = '<div><span>the <a>password</a></span> cannot <b><i>be</i></b> <strong>empty</strong></div>';
echo strip_tags($str, '<b><i>');



/* Задача 12.3. Дана строка «html, <b>php</b>, js». Выведите ее на экран «как есть': то
есть браузер не должен преобразовать <b> в жирный. htmlspecialchars — Преобразует специальные символы в HTML-сущности*/
echo '<br>12.3<br>';
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str);



/*Задача 13.1. Узнайте код символов «a', «b', «c', пробела.  ord — Конвертирует первый байт строки в число от 0 до 255*/
echo '<br>13.1<br>';
echo ord('a'). ' '. ord('b').' '.  ord('c'). ' '. ord(' ');



/*Задача 13.2. Изучите таблицу ASCII. Определите границы, в которых
располагаются буквы английского алфавита.*/
echo '<br>13.2<br>';
echo '65-90'. ' '. '97-122';



/*Задача 13.3. Выведите на экран символ с кодом 33*/
echo '<br>13.3<br>';
echo chr(33); 



/* Задача 13.4. Запишите в переменную $str случайный символ - большую букву
латинского алфавита. Подсказка: с помощью таблицы ASCII определите какие целые
числа соответствуют большим буквам латинского алфавита. chr — Генерирует односимвольную строку по заданному числу*/
echo '<br>13.4<br>';
$str = 'Q';
echo ord($str);



/*Задача 13.6. Дана буква английского алфавита «f». Узнайте, она маленькая или
большая. Выведите букву и результат на экран.*/
echo '<br>13.6<br>';
$a = 'f';
if ( (ord($a) >= 65) && (ord($a) <= 90)) {
 echo $a, ' ','буква большая'; } else {
 echo $a, ' ','буква маленькая'; }
/*$str = 'f';
$answer = (ord($str) >= 65 && ord($str) <= 90) ? 'большая' : ((ord($str) >= 97 && ord($str) <= 122) ? 'маленькая' : 'Не является буквой латинского алфавита');
echo $answer;*/



/* Задача 14.1. Дана строка «ab-cd-ef». С помощью функции strchr выведите на экран
строку «-cd-ef».strchr - находит первое вхождение подстроки*/
echo '<br>14.1<br>';
$str  = 'ab-cd-ef';
$a = strchr($str, '-');
echo $a;


/*Задача 14.2. Дана строка «ab-cd-ef». С помощью функции strrchr выведите на экран
строку «-ef». Показать решение. strrchr — Находит последнее вхождение символа в строке*/
echo '<br>14.2<br>';
$str= 'ab-cd-ef';
$a = strrchr($str,'-');
echo $a;



/*Задача 15.1. Дана строка «ab--cd--ef». С помощью функции strstr выведите на экран
строку «--cd--ef».*/
echo '<br>15.1<br>';
$str = 'ab--cd--ef';
$a = strstr($str, '-');
echo $a;


/*Дополнительная задача:
1 Преобразуйте строку «var_test_text» в «varTestText». Скрипт, конечно же, должен
работать с любыми аналогичными строками.*/
echo '<br>дополнительное задание<br>';
$words = 'var_test_text';
echo str_replace(' ', '', lcfirst(ucwords(str_replace('_', ' ', $words)))); //Заменяет все вхождения строки поиска на строку замены. Заменяем на значения из $x3
?>