<?php
 if(isset($_POST['submit'])){
  $uname=$_POST['uname'];
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];
  $con=new mysqli("localhost","root","","market");
  $sql="INSERT INTO user (username, password,email) VALUES ('$uname','$pwd','$email')";
  if($con->query($sql)==true)
  {
	  //echo "Registered successfully";
	  header("Location:login.html");
  }
  else
  {
	  header("Location:register.html");
  }
	 
  $con->close();
 }
?>