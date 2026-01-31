<?php
$students=[
["name"=>"Ram","age"=>20,"address"=>"Kathmandu"],
["name"=>"Hari","age"=>21,"address"=>"Lalitpur"],
["name"=>"Sita","age"=>19,"address"=>"Bhaktapur"],
["name"=>"Gita","age"=>22,"address"=>"Baneshwor"],
["name"=>"Rita","age"=>18,"address"=>"Kirtipur"],
["name"=>"Bishal","age"=>23,"address"=>"Kalanki"],
["name"=>"Sabin","age"=>20,"address"=>"Koteshwor"]
];
echo"<table border='1'>";
echo"<tr><th>Name</th><th>Age</th><th>Address</th></tr>";
foreach($students as $value){
	echo"<tr><td>".$value['name']."</td><td>".$value['age']."</td><td>".$value['address']."</td></tr>";
}
echo"</table>";
?>
