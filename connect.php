<?php
  $email=$_POST['email'];
  $password=$_POST['password'];
  $Confirm_password=$_POST['Confirm_password'];
  $Medium=$_POST['Medium'];
  $Github=$_POST['Github'];
  $Linkedin=$_POST['Linkedin'];
  $Firstname=$_POST['Firstname'];
  $Lastname=$_POST['Lastname'];
  $Mobilenumber=$_POST['Mobilenumber'];
  //Database connection
  $conn = new mysqli('localhost','root','','survey');
  if($conn->connect_error){
    die('Connection Failed  :'.$conn->connect_error);
    echo"Connection failed";
  }
  else{
    $stmt = $conn->prepare("insert into registration(email,password,Confirm_password,Medium,Github,Linkedin,Firstname,Lastname,Mobilenumber) values(?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssss",$email,$password,$Confirm_password,$Medium,$Github,$Linkedin,$Firstname,$Lastname,$Mobilenumber);
    $execval = $stmt->execute();
		echo $execval;
    echo"registration Successful...";
    $stmt->close();
    $conn->close();
  }
?>