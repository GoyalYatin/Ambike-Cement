<?php
include('lock.php');
?>
<html lang="en">
    <head>
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/adminzone.css" />
			<style>
			a#update:link,a#update:visited{
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
				<center style="margin-top:5px;">ALL UPDATEs RECORD</center>
				</div>
				<div id="overflow" style="float:left;width:50%;height:440px;overflow-y:auto; margin-top:20px;">
					<?php

						$con = mysql_connect("localhost","root","minku@20");
						if (!$con)
							{
							}

						mysql_select_db("ambike", $con);
						$i=1;
						$result = mysql_query("select * from updates order by sno");
					?>
						<table border="2" cellpadding="3" cellspacing="0" align="center" width="200px;"style="border:2px #016dff solid;color:black;text-align:center;">
						<tr>
						<td><b>Sno</b></td>
						<td><b>Updates</b></td>
						
						</tr>
					<?php
						
						while($row = mysql_fetch_array($result))
						  {
							$i=$row['sno'];
						  echo "<tr>";
						  echo "<td>" . $row['sno'] . "</td>";
						  echo "<td>" . $row['updates'] . "</td>";
						  
							echo "</tr>";	
							
							}
							
							echo "</table>";
						

					?>

				</div>
				
				<div style="float:left;width:50%;height:480px;">
				<br/><br/>
				<center><b>ADD NEW UPDATE</b></center>
				<form method="POST" action="update.php" name="updateform">
				<table>
				<tr><td>UPDATE:</td><td><textarea cols="20" rows="4" name="add" style="border:2px solid #016dff; " title="UPDATES" required ></textarea></td></tr>
				<tr><td></td><td><input type="submit" value="ADD NEW" name="addnew" style="background-color:#016dff;color:white;"/></td></tr>
				
				</form>
				<form method="POST" action="update.php" name="updatedelform">
				<tr><td><br/></td></tr>
				
				<tr><td>DELETE <br/>UPDATE SNO:</td><td><input type="text" name="del" pattern="[0-9]{0,3}" title="Sno from list on left" required  style="border:2px solid #016dff;"/></td></tr>
				<tr><td></td><td><input type="submit" value="DELETE OLD" name="delete" style="background-color:#016dff;color:white;" /></td></tr>
				</table>
				</form>
				</div>
				<?php
				if(isset($_POST['addnew']))
				{
				$upd=$_POST['add'];
				$i=$i+1;
				$que="insert into updates values($i,'$upd')";
				if (!mysql_query($que,$con))
				{
					die();
				}
								
				
				
				?><script>window.alert('NEW RECORD ADDED')</script><?php
				}
				if(isset($_POST['delete']))
				{
				$del=$_POST['del'];
				$que="delete from updates where sno=$del";
				if (!mysql_query($que,$con))
				{
					die();
				}
						?>		<script>window.alert('RECORD DELETED')</script>
				<?php }		
				
				?>
				
			</div>
			
			<?php
	
			mysql_close($con);
			include('include/adminbottom.php')?>
		</div>
	<center>
	</body>
</html>