<?php 
   require_once "pdo.php";
   $name= $_POST['name'];
$pwd= $_POST['pass'];
$email= $_POST['email'];
$phone= $_POST['phone'];
   $sql ="INSERT INTO signup(Username,Email,Phone,Password) VALUES('$name','$email','$phone','$pwd')";
   $result=mysqli_query($con,$sql);
   if($result==true)
   {
	   echo 'Account is created';
         header("refresh:1; url=index.php");
   }
   else
   {
	   echo 'Account is not created';
         header("refresh:1; url=signup.html");
   }
 $con-> close();

?>