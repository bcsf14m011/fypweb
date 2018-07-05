<!DOCTYPE html>
<html>
<head>
<title>Enter Pin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;}

.topnav {
	margin-left:0%;
	margin-right:0%;
  overflow: hidden;
  background-color:#2E4B7A;
  margin-top:-2%;
}
.topnav1 {
	margin-left:0%;
	margin-right:0%;
	padding-top:3%;
  overflow: hidden;
  background-color:#5cb85c;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 50px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: none;
  color: white;
}

.topnav .icon {
  display: none;
}





.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}



@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}


.square {
    float:left;
    position: relative;
    width: 20%;
    padding-bottom: 20%; /* = width for a 1:1 aspect ratio */
    margin:1.66%;
    overflow:hidden;
	background-color:#2E4B7A;
	margin-left:5%;
}
.square1 {
    float:left;
    position: relative;
    width: 20%;
    padding-bottom: 20%; /* = width for a 1:1 aspect ratio */
    margin:1.66%;
    overflow:hidden;
	background-color:white;
	margin-left:1%;
}
.square2 {
    float:left;
    position: relative;
    width: 20%;
    padding-bottom: 20%; /* = width for a 1:1 aspect ratio */
    margin:1.66%;
    overflow:hidden;
	background-color:white;
	margin-left:5%;
}
.square3 {
    float:left;
    position: relative;
    width: 100%;
    /* = width for a 1:1 aspect ratio */
   
    overflow:hidden;
	background-color:white;
	
	
}
.square4 {
    float:left;
    position: relative;
   width: 40%;
    padding-bottom: 1%;
   
    margin:1.66%;
    overflow:hidden;
	background-color:white;
	margin-left:5%;
	border:2px solid white;
	 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	
	
}


.content {
    position:absolute;
    height:80%; /* = 100% - 2*10% padding */
    width:90%; /* = 100% - 2*5% padding */
    padding: 10% 5%;
	color:white;
	margin-top:35%;
	
}
.content1 {
    position:absolute;
    height:80%; /* = 100% - 2*10% padding */
    width:90%; /* = 100% - 2*5% padding */
    padding: 10% 5%;
	color:white;
	
	
}
.content1 {
    position:absolute;
    height:80%; /* = 100% - 2*10% padding */
    width:90%; /* = 100% - 2*5% padding */
    padding: 10% 5%;
	color:black;
	
	
}

.content1 .rs{
    width:100%;
    height:80%;
   
}
#footer-sub{
    background-color: #f3f7f8;
    border-top: 1px solid #dbdbdb;
}

#footer-main{
    background-color: #012b72;
}

#footer-sub h5{
    color:#565656;
    margin-top: 25px;
}

#footer-sub ul{
    list-style: none;
    margin-top: 20px;
}

#footer-sub hr{
    margin: 5px;

}

#footer-sub ul li{
margin-left: -3px;
}

#footer-sub a:link {
    text-decoration: none;
    color:#565656;
    font-size: 12px;
}

#footer-sub a:visited {
    text-decoration: none;
    color:#565656;
}


#footer-sub a:hover {
    text-decoration: none;
    color: blue;
}


#footer-sub a:active {
    text-decoration: none;
    color:#565656;
}

.vertical-line{
    border-right: 1px solid #dbdbdb;
    margin: 8px;
    padding: 0px;
}

.glyphicon {
    font-size: 35px;
     color:#6d6c6c;
}

#sub-two{
    margin: 0px;
    padding: 0px;
}

#sub-two .vertical-line h4{
    color:#6d6c6c;
}


#footer-main ul{
    list-style: none;
	margin-left:18%;
}

#footer-main ul li{
    float:left;
    text-decoration: none;
    padding-left: 40px;
    margin-top: 17px;
	
}

#footer-main a:link {
    color:white;
    font-size: 12px;
}

#footer-main a:visited {
    color:white;
}


#footer-main a:hover {
    text-decoration: none;
    color: #00b9f5;
}


#footer-main a:active {
    color:white;
}

.glyphicon-search{
    font-size: 20px;
}

#social-menu{
    float: right;
   margin-right: 60px;
}

#side-padding{
    padding: 0px;
    margin: 0px;
}

.p1:hover {
    background-color: #3368BD;
}
input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 11px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.button:hover {
    background-color: #45a049;}
</style>
</head>
<body>
 <a href="/" >
<div class="logo" style="padding-top:10px;padding-left:60px">
<img src="img/logo.png" />

</div>
</a>

<br><br>




<div class="topnav" id="myTopnav" style= "padding-left:50px">
  <a href="/" class="active">About Us</a>
  <a href="/appeal">Lodge Appeal</a>
  <a href="#contact">Services</a>
  <a href="#financials">Financials</a>
  <a href="#financials">Media Room</a>
 
  <a href="#about">Tax Calculator</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>




<!-- #endregion Jssor Slider End -->
<br>
<br>
<br>
<h2 align="center" style="color:green" >Please Enter Your  Propery Identification Number (PIN) To Continue</h2>


<p align="center" ><font size="2"> <i>Property Identification Number (PIN) is the 16 Digit Number written on your PT10-Challan form like (1850200103301203)</i></font></p>

<form action="/pinverify"  method="post" onsubmit=return myFunction() align="center">
@csrf
<input type="text"  id="numb" name="id" >
<input type="submit" class="button" value="Submit" name="verify">

</form>
<p id="demo"></p>

<script>
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 16
    if (isNaN(x) || x <123456712342) {
        alert("Invalid PIN Entered");
	return false;
    } else {
        return true;
    }
}
</script>
<br>
<br>
<br>
<div class="square3">
   
<img style= " width: 100%;"src="img/footer.jpg" />

	
</div>
</body>
</html>
