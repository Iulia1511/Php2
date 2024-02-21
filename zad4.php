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

