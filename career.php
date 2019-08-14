<!DOCTYPE html>
<html lang="en">
    <head>
		<title>	Ambike Cement	</title>
		<link rel="icon"  type="image/ico" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/newlayer.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
		<style>
			a#career:link,a#career:visited{
				color:red;
				text-decoration:none;
			}
		</style>
		<script>
			function showCustomer(str)
			{
			var xmlhttp;    
			if (str=="")
			  {
			  document.getElementById("txtHint").innerHTML="";
			  return;
			  }
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","include/dealerform1.php?q="+str,true);
			xmlhttp.send();
			}
		</script>
	</head>
	<body>
	<center>
		<div id="container">
			<!-----------------------------------------------UPPER--------------------------------------------------->
			<?php include 'include/home.php';?>
			
		<!-----------------------------------------------LOWER--------------------------------------------------->
			<div id="lower" style="width:1360px;height:500px;background-image:url('images/lower_bg1.jpg');background-size:300px 500px;background-repeat:repeat-x;">
				<br/>
				<br/>
				<center><h3 style="color:red;font-size:33px;font-family:metal mania;"><u>CAREER AT AMBIKE</u></h3></center>
				<br/>
			<!-----------------------------------------------FORM--------------------------------------------------->	
				<div style="width:1000px;font-family:metal mania;">
				<p style="font-family:Times new roman;font-size:15px;color:white;">Marked( <sup>*</sup> ) fields are mandatory</p>
				<form action="career.php" method="post" name="careerform" enctype="multipart/form-data">
					<div style="float:left;width:450px;">
					<h3 style="color:red;font-size:22px;font-family:metal mania;margin-left:10px;">Personal Information</h3>
                    <table style="color:white;font-size:16px;">
                    <tr><td><sup>*</sup>Name:</td><td><input type="textbox" name="name" size="24" placeholder="your name" style="border:2px solid black;"/></td></tr>
					<tr><td><sup>*</sup>Father's Name:</td><td><input type="textbox" name="fname" size="24" placeholder="your father's name" style="border:2px solid black;"/></td></tr>
               		<tr><td><sup>*</sup>Mobile Number:</td><td><span style="background-color:;">+91 </span><input type="text" name="mobile" size="20" placeholder="your mobile number" style="border:2px solid black;"/></td></tr>
					<tr><td>&nbsp;Phone Number:</td><td><input type="text" name="phone1" size="5" style="border:2px solid black;" placeholder="STD code"/> <input type="text" name="phone2" size="13" style="border:2px solid black;" placeholder="landline number"/></td></tr>
                    <tr><td>&nbsp;Email:</td><td><input type="text" name="mail" size="24" style="border:2px solid black;" placeholder="abc@mailprovider.com/.co.in"/></td></tr>
                    <tr><td>&nbsp;Address:</td><td><textarea cols="20" rows="4" name="addr" style="border:2px solid black;"></textarea></td></tr>
					
                    </table><br/>
					</div>
					<div style="float:right;width:550px;">
					<h3 style="color:red;font-size:22px;font-family:metal mania;margin-left:-100px;">Specific Information</h3>
					<table style="color:white;font-size:16px;">
					<tr><td><sup>*</sup>Apply for(Post):</td><td><select name="post" style="border:2px solid black;">
					<option>---select---</option><option value="SR Manager">Sr. Manager</option><option>Manager</option>
					<option>Clerk</option><option>other</option></select></td></tr>
					<!------------------------------------apply for area--------------------------------------->
					<?php
					$con = mysql_connect('localhost', 'root', 'minku@20');
						if (!$con)
						  {
						  die('Could not connect: ' . mysql_error());
						  }

						mysql_select_db("ambike", $con);

						$sq="SELECT distinct state FROM area";
					
						$res = mysql_query($sq);
						if (!mysql_query($sq,$con))
						{
							die();
						}
						?>
					<tr><td><sup>*</sup>Apply For(Area)</td><td>
						<select name="state" onchange="showCustomer(this.value)" style="border:2px solid black;" >
							<option>----select----</option>
							<?php while($ro = mysql_fetch_array($res))
							echo '<option value="'.$ro['state'].'">'.$ro['state'].'</option>';?>
							</select>
						</select>
						<select name="city" id="txtHint" style="border:2px solid black;" >
							<option>----select----</option>
						</select> </td>
					</tr>
					
					
					<tr><td><sup>*</sup>Expected Salary:</td>
					<td><input type="textbox" name="salary" size="24" placeholder="salary you expect from us" style="border:2px solid black;"/></td></tr>
					<!------------------------------------last job profile--------------------------------------->
					<tr><td><sup>*</sup>Last Job Profile:</td><td><select name="job" style="border:2px solid black;">
					<option>---select---</option><option>less than 1 lakh</option><option>1 lakh - 2 lakh</option><option>2 lakh - 3 lakh</option>
					<option>3 lakh - 5 lakh</option><option>more than 5 lakh</option></select></td></tr>
					<tr><td colspan="2" style="font-family:times;">FILE THAT YOU UPLOAD MUST BE LESS THAN 5MB</td></tr>
					<tr><td>&nbsp;Upload Your Photo:</td><td><span style="font-family:times;">(optional)<input title="max size is 7mb" type="file" name="file" id="file"></td></tr>
					<tr><td/><td style="font-family:times;">(Format supported:jpeg,png,gif)</td><tr>
					<tr><td>&nbsp;Upload Resume:</td><td><span style="font-family:times;">(optional)<input title="max size is 7mb" type="file" name="file1" id="file1"></td></tr>
                    <tr><td/><td style="font-family:times;">(Format supported:txt,doc,docx,pdf)</td><tr>
					</table><br/>
					</div>
					
					<div style="float:left;margin-left:400px;">
					<br/><br/>
                    <center><input type="submit" value="SUBMIT" name="submit" style="font-family:metal mania;background-color:#232121;color:white;font-size:17px;cursor:pointer;"/></center><br/>
					
					</div>
															
				</form>
				
				</div>
				<?php  include "include/upload_file.php"; ?>
				<?php  include "include/careerform.php"; ?>				
			<!----------------------------------------------FORM END--------------------------------------------------->
			</div>
				<!-----------------------------------------------BOTTOM BAR--------------------------------------------------->
			<?php include 'include/bottom.php';?>
		</div>
	</center>	
	</body>
</html>	
