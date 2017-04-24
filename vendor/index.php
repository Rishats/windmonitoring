<?php

include "autoload.php";
use DiDom\Document;


class Main
{
    public function speedWind()
    {
        $document = new Document('https://pogoda.mail.ru/prognoz/bishkek/', true);
        $posts = $document->find('.information__content__additional__item');
        $str = strval($posts[3]);
        $speed = explode(" ",$str);
        $speed = $speed[3];
        return $speed;
    }
}


$speed = new Main();

echo $speed->speedWind();

