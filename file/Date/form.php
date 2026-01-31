<?php
if(!empty($_POST)){
    $date = $_POST['dob'];
    $d1=date_create($date);
    $date2=date('y-m-d');
    $d2=date_create($date2);
    $diff=date_diff($d2, $d1);
    echo ($diff->format("%R %a days"));
}
?>
<form action="" method="post">
    <input type="date" name="dob">
    <input type="submit" value="Submit">
</form>
<!-- //regular expression -->
 <!-- date must be in format y-m-d -->
  
  <input type="text" name="dob" pattern="\d{4}-\d{2}-\d{2}" required>