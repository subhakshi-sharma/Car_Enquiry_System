<html>
	<head>
		<title> CAR enquiry system </title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
		<style>
			<style type="text/css">	
            
            
            
            
            
            
            
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
            
            /* Set a style for all buttons */
				button 
					{
						background-color:blue;
						color: white;
						padding: 14px 20px;
						margin: 8px 0;
						border: none;
						cursor: pointer;
						width: 50%;
                        border-radius: 12px;
                        margin-left: 20px;
					}
            
            #signup 
					{
						background-color:blue;
						
						margin: 100px auto;
						padding: 40px;
						width: 70%;
						border-radius:10px;
						opacity:0.9;
						min-width: 300px;
					}
                    
            
            a:hover
            {
                color:plum;
                
            }
            
                        
            
            

            
          
                            
                            
                           
			</style>
		</style>
	</head>
	
	<body> 
	
			<div class="tfclear">
				<div  style="background-color:black;height:130px;" >			
					<img src="G:\zzzFINALPROJECTLAB\image1.png" align="left"><br/><br/>
					<div id="tfheader"><H1 style="color:white; position:absolute;margin-left:130px">CAR ENQUIRY SYSTEM</H1>
						<form id="tfnewsearch" method="get" action="http://www.google.com"style="float:right">
							<input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
						</form>
					</div>		
				</div> 
			</div>
	
		
			<div style="background-color:BLACK;height:50px;border-radius: 2px;" > <br>
				<a href="file:///G:/zzzFINALPROJECTLAB/frontpage.html" style="hfont-size:30px;color:white;text-decoration:none;font-family:georgian"><u>HOME</u></a>  
				<a href="file:///G:/zzzFINALPROJECTLAB/signup.html" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">REGISTRATION</a> 
				<a href="file:///G:/zzzFINALPROJECTLAB/LOGIN.HTML" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">LOGIN</a> 
				<a href="" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">CAR ON RENT</a> 
				<a href="file:///G:/zzzFINALPROJECTLAB/testdriveform.html" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">TEST DRIVE</a> 
				<a href="" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">BOOKING</a> 
				<a href="" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">COMPARE CAR</a> 
				<a href="file:///G:/zzzFINALPROJECTLAB/feedbackform.html" style="hfont-size:30px;color:white;text-decoration:none;margin-left:60px;font-family:georgian">FEEDBACK</a> 
				<a href="file:///G:/zzzFINALPROJECTLAB/contactuspage.html" style="hfont-size:30px;color:white;text-decoration:none;margin-left:30px;font-family:georgian">CONTACT US</a> 
            </div>
		
		
		
			<div class="slideshow-container">
				<div class="mySlides fade">
					<div class="numbertext">1 / 3
					</div>
						<img src="G:\zzzFINALPROJECTLAB\car4ss.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3
					</div>
					<img src="file:///G:/zzzFINALPROJECTLAB/car2ss.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 3
					</div>
					<img src="file:///G:/zzzFINALPROJECTLAB/car3ss.jpg" style="width:100%">
				</div>
			</div> <br>
			
			

			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>
			
			

			<script>
				var slideIndex = 0;
				showSlides();
				function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";  
				}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 5000); // Change image every 5 seconds
				}
			</script> <br><br> 
		      
			  
			  
			<div>
                <div>
				<H1>THE MOST SEARCHED CARS</H1>
			  </div>
		
			<div>
					<table cellspacing=0px>
						<h3 style="color:red">MARUTI SUZUKI</h3>
							<tr>
								<td> <img src="maruti suzuki/MARUTI wagnar r.jpg" height="200px" width="300px" style="margin-left:30px"><a href=""><BUTTON type="submit" class="signupbtn"> MARUTI WAGON R</BUTTON><br> </a></td>
								<td> <img src="maruti suzuki/MARUTI swift dzire.jpg" height="200px" width="300px" style="margin-left:50px"><a href=""><BUTTON type="submit" class="signupbtn">MARUTI SWIFT DEZIRE</BUTTON><BR> </a></td>
								<td> <img src="maruti suzuki/MARUTI vitara.png" height="200px" width="300px" style="margin-left:80px"> <a href=""><BUTTON type="submit" class="signupbtn" style="margin-left:100px;">MARUTI VITARA BREEZA</BUTTON><br></a></td>
							</tr>
					</table>
				
			</div> <br><br><br><br>
		      
			  
			                
			<div>
				
					<table  cellspacing=0px>
						<h3 style="color:red">HYUNDAI</h3>
							<tr>
								<td> <img src="hyundai/hyundai grand i10.jpg" height="200px" width="300px" style="margin-left:50px">  <a href="" > <BUTTON type="submit" class="signupbtn">HYUNDAI GRAND I10 </BUTTON><br></a></td>
								<td> <img src="hyundai/hyundai verna.png" height="200px" width="350px" style="margin-left:80px"> <a href="" ><BUTTON type="submit" class="signupbtn" style="margin-left:100px;">HYUDAI VARNA </BUTTON><br> </A></td>
								<td> <img src="hyundai/hyundai elantra.jpg" height="200px" width="300px" style="margin-left:150px"> <a href="" ><BUTTON type="submit" class="signupbtn" style="margin-left:150px;">HYUNDAI ELANTRA </BUTTON><br></a></td>
							</tr>
					</table>
				
			</div> <br><br><br><br>
		
	
		
			<div>
				
					<table  cellspacing=0px>
						<h3 style="color:red">HONDA</h3>
							<tr>
								<td><img src="honda/HONDA amaze.jpg" height="200px" width="350px" style="margin-left:20px"><a href=""><BUTTON type="submit" class="signupbtn">HONDA AMAZE  </BUTTON><br> </a></td>
								<td><img src="honda/HONDA city.jpg" height="200px" width="300px" style="margin-left:50px"><a href=""><BUTTON type="submit" class="signupbtn">HONDA CITY </BUTTON><BR> </a></td>
								<td><img src="honda/HONDA jazz.png" height="200px" width="300px" style="margin-left:80x"><a href=""><BUTTON type="submit" class="signupbtn">HONDA JAZZ </BUTTON><BR>  </a></td>
							</tr>
					</table>

			</div> <br><br><br><br>
		
		
		
			<div>
				
					<table border=0px cellspacing=0px>
						<h3 style="color:red">TOYOTA</h3>
							<tr>
								<td><img src="toyota/TOYOTA plantinum.jpg" height="200px" width="300px" style="margin-left:50px;"><a href="login.html">
                                    <BUTTON type="submit" class="signupbtn" style="margin-left:100px;">TOYOTA PLANTINUM ETIOS </BUTTON><BR>  </a></td>
								<td><img src="toyota/TOYOTA fortuner.jpg" height="200px" width="300px" style="margin-left:100px"> <a href=""><BUTTON type="submit" class="signupbtn" style="margin-left:100px;">TOYOTA FORTUNER </BUTTON><BR></a></td>
								<td><img src="toyota/TOYOTA innova.png" height="200px" width="300px" style="margin-left:120px"> <a href=""><BUTTON type="submit" class="signupbtn" style="margin-left:130px;">TOYOTA INNOVA CRYSTA </BUTTON><BR></a></td>
							</tr>
					</table>
				
			</div> <br><br><br><br>
		
		
		
		
			<div>
				
					<table cellspacing=0px>
						<h3 style="color:red">MAHINDRA</h3>
							<tr>
								<td> <img src="mahindra/MAHINDRA bolero.png" height="200px" width="300px" style="margin-left:50px"><a href=""> <BUTTON type="submit" class="signupbtn" style="margin-left:90px;">MAHINDRA BOLERO </BUTTON><BR></a></td>
								<td> <img src="mahindra/MAHINDRA verito.png" height="200px" width="300px" style="margin-left:100px"><a href=""> <BUTTON type="submit" class="signupbtn" style="margin-left:120px;">MAHINDRA VERITO </BUTTON><BR></a></td>
								<td> <img src="mahindra/MAHINDRA xylo.png" height="200px" width="300px" style="margin-left:150px"><a href=""><BUTTON type="submit" class="signupbtn" style="margin-left:130px;">MAHINDRA XYLO </BUTTON><BR> </a></td>
							</tr>
					</table>
				
			</div> <br><br><br><br>
			
		

			<div style="background-color:dimgrey">
				<a href=""> <img src="mahindra/mahindra-logo-3d.jpg" height="200px" width="263px" ></a>
				<a href=""> <img src="honda/honda_logo_3d.jpg" height="200px" width="263px" > </a>
				<a href=""> <img src="hyundai/hyundai-logo-3d.jpg" height="200px" width="263px" > </a>
				<a href=""> <img src="maruti suzuki/suzuki_logo-3d.jpg" height="200px" width="264px" > </a>
				<a href=""> <img src="toyota/toyota_logo-3d.jpg" height="200px" width="264px" > </a>
			</div> <hr>
		
		
		
			<div>
				<footer style="background-color:black;margin-top:100px;height:150px;">
					<center ><br><br><br><br><font color="white">© Copyright 2018, All Rights Reserved</font></center>
				</footer>
			</div>
		
	
	
	</body>
</html>