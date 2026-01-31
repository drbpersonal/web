<?php

// echo date('Y').'<br>';
// echo date('y').'<br>';
// echo date('M').'<br>';
// echo date('y-m-d').'<br>';
// echo date(format: 'y-m-d:i:sa').'<br>';
// echo date('m-d-y').'<br>';
// echo date('d').'<br>';
// echo date('m').'<br>';
// string function
// $strDate =strtotime('+30 days');
// $strDate =strtotime('next saturday');
// echo date('Y-M-d h:i:sa',$strDate);
// echo ("D:") . date('D').'<br>';
// echo ("d:") . date('d').'<br>';
// echo ("N:") . date('N').'<br>';
// echo ("f:") . date('f').'<br>';
// echo ("h:") . date('h').'<br>';
// echo ("j:") . date('j').'<br>';
// echo ("w:") . date('w').'<br>';
// echo ("m:") . date('m').'<br>';
// echo ("t:") . date('t').'<br>';
// echo ("l:") . date('l').'<br>';
// echo ("z:") . date('z').'<br>';
// echo ("M:") . date('M').'<br>';
// echo ("L:") . date('L').'<br>';
// mktime (h,minute: m,s,m,d,y);
$milli = mktime(7, 10, 10, 10, 8, 2025);
echo date('D,Y m d h:i:sa', $milli).'<br>';
//find the days remaining for next new year
$nextNewYear = mktime(0, 0, 0, 1, 1, 2026);
$daysRemaining = ($nextNewYear - $milli) / (60 * 60 * 24);
echo date('D,Y m d h:i:sa', $nextNewYear).'<br>';
echo ("Days remaining for next New Year: ") . round($daysRemaining).'<br>';

// $nextNewYear = mktime(0, 0, 0, 1, 1, 2026);
// $today = time();
// $diff = $nextNewYear - $today;
print_r(getdate()) ."<br>";
