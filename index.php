<?php
/**
 * Created by PhpStorm.
 * User: SKELETON
 * Date: 21.04.2017
 * Time: 23:40
 */

require_once 'phpQuery.php';

$url = 'https://privatbank.ua/';
$file = file_get_contents($url);

$doc = phpQuery::newDocument($file);
$tbl = $doc->find('#course-table-pb');
echo $tbl;

