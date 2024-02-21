# Лабараторная №2
## Инструкция по запуску проекта
* Данный проект написан в Visual Studio Code и для его запуска необходимо открыть файл (он назван index.php) , нажать правую кнопку мыши и в окне выбрать кнопку "PHP Server:Serve Project".
## Задание 1.
###  1)Создайте файл index.php, который содержит
следующий код:
* < ?php
* $nume = 'Иванов';
* $prenume = 'Николай';
* echo 'Фамилия клиента '.$nume. ', а его имя '
* .$prenume . '.';
* $varsta = 30;
* print '<br />Возраст клиента ' .$varsta .'.';
* ?>

### 2)Анализируйте скрипт и объясните, что он реализует.
* Данный скрипт присвает переменным строчные и численные значения. Результатом вывода скрипта будет: "Фамилия клиента Иванов, а его имя Николай.
Возраст клиента 30."
### 3)Сохраните файл.
### 4)Запустите веб сервер.
### 5)Интерпретируйте скрипт index.php используя виртуальный адрес скрипта.
### 6)Проанализируйте результат
* Результатом будет страница, на которой будет отображена информация о клиенте в соответствии с заданными переменными.
## Задание 2.
### 1. Добавьте в созданный файл index.php следующий скрипт:
### 2. Сохраните и интерпретируйте скрипт.
#### в index.html 2.2
### 3. Проанализируйте результат.
* Данный скрипт получает текущий день недели и присваивает его переменной $d. Далее он проверяет если сегодняшний день пятница. Если это так выводит "Хороших вам выходных", если нет, то "Приятного рабочего дня" 
### 4. Замените if…else на тернарный оператор. Анализируйте полученный результат.
#### в index.html 2.4
  * Полученный результат точно такой же , как при использовании if...else.   
### 5. Комментируйте использование тернарногооператора
* Тернарный оператор упрощает условия и по моему мнению явлется более удобным в использовании.
###  оставив if…else и  правильно добавьте следующий скрипт:
* …else if ($d=="Sun")
* echo "<br />Завтра начинается новая рабочая неделя!"; …
* 
### 6. Сохраните и интерпретируйте скрипт.
#### в index.html 2.5
### 7. Проанализируйте результат.
Результатом выполнения данного скрипта будет вывод "Завтра начинается новая рабочая неделя!" по воскресеньям.
### 8. Посмотрите http://php.net/manual/en/function.date.php, и замените буквенный параметр дня недели на цифровой в предыдущий скрипт (w – 0-6)
#### в index.html 2.8
### 9. Сохраните и интерпретируйте скрипт.
#### в index.html 2.8
### 10. Проанализируйте полученный результат.
Результатом выполнения данного скрипта будет вывод "Завтра начинается новая рабочая неделя!" по воскресеньям.
### 11. Измените условие так что бы вы обработалитекущий день недели и выведите соответствующее сообщение на экран.
#### в index.html 2.11
## Задание 3
 ### 1. Создайте файл operator.php, который
содержит обработку данных оператором if и
тернарным оператором.
* < ?php
* // Определяем переменную $varsta (возраст) со значением 22
* $varsta = 22;
* // Используем условные операторы для определения значения переменной $mesaj (сообщение) в зависимости от возраста
* if (($varsta > 12) && ($varsta < 20)) {
* $mesaj = " вы подросток!";
* } elseif ($varsta > 40) {
* $mesaj = " вы взрослый человек!";
* } else {
* $mesaj = " вы в рассвете сил ... приступайте к работе!";}
* // Используем тернарный оператор для определения, будет ли использовано имя или слово "Anonymous" в выводе
* $nume = "Аня";
* echo ($nume) ? $nume . ', ' . $mesaj : 'Anonymous, ' . $mesaj; ?>
### 2. Проанализируйте скрипт и обьясните что он реализует.
* Этот код на PHP проверяет переменную $varsta (возраст) и в зависимости от её значения формирует строку $mesaj (сообщение) о статусе человека. Затем используется тернарный оператор для определения, будет ли использовано имя или слово "Anonymous" в выводе. 
### 3. Сохраните файл и запустите скрипт.
### 4. Проанализируйте результат.
* Аня, вы в рассвете сил ... приступайте к работе!. Результатом стал данный вывод так как переменная nume не пустая и переменной virsta присвоенно значение 22
### 5. Прокомментируйте строку в которой ставитсяв соответствие значение переменной nume. Интерпретируйте скрипт. Что вы заметили?
* Выводится Anonymous вместо Аня.
  #### Находится в operator.php
 ## Задание 4.
### 1. Используя switch () и функцию date(), ссоответствующим параметром, проверьтедень недели и выведите на русском:«Сегодня, день недели, дд.мм.гг»
*< ?php
*// Получаем текущий день недели (1 - Понедельник, ..., 7 - Воскресенье)
*$dayOfWeek = date("N");

*// Определяем название дня недели на русском
* switch ($dayOfWeek) {
* case 1: $dayName = "Понедельник"; break;
* case 2:  $dayName = "Вторник";  break;
*  case 3: dayName = "Среда"; reak;
* case 4:$dayName = "Четверг";break;
* case 5:  $dayName = "Пятница";  break;
* case 6:  $dayName = "Суббота";  reak;
* case 7: $dayName = "Воскресенье"; break;
* default: $dayName = "Неизвестно"; break;}
* // Формируем строку с сообщением
* $message = "Сегодня, $dayName, " . date("d.m.Y");
* // Выводим сообщение
* echo $message;
  #### Находится в zad4.php
## Домашнее задание 
#### Находится в table.php
https://github.com/Iulia1511/Php2/tree/main
### Используемые источники:
* http://php.net/manual/en/function.date.php, и








