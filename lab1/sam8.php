<?php
$currentDate=date("d.m.Y");
echo "Факультатив по информатике (".$currentDate.") \n";
$date = date_create(date('d-m-Y'));
date_modify($date, '-7 days');
echo "переносится на ",date_format($date, 'd.m.Y');
?>