<html>
    <meta http-equiv="refresh" content="10">
</html>


<?php
// Setcookie('user','Ram',);
// expiry of cookie we give here 10 sec
// for the expiry
Setcookie('user','Ram',time()+10);
if(isset($_COOKIE['user'])) {
    echo "Cookie is set!";
} else {
    echo "Cookie is not set!";
}