<?php
define('YII_DEBUG',true);
require_once __DIR__ . '/../vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config=require __DIR__.'/../config/web.php';
$conf = HTMLPurifier_Config::createDefault();
$conf->set('Core.Encoding', 'ISO-8859-1'); // replace with your encoding
$conf->set('HTML.Doctype', 'HTML 4.01 Transitional'); // replace with your doctype
$purifier = new HTMLPurifier($conf);
$clean_html = $purifier->purify($dirty_html);

$yii=new yii\web\Application($config);
$yii->run();

?>