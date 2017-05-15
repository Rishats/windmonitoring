<?php
require_once 'connection.php'; // подключаем скрипт с коннектом
// подключаемся к серверу ( БД )
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка подключения к базе :) " . mysqli_error($link));

// выполняем операции с базой данных
$query ="SELECT * FROM windspeed WHERE time >= now() - INTERVAL 1 DAY;";
$result = mysqli_query($link, $query) or die("Ошибка =======   " . mysqli_error($link));
// закрываем подключение
mysqli_close($link);
$arrays = array();
$arraydone = array();
foreach ($result as $element)
{
    array_push($arrays,$element);
}
foreach ( $arrays as $array ) {


    foreach ( $array as $key => $value ) {
        if ($key == 'speed')
        {
            array_push($arraydone,$value);
        }
    }
}
echo json_encode($arraydone);
?>