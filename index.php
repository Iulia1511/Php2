<?php
$nume = 'Иванов';
$prenume = 'Николай';
echo 'Фамилия клиента '.$nume. ', а его имя '
.$prenume . '.';
$varsta = 30;
print '<br />Возраст клиента ' .$varsta .'.';
?> 
<?php
$d=date("D"); //Вызываем функцию date , аргумент D указывает только на дни недели и присваеваем это все переменноьй $d
if ($d=="Fri") // С помощью условного оператора проверяем, если сегодняшний день пятница
echo "<br />Хороших вам выходных!";// В случае истины выводим данное сообщение 
else
 echo "<br />Приятного рабочего дня,вам!";// В случае лжи данное
?>
<?php
$d=date("D"); // Вызываем функцию date , аргумент D указывает только на дни недели и присваеваем это все переменноьй $d
if ($d=="Sun") // С помощью условного оператора проверяем равен ли текущий день недели Воскресенью 
echo "<br />Завтра начинается новая рабочая неделя!"; // Если равен выводим данное сообщение
?> 
<?php
$day_number = date("N"); // Получаем номер текущего дня неделии сохраняем его в переменной $day_number.

if ($day_number == 7) // Проверяем, если текущий день недели равен 7 (воскресенье).
    echo "<br />Завтра начинается новая рабочая неделя!"; // Если условие выполнено выводим сообщение "Завтра начинается новая рабочая неделя!".
?>
<?php
$day_number = date("N");
if ($day_number == 3 )
echo "<br /> Сегодня среда!";
?>
