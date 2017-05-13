<?php
require_once 'connection.php'; // подключаем скрипт с коннектом
require_once 'speed.php'; // подключаем скрипт которые чекает скорость ветра на данный момент.

// подключаемся к серверу ( БД )
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка подключения к базе :) " . mysqli_error($link));

// выполняем операции с базой данных
$speed = new Speed();

$info = $speed->speedWind();
$query ="INSERT INTO windspeed(speed) VALUES('$info')";
$result = mysqli_query($link, $query) or die("Ошибка =======   " . mysqli_error($link));
if($result)
{
    echo "Выполнение запроса прошло успешно";
}
// закрываем подключение
mysqli_close($link);
?>