<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<meta http-equiv="refresh" content="">
	 <meta charset="UTF-8">
  		<meta name="Library Assistant" content="Library Management">
  		<meta name="keywords" content="library,books,shelves,university">
  		<meta name="author" content="Nabin Chand">
  		<meta name="author" content="Harshit Garg">
  		<meta name="author" content="Hinal Doshi">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	a{
  float:right;
  display: block;
  color: black;
  text-align: center;
  padding: 20px 22px;
  text-decoration: none;
  font-size: 17px;
  vertical-align: center;
  size:20px;
}
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: black;
  padding: 20px 22px;
  background-color: inherit;
  font-family: inherit; 
  display: block;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
  vertical-align: center;
  size:20px;
}
html, body {
    height: 100%;
    width: 100%;
    margin: 0;
}
.heading{
	color: 784212;
}
a:hover {
  background-color: #ddd;
  color: black;
}
.dropdown:hover .dropbtn {
  background-color: #ddd;
  color: black;
}
p{
	margin:25px 25px 25px 25px;
	font-size: 20px;
	text-align: center;
	padding-bottom: 30px;
}
a.active {
  background-color:#e6e6e6;
  
}
.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.j-forms {
	background-color:#f9fafd;
	border-radius:3px;
	box-shadow:0 2px 5px rgba(0,0,0,.6);
	box-sizing:border-box;
	color:rgba(0,0,0,.54);
	font:16px 'Open Sans',Helvetica,Arial,sans-serif;
	line-height:1;
	position:relative;
}
.j-forms .header {
	background-color:#784212;
	border-top:1px solid #7986cb;
	border-radius:3px 3px 0 0;
	box-shadow:0 6px 3px -3px rgba(63,81,181,.5);
	display:block;
	position:relative;
}
.j-forms .header  i {
	color:#fff;
	font-size:31px;
	float:left;
	padding:31px 15px 0 25px;
}
.j-forms .header p {
	color:#fff;
	margin:0;
	padding:30px 25px;
	font-size:30px;
	text-transform:uppercase;
}
.j-forms .content { padding:25px 25px 0 ; line-height:2;
 }

.j-forms .content:after {
	clear:both;
	content:".";
	display:block;
	height:0;
	visibility:hidden;
}
input {
width: 90%;
  padding: 12px 20px;
  margin: 8px 0; 
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
label {font-weight:bold;}

	</style>




</head>
<body bgcolor="784212">
	<div style="background-color:#F2F1F1; margin-left:50px;margin-right:50px; position: absolute; bottom: 0;position:relative;top:0;bottom:0;left:0;right:0; min-height: 100vh">
			<div style="margin:auto;width:90%;padding-top: 20px;">
				</br>
				<font size="20px" face="Courier New" color="784212">The Library Assistant</font>
				<!--<input type="text" placeholder="Search..">-->
				<a href="login.html" style="margin-right: -50px;"> Login </a>
				<a href="register.html"> Register </a>
				<a href="contact.html"> Contact </a>
				<!--<div class="dropdown" style="float: right;"> 
					<button class="dropbtn">Categories &nbsp
						<i class="fa fa-caret-down" style="font-size:15px "></i>
					</button>
					<div class="dropdown-content">
						<a href="comb.html">Computers</a>
						<a href="relb.html">Religion</a>
						<a href="matb.html">Mathematics</a>
						<a href="scib.html">Science</a>
						<a href="arcb.html">Architecture</a>
						<a href="culb.html">Culture</a>
						<a href="engb.html">Engineering</a>
						<a href="">All Categories</a>
					</div> 
				</div>-->
				<!--<a href=""> Gallery </a>-->
				<a href="main page.html" class="active"> Home </a> 
			</div>
				<!--<a href="addbook.php"> Add Book </a>-->
				<!--<a href=""> Gallery </a>-->
			</br>
			<div>
		
		<div style="margin:0 auto; outline:none; padding:40px 15px; max-width:640px;">
			<form action="forgot1.php" method="post" class="j-forms" novalidate>
				<div class="header">
					<p>Search ID</p>
				</div>
				<div class="content">
	                    <label>Email ID*</label>			
						<input type="text"  name="email" >
						&nbsp;<i class="fa fa-user" required="required"></i>	

			</div>
			

			<div style="background-color:#e8eaf6; border-top:1px solid #784212; padding:10px 25px;"><center>
				<button type="submit" style="border:none; border-radius:3px; color:#fff; background:#784212; font:16px 'Open Sans',Helvetica,Arial,sans-serif; height:48px; margin:10px 0 10px 20px; outline:none; padding:0 25px;">Submit</button></center>
			</div>
			

		</form>
	</div>
		
		
		<div style="background-color:#1a1a1a; height:15em">
			<div style="color: white;padding:30px 30px 30px 30px;width:100%;height:100%">
				<div style="float: left;width:40%;">
					<font color="#59abe3"> Mission</font>
					<hr>
					The Library is committed to realizing the mission of the University to enhance the quality of learning and research through continuous updates of resources and services.
					<hr>
					<font color="#59abe3">Library Timings</font>
					<hr width="18%" align="left">
					<font color="#59abe3"> Working Days</font> : Monday – Saturday 8.00 am – 9.00 pm</br>
					<font color="#59abe3"> Vacation  </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Monday – Saturday 8.00 am – 5.00 pm</br>
					<font color="#59abe3">Closed </font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Sundays and Public Holidays
				</div>
				<div style="float:right;width:40%;">
					<font color="#59abe3"> Contact Us</font>
					<hr width="450px" align="left">
          			<font color="#59abe3"> Knowledge Centre</font></br>080 4012 -9660 / 9661 / 9662 / 9663 / 9445</br>
					<font color="#59abe3"> UG Library</font></br>080 4012 - 9114</br>
					<font color="#59abe3"> Kengeri Campus </font></br> 080 4012 - 9882 / 9840</br>
					<font color="#59abe3"> Email&nbsp;</font>: library@university.in
				</div>
			</div>
		</div>
	</div>
</body>
</html>
