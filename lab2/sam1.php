<?php
$chisla=[];
for($i=0;$i<10;$i++)
{
    $chisla[]=rand(30,50);
}
for($i=50;$i<=60;$i++)
{
    $chisla[]=$i;
}
$array=array_slice($chisla,0,15);
foreach($array as $number)
{
    echo "$number ";
}
?>