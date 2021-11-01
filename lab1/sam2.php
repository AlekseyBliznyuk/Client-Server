<?php
$days = [
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятница',
    'Суббота',
    'Воскресенье'
];
$day = $days[date('N') - 1];
foreach ($days as $value) {
    echo $value == $day ? "<em>{$value}</em><br>\n" : "{$value}<br>\n";
}