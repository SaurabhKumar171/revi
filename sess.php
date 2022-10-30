<?php
 session_start();
$name=$_SESSION["name"];
$phone=$_SESSION["Phone"];
$email=$_SESSION["email"];
$Gender=$_SESSION["Gender"];
$Password=$_SESSION['Password'];
$Nationality=$_SESSION["Nationality"];

    echo "Your name is ".$name."<br>";
    echo "Your email_id is ".$email."<br>";
    echo "Your phone number is ".$phone."<br>";
    echo "Your gender is ".$Gender."<br>";
    echo "Your password is ".$Password."<br>";
    echo "Your nationality is ".$Nationality."<br>";
?>