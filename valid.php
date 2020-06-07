<?php
   $con=mysqli_connect('localhost','root','');
   if(!$con)
   {
   echo 'Not Connected to server';  
   }
   if(!mysqli_select_db($con,'fooddb'))
   {
     echo 'db not selected';
   }session_start();
   $name= $_POST['name'];
   $pwd= $_POST['pass'];
   $_SESSION["username"]=$name;
   $sql ="select * from signup";
   $result= $con-> query($sql);
   if($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()){
      $field1name = $row["Username"];
        $field2name = $row["Password"]; 
        if($field1name == $name ){
    }
    if($field2name == $pwd ){
         echo '<script type="text/javascript">
          window.onload = function () { alert("successfully logged in"); }
                </script>';
         header("refresh:1; url=home.html");
           }
    else
    {
      echo '<script type="text/javascript">
          window.onload = function () { alert("enter correct name and password"); }
                </script>';
                header("refresh:1; url=index.html");
    }
  }
 }   
$con-> close();
?>