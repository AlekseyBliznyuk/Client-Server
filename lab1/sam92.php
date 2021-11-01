<?php
$currentDate=date("w");
$date = date_create(date('Y-m-d'));
if($currentDate==0 || $currentDate==6)
{
    echo "Последний срок сдачи лабораторной работы\n", date('d-m-Y', strtotime("next Monday"));
}
else
{
    date_modify($date, '+5 days');
    echo "Последний срок сдачи лабораторной работы\n", date_format($date, 'd.m.Y');
}
?>