<?php
// Определяем переменную $varsta (возраст) со значением 22
$varsta = 22;

// Используем условные операторы для определения значения переменной $mesaj (сообщение) в зависимости от возраста
if (($varsta > 12) && ($varsta < 20)) {
    $mesaj = " вы подросток!";
} elseif ($varsta > 40) {
    $mesaj = " вы взрослый человек!";
} else {
    $mesaj = " вы в рассвете сил ... приступайте к работе!";
}

// Используем тернарный оператор для определения, будет ли использовано имя или слово "Anonymous" в выводе
// $nume = "Аня";
echo ($nume) ? $nume . ', ' . $mesaj : 'Anonymous, ' . $mesaj;
?>
<?php
// Получаем текущий день недели (1 - Понедельник, ..., 7 - Воскресенье)
$dayOfWeek = date("N");

// Определяем название дня недели на русском
switch ($dayOfWeek) {
    case 1:
        $dayName = "Понедельник";
        break;
    case 2:
        $dayName = "Вторник";
        break;
    case 3:
        $dayName = "Среда";
        break;
    case 4:
        $dayName = "Четверг";
        break;
    case 5:
        $dayName = "Пятница";
        break;
    case 6:
        $dayName = "Суббота";
        break;
    case 7:
        $dayName = "Воскресенье";
        break;
    default:
        $dayName = "Неизвестно";
        break;
}

// Формируем строку с сообщением
$message = "Сегодня, $dayName, " . date("d.m.Y");

// Выводим сообщение
echo $message;
?>

