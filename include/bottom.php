<link rel="stylesheet" type="text/css" href="css/newlayer.css" />
		
		
		
		<script type="text/javascript" src="js/adminzone.js"></script>
		<!------------------------------------bottom content------------------------------------------------->
<div id="bottom" style="width:1360px;height:30px;color:white;background-image:url('images/horizontal.jpg');background-repeat:repeat-x;background-size:100% 100%;">
				<div style="float:left;margin-top:8px;margin-left:45px;width:100px;">
				<a href="adminzone/index.php" style="font-size:13px;" id="adminzonebutton">ADMIN ZONE</a>
				</div>
				<div align="center" style="float:left;margin-top:8px;margin-left:255px;width:500px;font-size:13px;">
				Ambike Cement Pvt. Ltd. copyright 2013
				</div>
				<div slign="right" style="float:right;margin-top:8px;margin-left:15px;width:400px;font-size:13px;">
				Site Developed By: <a href="http://www.facebook.com/softechdevelopers" target="_blank">Softech Developers</a>
				</div>
			</div>
			
			
			<!-------------------Admin Login Page--------------------------------------------------------------->
			
		<div id="adminzone">
				<div style="float:left;width:100%;height:100%;font-family:metal mania">
					<center>
					<h3 style="color:red;font-size:30px;"><u>Admin Zone Login</u></h3>
						<br/>
						<br/>
						<form method="post" action="#adminzone" name="login">
						<table>
						<tr><td><input type="textbox" name="username" size="24" placeholder="User Name" style="border:2px solid black;font-family:metal mania;font-size:22px;"/></td></tr>
						<tr><td><input type="password" name="password" size="24" placeholder="Password" style="border:2px solid black;font-family:metal mania;font-size:22px;"/></td></tr>
						</table><br/>
						<center><input type="submit" value="LOGIN" name="login" style="font-family:metal mania;background-color:#232121;color:white;font-size:17px;cursor:pointer;"/>
						<input type="button" value="CANCEL" id="close_admin" style="font-family:metal mania;background-color:#232121;color:white;font-size:17px;cursor:pointer;"/></center><br/>
						</form>
					</center>
					<?php include 'include/login.php'; ?>
				</div>
				
     
		</div>