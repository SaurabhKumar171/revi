<?php

  if(isset($_POST['submit'])){
    $name=$_POST['name']?$_POST['name']:"Not Defined";
    $email=$_POST['email']?$_POST['email']:"Not Defined";
    $Phone=$_POST['phone']?$_POST['phone']:"Not Defined";
    $Gender=$_POST['Gender']?$_POST['Gender']:"Not Defined";
    $Password=$_POST['password']?$_POST['password']:"Not Defined";
    $Nationality=$_POST['Nationality']?$_POST['Nationality']:"Not Defined";
    

    //To upload image
    $errors=[];

    $filename=$_FILES['files']['name'];
    $tmpname=$_FILES['files']['tmp_name'];
    $filesize=$_FILES['files']['size'];
    $arr=explode('.',$filename);
    $fileextn=strtolower(end($arr));

    $all_extn=['jpg','jpeg','png'];

    if(!in_array($fileextn,$all_extn)){
      $errors[]="OOPS! Invalid file extensions.Only jpg,jpeg,png are allowed!";
    }

    if($filesize>2097152){
      $errors[]="OOPs! File size shouldn't br greater than 2MB";
    }

    if(empty($errors)){
      $destination="upload/".$filename;
    

    if(file_exists($destination)){
      $new_file="saurabh_".time().$filename;
      $destination="upload/".$new_file;
      $filename=$new_file;
    }

    if(move_uploaded_file($tmpname,$destination)){
      echo "success! File Uploaded successfully.";
    }
    else{
      echo "OOPS! File could not be Uploaded.";
    }
  }
   else{
    print_r($errors);
   }

   //creating session

   session_start();
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['Phone']=$Phone;
    $_SESSION['Gender']=$Gender;
    $_SESSION['Password']=$Password;
    $_SESSION['Nationality']=$Nationality;
    $_SESSION['files']=$filename;
  //  session_destroy();
    
 
  //including table
    include ("./table.php");

    // header("Refresh:2;URL=sess.php");
    

    

  $servername="localhost";
  $username="root";
  $pass="";
  $database="practice";
  
  $cons=mysqli_connect($servername,$username,$pass,$database); 
  

  
  if(!$cons){
      die("OOPS ! can't be connected".mysqli_connect_error());
  }
  else{
    echo "connected<br>";
  
    $sql="INSERT INTO `empolyee` (`Name`, `Email ID`, `Phone no.`, `Gender`, `Password`, `Nationality`) VALUES ('$name','$email','$Phone','$Gender','$Password','$Nationality','$filename')";
    $result=mysqli_query($cons,$sql);
  if($result){
      echo 'The record has added successfully!<br>';
   }
  else{
  'The record has not added successfully! because of ------> '.mysqli_error($cons);
    }
  }

}
else{
  echo "Please enter the details.";
}

  
  ?>