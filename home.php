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
<style type="text/css">
	<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column2 {
    background-color: white;
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row1 {margin: 0 0px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 400px) {
  .column2 {
    width: 100%;
    background-color: white;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  text-align: center;
  font-size: 20%;
  color: black;
  border-radius: 5px;}
.card2:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 4px 16px;
}
 .button2 {
 			margin-left: 20%;
  			background-color: white; 
  			border-radius: 25px;
  			color: #0856cc; 
  			font-size: 15px;
		 	text-shadow: 5%;
		  	border: 2px solid lightgreen;
 			padding-right: 12%;
 			padding-left: 12%;
 			padding-top: 1%;
 			padding-bottom: 1%;
 			margin-bottom: 5%;
 			}
 .button2:hover {
  background-color: #07b31c; /*#008CBA*/
  color: white;
}
.quantity{
	width:30%;
	font-size: 16px;
	margin-right: 20%;
	margin-top: 3%;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 14px;
  text-align: left;
  font-size: 20px;
  border-bottom: 1px solid #ddd;
  width: 20px;
}

tr:hover {background-color:#f5f5f5;}
#toast {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  color: blue;
  background-color: lightgreen;
  text-align: center;
  border-radius: 20px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#toast.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
#accordion {
  width: 1000px;
  }

.card3 h3 span.fa {
  float: left;
  box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1);
  text-align: center;
  font-size: 20%;
  color: black;
  border-radius: 1px;
}

.card3 h3 a {
  display: block;
}
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
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Evolo</a> -->

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
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#foods">Foods</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#mycart">My CART</a>
                </li>
                <p style="color: white;">(</p><p style="color: white;float:center ;padding-bottom: 10px;" id="cnt">0</p><p style="color: white;">)</p>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#chefs">Chefs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">About</a>
                </li>

                <!-- Dropdown Menu -->          
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
    	        <li class="nav-item">
                    <a class="nav-link page-scroll" href="index.php">LOGIN/SIGNUP</a>
                </li>
                <li class="nav-item">
                    <input type="submit" class="nav-link page-scroll" onclick ="return de()"  value="logout">
                </li>
            </ul>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                        	<p class="p-large"><b><p style="float: right;padding-right: 85%;color: black;" id="na"></p></b></p>
                            <p class="p-large"><b>Hello </b><span><?php echo(' '.$_SESSION['uname']); ?></span></p>
                            <p class="p-large"><b>Welcome to our VGK RESTAURANT</b></p>
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


    <!-- Services -->
    <div id="foods">
        <div class="container">
        	<div class="col-lg-12">
        		<br><br><br>
                  <h2 style="text-align: center;">Foods</h2>
                    <br>
                    </div>
<div class="row1">
    <div class="column2">
    <div class="card2">
      <img src="d.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Dhosai</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">20</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" value="dhosai" id="dhosai"><b>ADD TO CART</b></button> 
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="i.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Idly</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">5</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity1">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" id="idly"><b>ADD TO CART</b></button> 
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="p.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Pongal</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">25</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity2">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" id="pongal"><b>ADD TO CART</b></button> 
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="po.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Parotta</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">10</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity3">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" id="poratta"><b>ADD TO CART</b></button> 
    </div>
  </div>
  </div>  
  <br>
<div class="row1">
    <div class="column2">
    <div class="card2">
      <img src="meals.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Meals</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">80</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity4">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" value="Meals" id="meals"><b>ADD TO CART</b></button> 
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="fried.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Fried Rice</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">60</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity5">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" value="Fried Rice" id="fried"><b>ADD TO CART</b></button> 
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="chicken.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Chicken Briyani</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">80</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity6">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" value="Chicken Briyani" id="chicken"><b>ADD TO CART</b></button> 
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="mutton.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Mutton Briyani</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">100</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity7">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" value="Mutton Briyani" id="mutton"><b>ADD TO CART</b></button> 
    </div>
  </div>
  </div>  
<br>
<div class="row1">
    <div class="column2">
    <div class="card2">
      <img src="lemon.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Lemon Juice</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">10</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity8">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" value="Lemon Juice" id="lemon"><b>ADD TO CART</b></button> 
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="maaza.png" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Maaza</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">25</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity9">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" value="Maaza" id="maaza"><b>ADD TO CART</b></button> 
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="sprite.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Sprite</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">10</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity10">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" value="Sprite" id="sprite"><b>ADD TO CART</b></button> 
    </div>
  </div>
  <div class="column2">
    <div class="card2">
      <img src="Bovonto.jpg" width="100%" height="196"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Bovonto</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                                <p style="color: blue;"><span style="font-size: 18px;" class="currency">$</span><span style="font-size: 30px;" class="value">10</span></p>
                            </div>
                            <hr class="cell-divide-hr">
                            <p><h2 style="font-size: 18px;float: left;">Quantity:</h2>  <input class="quantity" min="0" name="quantity" value="1" type="number" id="quantity11">
</p>
     </div> <button class="button button2" onclick="Addtocart(this.id)" values="Bovonto" id="bovonta"><b>ADD TO CART</b></button> 
    </div>
  </div>
  </div>  



             <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->

<!-- Request -->
    <div id="mycart" class="form-1">
        <div class="container">
            <div class="row">
                       <div class="col-lg-12">
                    <h2 style="text-align: center;">MY CART</h2>
<table id="myTable">
  <tbody>  <tr>
    <th>ITEM</th>
    <th>QUANTITY</th>
    <th>PRICE</th>
    <th><span style="padding-left: 28%;">Remove</th>
  </tr>
  <tr>
  </tr>
</tbody>
</table>
<table id="totaltable">
	<tr>
		<td><p id="c1"></p></td>
		<td><p id="c2"></p></td>
		<td><p id="c3"></p></td>
	</tr>
</table>
<br>
<table><tr><td><button style="background-color: #296ef0;color: white;" class="button button2" onclick="Total()"><b>TOTAL</b></button>
</td><td><button style="background-color: red;color:white;" class="button button2" onclick="Removeall()"><b>CLEAR ALL</b></button></td></tr></table>
<br>
<button style="margin-left: 28%;" class="button button2" onclick="Order()"><b>ORDER</b></button>
<div id="toast">Added to cart</div>

<script type="text/javascript">
function toast() {
  var x = document.getElementById("toast");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
}
	var x,total1=0,qtot=0;
  var ir=1;
var q1;
		// var name=sessionStorage.getItem("name");
		// document.getElementById('na').innerHTML=name;
		var items=['dhosai','idly','pongal','poratta','meals','fried','chicken','mutton','lemon','maaza','sprite','bovonta'];
		var x1;
		var qt=0;
    var h1 = new Array(20);
    var t1= new Array(20);
    var it=new Array(20);
    var c=0;
    var k=0;
    var j=0;
    function Addtocart(clid) {
		toast();
		x=clid;
		for(x1=0;x1<12;x1++){
			if(x==items[x1]){
				var q=document.getElementById('quantity').value;
		var q1=document.getElementById('quantity1').value;
		var q2=document.getElementById('quantity2').value;
		var q3=document.getElementById('quantity3').value;
		var q4=document.getElementById('quantity4').value;
		var q5=document.getElementById('quantity5').value;
		var q6=document.getElementById('quantity6').value;
		var q7=document.getElementById('quantity7').value;
		var q8=document.getElementById('quantity8').value;
		var q9=document.getElementById('quantity9').value;
		var q10=document.getElementById('quantity10').value;
		var q11=document.getElementById('quantity11').value;
		var quan=[q,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11];
		var price=[20,5,25,10,80,60,80,90,10,25,10,10,10];
      	var qt=parseInt(quan[x1],10);
  			qtot+=qt;
        h1[j] = qt;
      document.getElementById('cnt').innerHTML=qtot;
			total=qt*price[x1];
      t1[j]=total;
      it[j]=items[x1];
      total1+=total;	
      j++;
			}
		}
  var table = document.getElementById("myTable");
  var row = table.insertRow(1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  cell1.innerHTML = x;
  cell2.innerHTML = qt;
  cell3.innerHTML = total;
  var btn = document.createElement("button");
  btn.innerHTML = "Remove";
  btn.setAttribute("id",ir);
  ir++;
  btn.onclick =function(){
  	Remove(this,ir);
  };
  cell4.append(btn);}
function Total(){
	var t1 = document.getElementById("totaltable");
	var cell1=document.getElementById('c1');
	var cell2=document.getElementById('c2');
	var cell3=document.getElementById('c3');
    cell1.innerHTML = "Total";
    cell2.innerHTML = qtot;
    cell3.innerHTML = total1;
    localStorage.setItem("total", total1);
    localStorage.setItem("qtotal", qtot);
}
var d1=new Array(20);
    var d2=new Array(20);
    var d3=new Array(20);
     var d=0;
function Remove(r,i) {
  	var i1 = r.parentNode.parentNode.rowIndex;
    var zx=document.getElementById("myTable").rows[i1].cells[0].innerHTML;
    d1[d] = zx;
    var sqt=parseInt(document.getElementById("myTable").rows[i1].cells[1].innerHTML);
    d2[d]=sqt;
    qtot=qtot-sqt;
    var st=parseInt(document.getElementById("myTable").rows[i1].cells[2].innerHTML);
    d3[d]=st;
    total1=total1-st;
    d++;
    document.getElementById("myTable").deleteRow(i1);
 
}
 
function Removeall() {
  	// var i1 = r.parentNode.parentNode.rowIndex;
   // document.getElementById("myTable").deleteRow(i1);
   var tableHeaderRowCount = 1;
var table = document.getElementById('myTable');
var rowCount = table.rows.length;
for (var i = tableHeaderRowCount; i < rowCount; i++) {
    table.deleteRow(tableHeaderRowCount);
    total1=0;
    qtot=0;
    c=0;
    k=0;
    j=0;
}
var t1 = document.getElementById("totaltable");
	var cell1=document.getElementById('c1');
	var cell2=document.getElementById('c2');
	var cell3=document.getElementById('c3');
    cell1.innerHTML = "";
    cell2.innerHTML = "";
    cell3.innerHTML = "";
    document.getElementById('cnt').innerHTML=0;
   // total1=total1-(price[i]*parseInt(quan[i]));
   // qtot=qtot-(parseInt(quan[i]));

}
function Order(){
  if(d!=0){
      // var n1=new Array(20);
      // var n2=new Array(20);
      // var n3=new Array(20);
      // var q=0;
      for(var i=0;i<d;i++){
        for(var k=0;k<j;k++){
          if(d1[i]==it[k] && d2[i]==h1[k] && d3[i]==t1[k]){
            it[k]=0;
            h1[k]=0;
            t1[k]=0;
          }
          else{
            // n1[q]=it[k];
            // n2[q]=h1[k];
            // n3[q]=t1[k];
            // q++;
          }
        }
      }	
      window.localStorage.setItem("h1", JSON.stringify(h1));
      window.localStorage.setItem("t1", JSON.stringify(t1));
		  window.localStorage.setItem("it", JSON.stringify(it));
    	c=0;
      k=0;
      j=0;
      if(h1[0]!=null){
      window.location.href="order.php";		
    }
    else{
      alert("select items from the menus to order food.");
    }
    }
    else{
      window.localStorage.setItem("h1", JSON.stringify(h1));
      window.localStorage.setItem("t1", JSON.stringify(t1));
      window.localStorage.setItem("it", JSON.stringify(it));
      if(h1[0]!=null){
      window.location.href="order.php";   
    }
    else{
      alert("select items from the menus to order food.");
    }
    }
}
function de(){
	localStorage.clear();
	window.location.href="logout.php";
}
</script>

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                 <!-- end of row -->
        </div> <!-- end of container -->
 	   </div> <!-- end of form-1 -->
    <!-- end of request -->

<br><br><br>
    <!-- Chefs -->
    <div id="chefs" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CHEFS</h2>
                    <p class="p-heading p-large">We've the well skilled person in cooking .for them cooking is the main focus and to give del</p>
                </div> <!-- end of col -->
            <div class="row1">
    <div class="column2">
    <div class="card2">
      <img src="images/chef-1.jpg" width="100%"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Grey</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                            </div>
            
     </div>  
    </div>
  </div>
   <div class="column2">
    <div class="card2">
      <img src="images/chef-2.jpg" width="100%"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Susan</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                            </div>
            
     </div>  
    </div>
  </div>
   <div class="column2">
    <div class="card2">
      <img src="images/chef-3.jpg" width="100%"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Ben</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                            </div>
            
     </div>  
    </div>
  </div>
   <div class="column2">
    <div class="card2">
      <img src="images/chef-4.jpg" width="100%"><span style="padding-right: 20%;">
      				<p style="padding-top: 6%;font-size: 20px;color: black;">Catlina</p>
                            <div style="padding-top: 2%;" class="card-body"><div class="price">
      						<hr class="cell-divide-hr">
                            </div>
            
     </div>  
    </div>
  </div>  

            </div> <!-- end of row -->
            </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->
    <!-- Testimonials -->
    <!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>INFORMATION ABOUT OUR WEBSITE</h1>
                    <h2>About The Team</h2>
                    <p class="p-heading p-large">Meat our team of specialized marketers and business developers which will help you research new products and launch them in new emerging markets</p>
                    <h2>FAQ's</h2>
                    <div id="accordion">
      <div class="card-block">
        <div id="accordG1">
          <div class="card3">
            <div class="card-header">
              <h4><a data-toggle="collapse" data-parent="#accordG1" href="#collapse2">How to Order Food<span style="padding-left: 20%;float: right;" class="fa fa-caret-down"></span></a></h4>
            </div>
            <div id="collapse2" class="collapse">
              <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1);
  transition: 0.3s;
  text-align: left;
  color: black;
  border-radius: 1px;" class="card3-block">
                <span class="card3-text">1.select your menu and click Add to cart</span><br>
                <span class="card3-text">2.It will be in your cart,if you want add one more item means then you can add with quantity</span><br>
                <span class="card3-text">3.after that click Total button to check total</span><br>
                <span class="card3-text">4.Then click ORDER button to order the food and in next page it will ask some information like (name,phone,address) to deliver the food in your home.</span>
              </div>
            </div>
          </div>
        </div>
        <div id="accordG2">
          <div class="card3">
            <div class="card-header">
              <h4><a data-toggle="collapse" data-parent="#accordG2" href="#collapse3">How to pay for the ordered foods.<span style="padding-left: 10%;float: right;" class="fa fa-caret-down"></span></a></h4>
            </div>
            <div id="collapse3" class="collapse">
              <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1);
  transition: 0.3s;
  color: black;
  border-radius: 1px;" class="card3-block">
                <span class="card3-text">There are two ways to pay money,</span><br>
                <span class="card3-text">1.Pay money by online.</span><br>
                <span class="card3-text">2.Pay money at the time of delivery.</span>
              </div>
            </div>
          </div>
        </div>
        
        <div id="accordG3">
          <div class="card3">
            <div class="card-header">
              <h4><a data-toggle="collapse" data-parent="#accordG3" href="#collapse4">In future any new feature will come or not<span style="padding-left: 10%; float: right;" class="fa fa-caret-down"></span></a></h4>
            </div>
            <div id="collapse4" class="collapse">
              <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1);
  transition: 0.3s;
  text-align: center;
  color: black;
  border-radius: 1px;" class="card3-block">
                <span class="card3-text">Yes,frequently we are updating our site by adding new features.</span>
              </div>
            </div>
          </div>
        </div>
        <div id="accordG4">
          <div class="card3">
            <div class="card-header">
              <h4><a data-toggle="collapse" data-parent="#accordG4" href="#collapse5">After ordering the food is it required to logout from the site?<span style="padding-left: 10%; float: right;" class="fa fa-caret-down"></span></a></h4>
            </div>
            <div id="collapse5" class="collapse">
              <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.1);
  transition: 0.3s;
  text-align: center;
  color: black;
  border-radius: 1px;" class="card3-block">
                <span class="card3-text">Yes,if the laptop,pc or mobile is not yours. then it is required to logout your account from our site.</span>
              </div>
            </div>
          </div>
        </div>
        
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->


    <!-- Contact -->
    <div style="text-align: center;" id="contact" class="form-2">
        <div style="text-align: center;" class="container">
            <div  class="row">
                <div class="col-lg-12">
                    <h2>Contact Information</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                        <li><i class="fas fa-map-marker-alt"></i>Tamilnadu,Madurai.</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:123456789">+91 1234567890</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="">vgkrestaurant@gmail.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <!-- end of col -->
                <div style="padding-left: 25%;padding-right: 25%;" class="col-12">
                    
                    <!-- Contact Form -->
                    <form action="message.php"  method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="message" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control-submit-button" value="SEND MESSAGE">
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

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
                <div class="col-md-8">
                    <div class="footer-col right">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i style="padding-left: 40%;" class="fas fa-square"></i>
                                <a style="padding-left: 43%;" class="media-bod" href="#home">HOME</a>
                            </li>
                         <li class="media">
                                <i style="padding-left: 40%;" class="fas fa-square"></i>
                                <a style="padding-left: 43%;"  class="media-boy" href="#mycart">MYCART</a>
                            </li>
                            <li class="media">
                                <i style="padding-left: 40%;" class="fas fa-square"></i>
                                <a style="padding-left: 43%;" class="media-boy" href="#chefs">CHEFS</a>
                            </li>   
                            <li class="media">
                                <i style="padding-left: 40%;"class="fas fa-square"></i>
                                <a style="padding-left: 43%;" class="media-bo" href="#about">ABOUT</a>
                            </li>
                            <li class="media">
                                <i style="padding-left: 40%;" class="fas fa-square"></i>
                                <a style="padding-left: 43%;" class="media-bod" href="#contact">CONTACT</a>
                         	   </li>
                       </ul>
                    </div>
                </div> <!-- end of col -->
                <div" class="col-md-2">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="www.facebook.com">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="www.instagram.com">
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