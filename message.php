<?php
   require_once "pdo.php";
   $name1= $_POST['name'];
   $email= $_POST['email'];
   $text= $_POST['message'];
   $row=0;
   if(isset($name1) && isset($email) && isset($text)){
   $stmt = $pdo->prepare('INSERT INTO message
        (name,email,text1) VALUES ( :n, :em, :te)');
    $stmt->execute(array(
        ':n' => $name1,
        ':em' => $email,
        ':te' => $text,
      )
    );
	$row=true;
}
   if($row==true)
   {
	   echo '<script type="text/javascript">
          window.onload = function () { alert("Message was sent successfully"); }
                </script>';
         header("refresh:1; url=home.php");
   }
   else
   {
	   echo '<script type="text/javascript">
          window.onload = function () { alert("Message was not sent"); }
                </script>';
         header("refresh:1; url=home.php");
   }
?>