<!DOCTYPE html>
<html lang="en">
    <head>
		<title>	Ambike Cement	</title>
		<link rel="icon"  type="image/ico" href="images/favicon.ico">

		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/newlayer.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/fb.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
		<style>
			a#contact:link,a#contact:visited{
				color:red;
				text-decoration:none;
			}
		</style>
	</head>
	<body>
	<center>
		<div id="container">
			<!-----------------------------------------------UPPER--------------------------------------------------->
			<?php include 'include/home.php';?>
			
		<!-----------------------------------------------LOWER--------------------------------------------------->
			<div id="lower" style="width:1360px;height:950px;background-color:white;">
				<br/>
				<br/>
				<div align="left" style="width:550px;float:left;height:400px;color:black;font-family:metal mania;font-size:16px;margin-left:100px;">
				<h3 style="color:red;font-size:22px;font-family:metal mania;"><center>ASK/SUGGEST US</center></h3>
				<center><br/><u>**All fields are mandatory**</u><br/></center>
                <br/>
                <form action="contact.php" method="post" name="contactform">
                    <table style="color:black;font-family:metal mania;">
                    <tr><td rowspan="4"><img src="images/contact/contact.jpg" width="250" height="250"/></td>
					<td>Name :</td><td><input type="textbox" name="name" size="24"  /></td></tr>
               		<tr><td>Phone Number :&nbsp;</td><td><span style="background-color:white;">+91 </span><input type="text" name="phone" size="20" ></td></tr>
                    <tr><td>Email      :</td><td><input type="text" name="mail" size="24" /></td></tr>
                    <tr><td>Queries   :</td><td><textarea cols="20" rows="6" name="query"></textarea></td></tr>
                    </table><br/>
                    <center><input type="submit" value="SUBMIT" name="submitcontact" style="font-family:metal mania;background-color:#232121;color:white;font-size:17px;cursor:pointer;"/></center><br/>
               
              	</form>
				
				</div>
				<?php include 'include/contactform.php';?>
				<!--------------------------------------contact form ends----------------------------------->
				<div align="left" style="width:350px;height:420px;float:left;font-family:georgia;color:black;font-size:14px;">
				<h3 style="color:red;font-size:22px;font-family:metal mania;margin-left:50px;">CONTACT Via</h3><br/>
                    <table style="color:black;">
					<tr><td><img src="images/contact/phone.gif" height="30px" width="30px"/></td>
					<td style="color:red;font-size:18px;font-family:metal mania;"><b><u>HELPLINE NUMBERS:</u></b></td></tr>
                    
                    <tr><td/><td>+919261672222</td></tr>
                    <tr><td/><td>+919928787487</td></tr>
                    </table><br/>
                    <table style="color:black;">
                    <tr><td><img src="images/contact/msg.gif" height="30px" width="30px"/></td>
                    <td style="color:red;font-size:18px;font-family:metal mania;"><b><u>Mail us @:</u></b></td></tr>
                    <tr><td/><td>info@ambikecement.com</td></tr>
					<tr><td/><td>billing@ambikecement.com</td></tr>
					<tr><td/><td>sales@ambikecement.com</td></tr>
					<tr><td/><td>ambikecement@ambikecement.com</td></tr>
					
                    </table>
					<table style="color:black;">
                    <tr><td><img src="images/contact/address.jpg" height="30px" width="30px"/></td>
                    <td style="color:red;font-size:18px;font-family:metal mania;"><b><u>Registered Office:</u></b></td></tr>
                    <tr><td/><td>Plot no.166-167, Bapu Nagar, </td></tr>
					<tr><td/><td>Behind Govt. Hospital,</td></tr>
					<tr><td/><td>SriGanganagar-335001</td></tr>
					<tr><td/><td>Rajasthan</td></tr>
					
                    </table>
				</div>
				<br/>
				<br/><br/>
				<div align="left" style="width:550px;float:left;height:400px;color:black;font-family:metal mania;font-size:16px;margin-left:130px;margin-top:30px;">
				
				<iframe width="500" height="400" frameborder="8" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Govt.+Hospital,+Sri+Ganganagar,+Rajasthan&amp;aq=&amp;sll=29.911942,73.877563&amp;sspn=0.090021,0.169086&amp;t=h&amp;ie=UTF8&amp;hq=Govt.+Hospital,&amp;hnear=Sri+Ganganagar,+Rajasthan&amp;ll=29.901349,73.872221&amp;spn=0.021188,0.02282&amp;output=embed"></iframe>
				</div>
				<div id="fb" align="left" style="width:450px;overflow-y:auto;margin-left:50px;float:left;height:400px;color:black;font-family:metal mania;font-size:16px;margin-left:100px;margin-top:30px;">
				<?php include 'include/fb_contact.php';?>
				</div>
			</div>
			
			<!-----------------------------------------------BOTTOM BAR--------------------------------------------------->
			<?php include 'include/bottom.php';?>
		</div>
	</center>
	</body>
</html>	
