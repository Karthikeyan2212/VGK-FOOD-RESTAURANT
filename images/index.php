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
        .name{
        	width: 310px;
        	height: 6%;
  			border: none;
  			border-bottom: 2px solid #0856cc;
        	padding-top: 1%;
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
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 80%;
  padding-left: 5%;
  margin-bottom: 2%;}
.button2:hover {
  background-color: #07b31c; /*#008CBA*/
  color: white;
}
#name1{
}

	</style>
	</head>
<body>
	<div id="login" style="text-align: center;">
		<div><img src="gk.png" width="44%" height="66.7%"></div>
		<h1 style="padding-top: 2%;font-family: bigmacca;">LOGIN</h1>
		<div style="">
			<form style="padding-left: 30%;padding-bottom: 4%;" action="valid.php" method="POST"> 
            <div class="input-container"> 
                <i class="fa fa-user icon"> 
              </i> 
                <p style="padding-right: 2%;margin-top: 2%;" id="name1"><input class="name" name="name" id="name" type="text" placeholder="Username"></p> 
            </div> 
            <div class="input-container"> 
                <i class="fa fa-key icon"> 
              </i> 
                <p style="padding-right: 2%;margin-top: 2%;" id="name1"><input class="name" name="pass" id="pass" type="password" placeholder="Password"></p>
            </div>
            <div>
       			<button class="button button2"><b>SUBMIT</b></button>     	
            </div>
        </form> 
	</div>
        <div>
            	<p style="color: green;"><span style="padding-left: 3%;">forgot password   <a href="fp.html">click here</a></p>
            	<p style="color: green;"><span style="padding-left: 3%;">Didn't have an account   <a href="signup.html">SIGN UP</a></p>
            </div>
	</div>
</body>
</html>