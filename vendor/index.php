<?php

include "autoload.php";
use DiDom\Document;


$document = new Document('https://pogoda.mail.ru/prognoz/bishkek/', true);


$posts = $document->find('.information__content__additional__item');
$str = strval($posts[3]);
$speed = explode(" ",$str);
$speed = $speed[3];


echo $speed;

