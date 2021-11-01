<?php
$correctMonth=date("m");
echo "Выпускной вечер\n";
$newMonth=date('m',strtotime("+1 week"));
if($correctMonth==$newMonth)
{
    $date = date_create('last Saturday');
    date_modify($date, '-7 days');
    echo date_format($date, 'd.m.Y');
}
else
{
    echo date('d-m-Y', strtotime("last Saturday"));
}
?>