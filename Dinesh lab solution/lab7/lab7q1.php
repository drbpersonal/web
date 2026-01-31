<?php

// r mode
if(file_exists("r.txt")){
    $f = fopen("r.txt","r");
    if(filesize("r.txt")>0) echo fread($f, filesize("r.txt"))."<br>";
    fclose($f);
} else { echo "r.txt does not exist<br>"; }

// w mode
$f = fopen("w.txt","w");
fwrite($f,"w mode");
fclose($f);
echo "w.txt written<br>";

// a mode
$f = fopen("a.txt","a");
fwrite($f," a mode");
fclose($f);
echo "a.txt appended<br>";

// x mode
if(!file_exists("x.txt")){
    $f = fopen("x.txt","x");
    fwrite($f,"x mode");
    fclose($f);
    echo "x.txt created<br>";
} else { echo "x.txt already exists<br>"; }

// r+ mode
if(file_exists("rplus.txt")){
    $f = fopen("rplus.txt","r+");
    fwrite($f," r+");
    rewind($f);
    echo fread($f, filesize("rplus.txt"))."<br>";
    fclose($f);
} else { echo "rplus.txt does not exist<br>"; }

// a+ mode
$f = fopen("aplus.txt","a+");
fwrite($f," a+");
rewind($f);
echo fread($f, filesize("aplus.txt"))."<br>";
fclose($f);

// w+ mode
$f = fopen("wplus.txt","w+");
fwrite($f," w+");
rewind($f);
echo fread($f, filesize("wplus.txt"))."<br>";
fclose($f);

// x+ mode
if(!file_exists("xplus.txt")){
    $f = fopen("xplus.txt","x+");
    fwrite($f," x+");
    rewind($f);
    echo fread($f, filesize("xplus.txt"))."<br>";
    fclose($f);
} else { echo "xplus.txt already exists<br>"; }

?>
