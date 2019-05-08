<?php
/**
 * Created by PhpStorm.
 * User: alexe
 * Date: 30.03.2019
 * Time: 18:18
 */
for ($i=1; $i<=10; $i++){
    for ($j=1; $j<=10;$j++) {
        $r = $i * $j;
        echo $i . "*" . $j . "=" . $r.'<br>';
    }
    echo '<br>';
}


function a($a,$b, $c = -5){
return $a*$b*$c;
}
echo "результат функции: ". a(-2,5).'<br> <br>';

//квадраты чисел
for ($i=1; ; $i++){
    $r = $i ** 2;
    if ($r > 100){
       goto end;
    }
}
end:
echo 'Цикл завершен';
