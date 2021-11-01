<?php
$correctDate=date("w");
$date = date_create(date('d-m-Y'));
if($correctDate==0 || $correctDate==6)
{
    echo "Защита курсовой работы ", date('d-m-Y', strtotime("next Tuesday"));
}
else
{
    echo "Защита курсовой работы ", date('H:i d.m.Y', mktime(14, 0, date('m'),15));
}
?>