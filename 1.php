<?php

// С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка

$num = 0;
const COUNT = 100;

while ($num < COUNT) {
    if (($num % 3) == 0) {
        echo $num.' ';
    }
    $num++;
}