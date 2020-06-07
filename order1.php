<?php
   require_once "pdo.php";
   $total= $_COOKIE['total'];
$qtotal= $_COOKIE['qtotal'];
$name= $_POST['username'];
$email= $_POST['email'];
$addr= $_POST['address'];
$phone= $_POST['phone'];
setcookie('us1',$name);
setcookie('em1',$email);
setcookie('ad1',$addr);
setcookie('total',$total);
setcookie('qtotal',$qtotal);
setcookie('ph1',$phone);

$stmt = $pdo->prepare('INSERT INTO order1
        (Username, Email, Phone, Address, Quantitytotal, Total) VALUES ( :un, :em, :ph, :ad, :qt, :t)');
    $stmt->execute(array(
        ':un' => $name,
        ':em' => $email,
        ':ph' => $phone,
        ':ad' => $addr,
        ':qt' => $qtotal,
        ':t' => $total,
      )
    );
 
$row=0;
if(isset($_COOKIE['h1']) && isset($_COOKIE['t1']) && isset($_COOKIE['item'])){
    $h1=$_COOKIE['h1'];
    $h=explode(",", $h1);
    $t2=$_COOKIE['t1'];
    $t1 = explode(",", $t2);  
    $it1=$_COOKIE['item'];
    $it = explode(",", $it1);
    for($i=0;$t1[$i]!=null;$i++){
       if($t1[$i]!=0){
        $i1=$it[$i];
        $i2=$h[$i];
        $i3=$t1[$i];
      $stmt = $pdo->prepare('INSERT INTO fooditems
        (Username, Item, Quantity, Total) VALUES ( :un, :i1, :i2, :i3)');
    $stmt->execute(array(
        ':un' => $name,
        ':i1' => $i1,
        ':i2' => $i2,
        ':i3' => $i3)
    );
    $row=true;
      }
      }
    }
   if($row==true)
   {
	   echo '<script type="text/javascript">
          window.onload = function () { alert("your food is ordered successfully"); }
                </script>';
         header("refresh:1; url=pdf.php");
         // unset($_COOKIE['total']);
         // unset($_COOKIE['qtotal']);
         // unset($_COOKIE['h1']);
         // unset($_COOKIE['t1']);
         // unset($_COOKIE['it']);
   }
   else
   {
	   echo '<script type="text/javascript">
          window.onload = function () { alert("Food is not ordered"); }
                </script>';
         header("refresh:1; url=order.php");
   }
?>