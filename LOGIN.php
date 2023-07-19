<?php
dbconnect=mysql_connect($host,$user,$password,$car_enquiry);
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
		<style>
		<style type="text/css">
				
			/* Full-width input fields */
				input[type=text], input[type=password]
					{
						width: 100%;
						padding: 12px 20px;
						margin: 8px 0;
						display: inline-block;
						border: 1px solid #ccc;
						box-sizing: border-box;
					}

			/* Set a style for all buttons */
				button
					{
						background-color: #4CAF50;
						color: white;
						padding: 14px 20px;
						margin: 8px 0;
						border: none;
						cursor: pointer;
						width: 100%;
					}

			/* Extra styles for the cancel button */
				.cancelbtn 
					{
						padding: 14px 20px;
						background-color: #f44336;
					}	
	
			/* Float cancel and signup buttons and add an equal width */
				.cancelbtn,.signupbtn 	
					{
						float: left;
						width: 50%;
					}

			/* Add padding to container elements */
				.container
					{
						padding: 16px;
					}

			/* Clear floats */
				.clearfix::after 
					{
						content: "";
						clear: both;
						display: table;
					}

			/* Change styles for cancel button and signup button on extra small screens */
				@media screen and (max-width: 300px)
					{
						.cancelbtn, .signupbtn
							{
								width: 100%;
							}
					}
			
				div
					{	
						background-color:slateblue;
						border-radius:4px;
					} 
			
				#login 
					{
						background-color: blue;
						margin: 100px auto;
						padding: 40px;
						width: 70%;
						border-radius:10px;
						opacity: 0.9;
						min-width: 300px;
					}
       
				button
					{
						border-radius:12px;
					}
			
				.facebook 
					{
						background-color: #0079ce;
						border: none;
						border-radius: 0px 3px 3px 0px;
						-moz-border-radius: 0px 3px 3px 0px;
						-webkit-border-radius: 0px 3px 3px 0px;
						color: #f4f4f4;
						cursor: pointer;
						height: 50px;
						text-transform: uppercase;
						width: 250px;
						border-radius:12px;
					}
			
				.email
					{
						background-color: red;
						border: none;
						border-radius: 0px 3px 3px 0px;
						-moz-border-radius: 0px 3px 3px 0px;
						-webkit-border-radius: 0px 3px 3px 0px;
						color: #f4f4f4;
						cursor: pointer;
						height: 50px;
						text-transform: uppercase;
						width: 250px;
						border-radius:12px;
					}
			
				head
					{
						font-family:'georgia';
					}
           
				body
					{ 
						background: url('file:///C:/Users/Subhakshi%20Sharma/Desktop/Lamborghini-Water-Car-HD-Wallpapers.jpg') no-repeat center center fixed; 
						-webkit-background-size: cover;
						-moz-background-size: cover;
						-o-background-size: cover;
						background-size: cover;
					}
					
					
					
					
					
					<!-- css fo white box-->
				#tfnewsearch
					{
						float:right;
						padding:20px;
					}
				.tftextinput
					{
						margin: 0;
						padding: 5px 15px;
						font-family: Arial, Helvetica, sans-serif;
						font-size:14px;
						border:1px solid #0076a3; border-right:0px;
						border-top-left-radius: 5px 5px;
						border-bottom-left-radius: 5px 5px;
					}
				.tfbutton 
					{
						margin: 0;
						padding: 5px 15px;
						font-family: Arial, Helvetica, sans-serif;
						font-size:14px;
						outline: none;
						cursor: pointer;
						text-align: center;
						text-decoration: none;
						color: #ffffff;
						border: solid 1px #0076a3; border-right:0px;
						background: #0095cd;
						background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
						background: -moz-linear-gradient(top,  #00adee,  #0078a5);
						border-top-right-radius: 5px 5px;
						border-bottom-right-radius: 5px 5px;
						}
					.tfbutton:hover 
						{
							text-decoration: none;
							background: #007ead;
							background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
							background: -moz-linear-gradient(top,  #0095cc,  #00678e);
						}
					/* Fixes submit button height problem in Firefox */
					.tfbutton::-moz-focus-inner
						{
						  border: 0;
						}
					.tfclear
						{
							clear:both;
						}


					
			</style>
		</style>
		
				<script type="text/javascript">
				
				function validate()
				{
				if(document.myform.psw.value="")
				{
					alert("enter your name!!");
					return false;
					}
					return true;
				}
					</script>
		
		
		
	</head>
	
	<body>

		<div class="tfclear">
			<div  style="background-color:black;height:130px;" >			
				<img src="G:\zzzFINALPROJECTLAB\image1.png" align="left"><br/><br/>
					<div id="tfheader"><H1 style="color:white; position:absolute;;margin-left:130px">CAR ENQUIRY SYSTEM</H1>
						<form id="tfnewsearch" method="get" action="http://www.google.com"style="float:right">
							<input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
						</form>
					</div>		
			</div> 		
		</div>
			
		
		
		
		<div style="background-color:BLACK; height:50px;width:"> <br>
			<a href="file:///G:/zzzFINALPROJECTLAB/frontpage.html" style="hfont-size:30px;color:white;text-decoration:none;font-family:georgian">HOME</a>  
			<a href="file:///G:/zzzFINALPROJECTLAB/signup.html" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">REGISTRATION</a> 
			<a href="file:///G:/zzzFINALPROJECTLAB/LOGIN.HTML" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian"><u>LOGIN</u></a> 
		    <a href="" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">CAR ON RENT</a> 
			<a href="file:///G:/zzzFINALPROJECTLAB/testdriveform.html" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">TEST DRIVE</a> 
			<a href="" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">BOOKING</a> 
			<a href="" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">COMPARE CAR</a> 
			<a href="file:///G:/zzzFINALPROJECTLAB/feedbackform.html" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">FEEDBACK</a> 
			<a href="file:///G:/zzzFINALPROJECTLAB/contactuspage.html" style="hfont-size:30px;color:white;text-decoration:none;margin-left:30px;font-family:georgian">CONTACT US</a> 
            			
		</div>
		
		
		
     	 
   
					<form action="" style="border:1px solid #ccc" id="login" name="myform" onsubmit="validate();">
			<div class="container">
				<h1 style="text-align:center;"><font size="38PX">LOGIN</font></h1>
  
				<label><b>Name</b></label><br><br>
				<input type="text" placeholder="Enter Name" name="psw" required="" style="width:100%;height:50px;"><br> <br>

				<label><b>Email</b></label><br><br>
				<input type="text" placeholder="Enter Email" name="email" required="" style="width:100%;height:50px;"><br><br>

				<label><b>Password</b></label><br><br>
				<input type="password" placeholder="Enter Password" name="psw" required="" style="width:100%;height:50px;"><br><br>

				<input type="checkbox" checked="checked"> Remember me
    
					<div class="clearfix">
						<button type="reset" class="cancelbtn"> Forgot Password</button>
						<button type="submit" class="signupbtn"> Login</button>
	  
							<p>
								<a class="facebook-before"></a>
								<button class="facebook">Login Using Facbook</button>
							</p>
		
							<p>
								<a class="twitter-before"></a>
								<button class="email">Login Using EMAIL</button>
							</p>
   
					</div>
				</div>
			</form>
		</div>
		
				<div>
					<footer style="background-color:black;margin-top:100px;height:150px;">
						<center ><br><br><br><br><font color="white">© Copyright 2018, All Rights Reserved</font></center>
					</footer>
				</div>
		
				


	</body>
</html>