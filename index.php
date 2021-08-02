<?php
 
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "admin123";
  $db = "smartmethods_tasks";
  
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) ;
     
if (isset($_POST['forward'])) {
   $m1 = $_POST['forward'];
}
else
$m1=0;

if(isset($_POST['left'])) {
   $m2 = $_POST['left'];
}
else
$m2=0;

if(isset($_POST['stop'])) {
   $m3 = $_POST['stop'];
}
else
$m3=0;
if(isset($_POST['right'])) {
   $m4 = $_POST['right'];
}
else
$m4=0;
if(isset($_POST['backward'])) {
   $m5 = $_POST['backward'];
}
else
$m5=0;
$sql = "UPDATE robot_directions SET `forward` = $m1, `left` = $m2, `stop` = $m3, `right` = $m4, `backward` = $m5 WHERE id=1;";
$result = $conn->query($sql);
header("Location:index.html");
exit();

?>