<?php
$servername="localhost";
$username="root";
$pass="";
$database="practice";

$cons=mysqli_connect($servername,$username,$pass);

$sql="CREATE TABLE `practice`.`employee` (`Name` VARCHAR(100) NOT NULL , `Email` VARCHAR(100) NOT NULL , `Phone Number` INT(12) NOT NULL , `Gender` VARCHAR(7) NOT NULL , `Password` VARCHAR(20) NOT NULL , `Nationality` VARCHAR(50) NOT NULL , `File` VARCHAR(300) NOT NULL , PRIMARY KEY (`Phone Number`)) ENGINE = InnoDB;
";

mysqli_query($cons,$sql);

if(!$cons){
    die("OOPS ! table can't be created".mysqli_connect_error());
}
else{
  echo "Table created";
}
?>