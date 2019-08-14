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
			a#dealer:link,a#dealer:visited{
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
			<div id="lower" style="width:1360px;height:600px;background-image:url('images/lower_bg1.jpg');background-size:300px 600px;background-repeat:repeat-x repeat-y;">
				<br/>
				<br/>
				<br/>
				<center><h3 style="color:red;font-size:33px;font-family:metal mania;"><u>DEALER's INQUIRY FORM</u></h3></center>
				<br/>
			
		<!-----------------------------------------------FORM--------------------------------------------------->	
				<div style="width:1000px;font-family:metal mania;color:white;font-size:16px;">
				
				<form action="dealer.php" method="POST" name="dealerform">
					
                    <table style="color:white;font-size:16px;margin-left:50px;">
					<span style="font-family:Times new roman;font-size:15px;color:white;">Marked( <sup>*</sup> ) fields are mandatory</span>
					<tr><td><br/></td></tr>
					<tr><td>Select the category</td><td><input type="radio" name="radio" id="Sub Dealer" value="Sub Dealer" checked  >Sub Dealer</td><td><input type="radio" name="radio" id="Distributer" value='Distributer'  >Distributer</td><td></td><td></td>
					<tr><td><br/></td></tr>
					
                    <tr><td><sup>*</sup>Name:</td><td colspan="2"><input type="textbox" name="name" size="24" placeholder="your name" style="border:2px solid black;"/></td>
						<td colspan="2"><span style="margin-left:150px;"/></td><td><sup>*</sup>Firm's Name:</td><td colspan="2"><input type="textbox" name="fname" size="24" placeholder="your firm's name" style="border:2px solid black;"/></td></tr>
					
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
						</select></td><td>
						<select name="city" id="txtHint" style="border:2px solid black;" >
							<option>----select----</option>
						</select> </td>
					</tr>
					
					<!----------------------------------------end of aaply for area---------------------------------------------->
					<tr><td><sup>*</sup>Available Area(space):</td><td colspan="2"><input type="textbox" name="space" size="24" style="border:2px solid black;" placeholder="last pass qualification"/></td>
						<td colspan="2"></td><td><sup>*</sup>Expected Investment(min):</td><td colspan="2"><input type="textbox" name="invest" size="24" placeholder="min expected investment" style="border:2px solid black;"/></td></tr>
						
					<tr><td>Last Experience:</td><td colspan="2"><textarea cols="20" rows="4" name="exp" style="border:2px solid black;" placeholder="brief working experience"></textarea></td>
						<td colspan="2"></td><td><sup>*</sup>Address:</td><td colspan="2"><textarea cols="20" rows="4" name="addr" style="border:2px solid black;"></textarea></td></tr>						
               		<tr><td><sup>*</sup>Mobile Number:</td><td colspan="2"><span style="background-color:;">+91 </span><input type="text" name="mobile" size="20" placeholder="your mobile number" style="border:2px solid black;"/></td>
						<td colspan="2"></td><td>Contact Number:</td><td colspan="2"><input type="text" name="phone1" size="5" style="border:2px solid black;" placeholder="STD code"/> <input type="text" name="phone2" size="13" style="border:2px solid black;" placeholder="landline number"/></td></tr>
                    <tr><td>&nbsp;Email:</td><td colspan="2"><input type="text" name="mail" size="24" style="border:2px solid black;" placeholder="abc@mailprovider.com/.co.in"/></td></tr>
                    
                    </table><br/>
					</div>
					<div style="float:left;width:1000px; text-align:center;margin-left:150px;">
					<br/><br/>
                    <input type="submit" value="SUBMIT" name="dealersubmit" style="font-family:metal mania;background-color:#232121;color:white;font-size:17px;cursor:pointer;"/><br/>
					</div>
              	</form>
				<?php include 'include/dealerform.php' ; ?>
				</div>
				
			<!----------------------------------------------FORM END--------------------------------------------------->	
			
			<!-----------------------------------------------BOTTOM BAR--------------------------------------------------->
			<?php include 'include/bottom.php';?>
		</div>
	</center>	
	</body>
</html>	
