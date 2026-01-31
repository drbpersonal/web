<?php
// Set cookie
setcookie("user","Ram",time()+3600);
echo "Cookie set<br>";

// Retrieve cookie
if(isset($_COOKIE['user'])){
	echo "Cookie value: ".$_COOKIE['user'];
}
else{
	echo "Cookie not set";
}
?>
