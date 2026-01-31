<!-- Write a program user login activity.
if the user is inactive but logged in for more than 1 minute, then
destroy the session and redirect to the login page use function. -->
<?php
session_start();
function checkSessionTimeout($timeout = 10) {


if(isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 60)) {
    session_unset();     
    session_destroy();   
    header("Location: login.php");
    exit();
}
$_SESSION['last_activity'] = time(); 
}
checkSessionTimeout(10);

?>