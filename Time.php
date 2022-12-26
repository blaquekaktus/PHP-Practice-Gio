<?php

$currentTime = time();
echo $currentTime.'<br />';

#Add 5 days to current time
echo $currentTime + (5*24*60*60).'<br />';

#sub 1 day from current time
echo $currentTime - (24*60*60).'<br />';

echo date('D, m.d.Y g:ia').'<br />';

echo date('D, m.d.Y g:ia', $currentTime).'<br />';
echo date('D, m.d.Y g:ia', $currentTime + 5*24*60*60).'<br />';
echo date('D, m.d.Y g:ia', $currentTime - 24*60*60).'<br />';


echo date_default_timezone_get().'<br />';
//date_default_timezone_set();

echo mktime(0, 0, 0, 4, 10, null).'<br />';
echo date('D, m.d.Y g:ia', strtotime('2021-01-18 07:00:00')).'<br />';
echo date('D, m.d.Y g:ia', strtotime('first day of february')).'<br />';
echo date('D, m.d.Y g:ia', strtotime('last day of february')).'<br />';
echo date('D, m.d.Y g:ia', strtotime('second friday of february 2019')).'<br />';

$date = date('D, m.d.Y g:ia', strtotime('second friday of february 2019'));

echo '<pre>';

print_r(date_parse($date));

print_r(date_parse_from_format('D, m.d.Y g:ia', $date));

echo '</pre>';

