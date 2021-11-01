<?php
define("SIGN","Администрация");
$dates = array("12 марта","15 апреля","17 мая");
$mes="Внимание!";
$mes.="<br>Даты факультатива по информатике ".$dates[0].",".$dates[1].",".$dates[2];
$mes.="<br>".SIGN;
echo $mes;
?>