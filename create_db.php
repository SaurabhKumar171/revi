<?php
$servername="localhost";
$username="root";
$pass="";
//$database="practice";

$cons=mysqli_connect($servername,$username,$pass);

$sql="CREATE database practice";

mysqli_query($cons,$sql);

if(!$cons){
    die("OOPS ! can't be connected".mysqli_connect_error());
}
else{
  echo "connected";
}
?>

