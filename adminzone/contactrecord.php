<?php
include('lock.php');
?>
<html lang="en">
    <head>
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/adminzone.css" />
			<style>
			a#contact:link,a#contact:visited{
				color:#700ff0;
				text-decoration:none;
			}
		</style>
	</head>
	<body>
	<center>
	
		<div id="box">
			<?php include('include/admintop.php')?>
			<div  style="width:70%;border:1px #016dff solid;height:520px;float:left;margin-top:40px;margin-left:70px;border-radius:25px;">
				<div id="centertop" style="background-color:#016dff;color:white;font-size:20px;float:right;width:100%;margin-top:-1px;height:35px;border-radius:25px;box-shadow:0px 0px 20px black;">
				<center style="margin-top:5px;">CONTACT(Message) RECORDS</center>
				</div>
				<div id="overflow" style="float:left;width:100%;height:420px;overflow-y:auto; margin-top:20px;">
					<?php

						$con = mysql_connect("localhost","root","minku@20");
						if (!$con)
							{
							}

						mysql_select_db("ambike", $con);
						$i=1;
						$result = mysql_query("select * from contact");
					?>
						<table border="2" cellpadding="3" cellspacing="0" align="center" width="200px;"style="border:2px #016dff solid;color:black;text-align:center;">
						<tr>
						<td><b>Sno</b></td>
						<td><b>Name</b></td>
						<td><b>Phone Number</b></td>
						<td><b>Email</b></td>
						<td><b>Queries</b></td>
						
						</tr>
					<?php
						$i=1;
						while($row = mysql_fetch_array($result))
						  {
						  echo "<tr>";
						  echo "<td>" . $row['sno'] . "</td>";
						  echo "<td>" . $row['name'] . "</td>";
						  echo "<td>" . $row['phone'] . "</td>";
						  echo "<td>" . $row['mail'] . "</td>";
						  echo "<td>" . $row['query'] . "</td>";
						  
							echo "</tr>";	
							$i=$i+1;
							}
							echo "</table>";
						

					?>

				</div>
				<hr/>
				<div style="float:left;width:100%;height:30px;">
				
								<a href="excel/contactrecord.php" target="_blank" style="border-radius:10px;border:2px solid #016dff;background-color:#016dff;color:white;box-shadow:0px 0px 20px black;font-family:forte;font-size:24px;">EXPORT to EXCEL</a>
				</div>
			</div>
			
			<?php 
			mysql_close($con);
			include('include/adminbottom.php')?>
		</div>
	<center>
	</body>
</html>