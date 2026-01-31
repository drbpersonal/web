<?php
// 1. move_uploaded_file()
echo "<h3>1. move_uploaded_file()</h3>";
if(isset($_FILES['file']) && $_FILES['file']['error']==0){
    if(!is_dir("upload")) mkdir("upload",0777,true);
    echo move_uploaded_file($_FILES['file']['tmp_name'], "upload/".$_FILES['file']['name']) ? "File uploaded successfully<br>" : "Upload failed<br>";
}

// 2. mkdir()
echo "<h3>2. mkdir()</h3>";
echo !is_dir("test") ? (mkdir("test",0777,true)."Directory created<br>") : "Directory already exists<br>";

// 3. fopen() + fputs()
echo "<h3>3. fopen() + fputs()</h3>";
$f=fopen("demo.txt","w"); fputs($f,"Hello World\n"); fclose($f); echo "demo.txt created and text written<br>";

// 4. fread()
echo "<h3>4. fread()</h3>";
$f=fopen("demo.txt","r"); if($f){echo fread($f,5)."<br>"; fclose($f);}

// 5. fgetcsv()
echo "<h3>5. fgetcsv()</h3>";
if(!file_exists("data.csv")){$f=fopen("data.csv","w"); fputcsv($f,["Name","Age","City"]); fclose($f);}
$f=fopen("data.csv","r"); if($f){print_r(fgetcsv($f)); fclose($f); echo "<br>";}

// 6. fgets()
echo "<h3>6. fgets()</h3>";
$f=fopen("demo.txt","r"); if($f){echo fgets($f)."<br>"; fclose($f);}

// 7. fputcsv()
echo "<h3>7. fputcsv()</h3>";
$f=fopen("data.csv","a"); fputcsv($f,["Alice",25,"NY"]); fclose($f); echo "CSV row added<br>";

// 8. fputs()
echo "<h3>8. fputs()</h3>";
$f=fopen("demo.txt","a"); fputs($f,"Appending text.\n"); fclose($f); echo "Text appended<br>";

// 9. fgetc()
echo "<h3>9. fgetc()</h3>";
$f=fopen("demo.txt","r"); if($f){echo "First character: ".fgetc($f)."<br>"; fclose($f);}

// 10. file_get_contents()
echo "<h3>10. file_get_contents()</h3>";
echo nl2br(file_get_contents("demo.txt"));

// 11. file_put_contents()
echo "<h3>11. file_put_contents()</h3>";
file_put_contents("demo2.txt","Hello File Put Contents!"); echo "demo2.txt created with content<br>";
?>
