<html>
<head>
	<title>GK RESTAURANT</title>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="re.ico"/>
<style type="text/css">
		body{
			background-image: url(bf3.jpg);
			background-repeat: no-repeat;
		}
		#login{
			margin-top: 6%;
			margin-left: 10%;
			margin-right: 12%;
			border-radius: 20px;
			padding-right: 1%;
			background-color: white;
			padding-bottom: 2%;
			box-shadow: 0 14px 18px 0 rgba(0,0,0,0.2);
	}
	img{
		float: left;
		border-radius: 10px;
	}

        .input-icons i {
        	float: top;
        	padding-left:5%;
        	padding-top: 1%;
        	margin-top: 1%;
        	color: #0856cc;  
        } 
          
        .input-icons { 
        	color: blue;
        } 
          
        .icon { 
            color: #0856cc;
            padding-top: 3.2%;
            padding-left:12%;  
            min-width: 20%;  
        } 
          
        .input-field { 
            width: 20%; 
            border-radius: 4px; 
            margin-top: 2%;
            padding-top: 4%;
        } 
        h1 { 
            color: #08c91f;

        } 
         .button2 {
  			background-color: white; 
  			border-radius: 25px;
  			color: #0856cc; 
  			font-size: 140%;
		 	text-shadow: 5%;
		  	border: 2px solid lightgreen;
 			padding-right: 12%;
 			padding-left: 12%;
 			padding-top: 1%;
 			padding-bottom: 1%;
 			}

.button2:hover {
  background-color: #07b31c; /*#008CBA*/
  color: white;
}
#name1{
}

        .name{
        	width: 310px;
        	height: 6%;
  			border: none;
  			border-bottom: 2px solid #0856cc;
        	padding-top: 1%;
        
        .buton2 {
  			background-color: white; 
  			border-radius: 25px;
  			color: #0856cc; 
  			font-size: 140%;
		 	text-shadow: 5%;
		  	border: 2px solid lightgreen;
 			padding-right: 12%;
 			padding-left: 12%;
 			padding-top: 1%;
 			padding-bottom: 1%;
 			}
 			
	</style>
  <?php 
  require_once "pdo.php";
  session_start();
  if ( isset($_POST['name']) && isset($_POST['pass']) ) {
  unset($_SESSION['name']);
  if($_POST['name']=="" && $_POST['pass']==""){
        $_SESSION["error"] = "Name and Password is empty.";
        header( 'Location: signup.php' ); 
        error_log("Login fail ".$_POST['pass']);
        return;
    }
    if($_POST['name']==""){
    $_SESSION["error"] = "Name is empty.";
        header( 'Location: signup.php' ); 
        error_log("Login fail ".$_POST['pass']);
        return;
    }
    if($_POST['email']==""){
    $_SESSION["error"] = "Email is empty.";
        header( 'Location: signup.php' ); 
        error_log("Login fail ".$_POST['pass']);
        return;
    }
    if($_POST['pass']==""){
     $_SESSION["error"] = "Password is empty.";
       header( 'Location: signup.php' ); 
       error_log("Login fail ".$_POST['pass']);
        return;
    }
    if($_POST['phone']==""){
    $_SESSION["error"] = "Phone Number is empty.";
        header( 'Location: signup.php' ); 
        error_log("Login fail ".$_POST['pass']);
        return;
    }
    $stmt = $pdo->prepare('INSERT INTO signup
        (Username, Email, Phone, Password) VALUES ( :mk, :mo, :yr, :mi)');
    $stmt->execute(array(
        ':mk' => $_POST['name'],
        ':mo' => $_POST['email'],
        ':yr' => $_POST['phone'],
        ':mi' => $_POST['pass'])
    );

    unset($_SESSION['success']);
    $_SESSION['success']="Account Created";
    header( 'Location: index.php' ); 
    error_log("Record Inserted".$_SESSION['success']);
    return;

}
?>
	<!-- <script type="text/javascript">
		function senddata(){
			var name=document.getElementById('name').value;
			var pass=document.getElementById('pass').value;
			var email=document.getElementById('email').value;
      var phone=document.getElementById('phone').value;
      var xhttp=new XMLHttpRequest();
			xhttp.open("POST","getdata.php",true);
			xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
			xhttp.send("name="+name+"&pass="+pass+"&email="+email+"&phone="+phone);
			}
	</script> -->
	</head>
<body>
	<div id="login" style="text-align: center;">
		<div><img src="gk.png" width="44%" height="66.7%"></div>
		<h1 style="padding-top: 2%;font-family: bigmacca;">SIGNUP</h1>
		<div style="">
			<form style="padding-left: 30%;padding-bottom: 1%;" method="POST"> 
            <p><?php if ( isset($_SESSION["error"]) ) {
        echo('<p style="color:red">'.$_SESSION["error"]."</p>\n");
                        unset($_SESSION["error"]);
                      } ?>
        </p>
            <div class="input-container"> 
                <p style="padding-right: 2%;margin-top: 2%;" id="name1">Username: <input class="name" name="name" id="name" type="text" placeholder="Username"></p> 
            </div> 
            <div class="input-container"> 
                <p style="padding-right: 2%;margin-top: 2%;" id="name1"><span style="padding-left: 40px;">Email: <input class="name" id="email" name="email" type="email" placeholder="Email"></p> 
            </div> 
            <div class="input-container"> 
                <p style="padding-right: 2%;"><span style="padding-left: 10px;">Password:<input class="name" id="pass" name="pass" type="password" placeholder="Password"></p> 
            </div>
            <div class="input-container"> 
                <p style="padding-right: 2%;" id="name1"><span style="padding-right: 40px;">Phone Number: <input class="name" id="phone" name="phone" type="text" placeholder="Phone Number"></p> 
            </div> 
            <div>
       			<button class="button button2"><b>SUBMIT</b></button>     	
            </div>
            <div>
              <p style="color: green;"><span style="padding-left: 3%;"><a href="index.php">SIGN IN</a></p>
            </div>
        </form> 
	</div>
	</div>
</body>
</html>