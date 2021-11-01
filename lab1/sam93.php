<?php
$celebratedate = date_create(date('Y-m-d'));
echo "Последний звонок\n";
date_modify($celebratedate, '+3 days');
date_modify($celebratedate, 'next Friday');
echo date_format($celebratedate, 'd.m.Y');
?>