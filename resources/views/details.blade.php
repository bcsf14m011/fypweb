@if (session('variableName')=='yes')
<!DOCTYPE html>
<html>
<head>
<title>Property Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:0;    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;background-color:#DBF5D3}

.topnav {
	margin-left:0%;
	margin-right:0%;
  overflow: hidden;
  background-color:green;
  margin-top:-2%;
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
    margin:1.66%;
    overflow:hidden;
	background-color:white;
	margin-left:5%;
	
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
table, th, td {
//    border: 1px solid white;
    border-collapse: collapse;
}
th, td {
border-bottom: 1px solid #ddd;
border-right: 1px solid #ddd;
    padding: 5px;
    text-align: left;    
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
	margin-left:67%
}
.button:hover {
    background-color: #45a049;}


</style>
</head>
<body>
<div class="logo" style="padding-top:10px;padding-left:90px">
<img src="img/logo.png" />

</div>
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

<br>
<h1 align="center" style="color:balck">Property Details </h1><br><br>


<table bgcolor="#ffffff" align="center" style="width:50%">
  <tr>
    
    <th colspan="6" style="color:white;background-color:green">Owners Information</th>
  </tr>
   <tr>
    <td> <b>Type of Owner<b> </td>
    <td colspan="1"><b>Share (If Any)<b></td>
    <td colspan="1"><b>Name of the Owner<b></td>
    <td colspan="1"><b>CNIC of the Owner<b></td>
    <td colspan="1"><b>Address of the Owner<b></td>
    <td colspan="1"><b>Contact # of the Owner<b></td>
  </tr>   
  <tr>
    <td >{{$od->owner_type}}</td>
    <td colspan="1">{{$od->share}}</td>
    <td colspan="1">{{$od->name}}</td>
    <td colspan="1">{{$od->cnic}}</td>
    <td colspan="1">{{$od->present_add}}</td>
    <td colspan="1">{{$od->contact_no}}</td>
  </tr>
  
  </table>
  
  
  
<br>
<p align="center"><font size="3px"> <i> Please check all the attributes you want to submit for Re-Assessment and then press Submit Buttom</font><i></p>
<br>

<table bgcolor="#ffffff" align="center" style="width:50%">
  <tr>
    
    <th colspan="6" style="color:white;background-color:green">Property Information</th>
  </tr>
  <tr>
    <td colspan="3"><b>PIN: </b> {{$pd->pin}}</td>
	
    <td><b>Property Address</b></td>
    <td colspan="3">{{$pd->address}}, {{$pd->city}} </td>
	
  </tr>
</table>

<form action="/submitapp" method="post">
@csrf

<input type="hidden" value="{{$pd->address}}" name="add">
<input type="hidden" name="pin" value="{{$pd->pin}}">

<table bgcolor="#ffffff" align="center" style="width:50%">
    <tr>
    <td><b>Category Residential</b></td>
    <td> {{$pd->category_residential}}</td>
	<td><input type="checkbox" name="cr" value="true"></td>

<td><b>Total Land Area</b></td>
    <td > {{$pd->total_land_area}} Sq. Yard</td>
	<td ><input type="checkbox" name="tla" value="true"></td>
  </tr>
  <tr>
     <td colspan="1"><b>Category Commercial</b></td>
    <td colspan="1">{{$pd->category_commercial}}</td>
	<td ><input type="checkbox" name="cc" value="true"></td>

		<td colspan="1"><b>Total Covered Area</b></td>
    <td >{{$pd->total_covered_area}} Sq.ft</td>
	<td ><input type="checkbox" name="tca" value="true"></td>
  </tr>  
  <tr>
     <td colspan="1"><b>Location</b></td>
    <td colspan="1">{{$pd->location}}</td>
	<td ><input type="checkbox" name="loc" value="true"></td>

		<td colspan="1"><b>Total No of Floors</b></td>
    <td> {{$pd->total_no_of_floors}}</td>
	<td ><input type="checkbox" name="tnf" value="true"></td>
  </tr>
</table>
<br><br>
<input type="submit" class="button" value="Submit" name="verify">
</form>
<br>
<br><br>

</body>

</html>

@else
<script>window.location = "/appeal";</script>
@endif
