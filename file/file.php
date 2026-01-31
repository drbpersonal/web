<?php
// $file=fopen("file.txt","r");
// // fwrite($file,"hii nanaa");
// // if($file){
// //     echo "value in the file  written successfully"."<br>";
// // }
// // $fileR=fopen("file.txt","r");
// // echo fread($fileR,10);
// while (!feof($file)){
//     echo fgets($file);
//     echo "<br>";
// }
// $file=fopen('student.csv','w');
// $data=[
//     ['name'=>'Dinesh','age'=>22,'email'=>'dineshbhandari962@gmail.com'],
//     ['name'=>'Kreepa','age'=>20,'email'=>'kreepa3@GMAIL.COM'],
//     ['name'=>'Kripa','age'=>22,'email'=>'kripa@gmail.com'],
// ];
// foreach ($data as $val) {
//     fputcsv($file, $val);
// // }
// $file=fopen("student.csv","r");
// $data=[];
// while (!feof($file)){
//     $data[]=fgetcsv($file);
// }
//     print_r($data)."<br>";
$file=fopen("file.txt","w");
fwrite($file,"Hello World");
fclose($file);
?>
