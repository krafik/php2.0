<?php
/**
 * Created by PhpStorm.
 * User: alexe
 * Date: 28.03.2019
 * Time: 19:40
 */
/*
$a=10;

$p = "a"; //присваиваем пеменной имя другой переменно
$b = "p";
$c = "b";


echo $$p.'<br>';
echo $$b.'<br>';
echo $$c.'<br>';
*/
$a = "hello"; //появилась переменная hello!
$$a = "world"; // $hello = world!
$$$a = "this_";
$$$$a = "is";
$$$$$a = "holy hierarchy";



echo "$a $hello $world $this_ $is";





/*
давайте рассмотрим доп урок. Там переменные по ссылке надо присваивать?
    т.е $a = $b;
т.е $a = b; $&b= $a*/