<?php
  session_start();
    if ( ! isset($_SESSION["uname"]) )
     {
     die("ACCESS DENIED"); ?>
        <p>Please <a href="login.php">Log In</a> to start.</p>
      <?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Food Restaurant</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="gk.png">

  <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--===============================================================================================-->  
 <style type="text/css">
    body{
    }
    #login{
      margin-top: 2%;
      border-radius:  20px;
      padding-right: 1%;
      background-color: white;
      padding-bottom:2%;
      box-shadow: 0 14px 18px 0 rgba(0,0,0,0.2);
  }
  img{
    float: left;
    border-radius: 10px;
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
      padding-right: 8%;
      padding-left: 8%;
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
input {
  width: 40%;
  padding: 12px 20px;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid blue;
}
table {
  border-collapse: collapse;
  width: 50%;
  margin-bottom: 4%;
}

th, td {
  padding: 2%;
  /*padding-left: 5%;
  padding-bottom: 6%;*/
  text-align: center;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="home.php"><img src="images/gk.png" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>

                <!-- Dropdown Menu -->          
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href=".footer">Contact</a>
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <div>
      <!-- <?php
            // if(!isset($_GET['id'])){
                // echo "no";
            // }
            // else{
              // echo "yes";
            // }
       ?> -->
    </div>
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <p class="p-large"></p>
                            <!-- <a class="btn-solid-lg page-scroll" href="#services">DISCOVER</a> -->
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->
<br>
<div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 style="font-family: bigmacca">ORDER</h2>
                      <div id="login" style="text-align: center;">
    <div><img src="gk.png" width="44%" height="540"></div>
    <!-- <h1 style="padding-top: 2%;font-family: bigmacca;">ORDER</h1> -->
    <div style="">
      
    <form onsubmit="return Order();" action="order1.php"  method="POST">
          <div>
            UserName<span style="padding-left: 2%"><input type="text" name="username" placeholder="Username" required>
          </div><br>
          <div>
            Email<span style="padding-left: 5%;"><input type="email" name="email" placeholder="Email" required>
          </div><br>
          <div>
            Address<span style="padding-left: 3%"><input type="text" name="address" placeholder="Address" required>
          </div><br>
          <div>
            Phone No.<span style="padding-left: 2%"><input type="text" name="phone" placeholder="Phone Number" required>
          </div><br>
          <div style="padding-left: 20%;">
  <table style="margin-left: 12%; float: left;" id="myTable">
  <tbody>  <tr>
    <th>ITEM</th>
    <th>QUANTITY</th>
    <th>PRICE</th>
    </tr>
  <tr>
  </tr>
  <tr style="color: black;">
    <td>Total</td>
    <td><p style="color: blue; font-size: 20px; padding-left: 2%;" id="de1" name="total"></p></td>
    <td><p style="color: blue; font-size: 20px; padding-left: 2%;" id="de"></p></td>
    </tr>
</tbody>
</table>

  <script type="text/javascript">
    var h1 = JSON.parse(window.localStorage.getItem("h1"));
    document.cookie="h1="+h1;
    var t1 = JSON.parse(window.localStorage.getItem("t1"));
    document.cookie="t1="+t1;
    var it = JSON.parse(window.localStorage.getItem("it"));
    document.cookie="item="+it;
    var len=h1.length;
    for(x1=0;x1<len;x1++){
      if(h1[x1]!=null && h1[x1]!=0){
  console.log(x1);
  var table = document.getElementById("myTable");
  var row = table.insertRow(1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  cell1.innerHTML = it[x1];
  cell2.innerHTML = h1[x1];
  cell3.innerHTML = t1[x1];

}
  }
 
  </script>
  </div><br>
            <input type="submit" class="button button2" value="ORDER" id="order">
        </form>
   </div>
  </div>
                        </div> <!-- end of col -->
            </div> <!-- end of row -->
            <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <script type="text/javascript">
      var total = localStorage.getItem("total");
      var qtot = localStorage.getItem("qtotal");
      var x=document.getElementById('de').innerHTML=total;
      var y=document.getElementById('de1').innerHTML=qtot;
      function Order(){
        document.cookie="total="+total;
        document.cookie="qtotal="+qtot;
      // alert("your food is successfully ordered");
        localStorage.clear();
      }
    </script>
<br>

<!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="footer-col">
                        <h4>Address</h4>
                        <p>Tamilnadu</p>
                        <p>Madurai</p>
                        <p>Phone:+91 1234567890</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="www.facebook.com">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="www.linked.in">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p  style="font-size: 20px;color: blue;font-family: bigmacca;" class="p-small">DEVELOPED BY A.KARTHIKEYAN</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>