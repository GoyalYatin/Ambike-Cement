<html lang="en">
    <head>
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/adminzone.css" />
		<style>
			a#dealer:link,a#dealer:visited{
				color:#700ff0;
				text-decoration:none;
			}
		</style>
	</head>
	<body>
	<center>
		<div id="box">
			<?php include('include/admintop.php')?>
			<div  style="width:60%;border:1px #016dff solid;height:520px;float:left;margin-top:40px;margin-left:150px;border-radius:25px;">
				<div id="centertop" style="background-color:#016dff;color:white;font-size:20px;float:right;width:100%;margin-top:-1px;height:35px;border-radius:25px;box-shadow:0px 0px 20px black;">
				<center style="margin-top:5px;">DEALER's INQUIRY RECORDS</center>
				</div>
				<div id="overflow" style="float:left;width:100%;height:420px;overflow-y:auto; margin-top:20px;">
					<?php

						$con = mysql_connect("localhost","root","minku@20");
						if (!$con)
							{
							}

						mysql_select_db("ambike", $con);
						$i=1;
						$result = mysql_query("select * from dealer");
					?>
						<table border="2" cellpadding="3" cellspacing="0" align="center" width="200px;"style="border:2px #016dff solid;color:black;text-align:center;">
						<tr>
						<td rowspan="2"><b>Sno</b></td>
						<td rowspan="2"><b>Name</b></td>
						<td rowspan="2"><b>Firm's Name</b></td>
						<td colspan="2"><b>Area<b></td>
						<td rowspan="2"><b>Area(space)</b></td>
						<td rowspan="2"><b>Expected Investment</b></td>
						<td rowspan="2"><b>Last Experience</b></td>
						<td rowspan="2"><b>Address</b></td>
						<td rowspan="2"><b>Mobile Number</b></td>
						<td rowspan="2"><b>Contact Number</b></td>
						<td rowspan="2"><b>Email</b></td>
						</tr>
						<tr>
						<td><b>State</b></td>
						<td><b>City</b></td>
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
						  ?><td>
							<form action="inquiryrecord.php" method="post">
							<input type="submit" value="EDIT" name="edit"/>
							<input type="submit" value="DELETE" name="delete"/>
							<input type="submit" value="MAIL" name="mail"/>
							</form>
							</td>
						  <?php
							echo "</tr>";	
							$i=$i+1;
							}
							echo "</table>";
						

					?>

				</div>
				<hr/>
				<div style="float:left;width:100%;height:30px;">
				<input type="submit" value="SEARCH" name="excel"/>
				<input type="submit" value="EXPORT to EXCEL" name="excel"/>
				</div>
			</div>
			
			<?php 
			mysql_close($con);
			include('include/adminbottom.php')?>
		</div>
	<center>
	</body>
</html>