<html>
<head>
</head>
<body>
<?php
							$con = mysql_connect("localhost","root","minku@20");
							if (!$con)
							{
								die('Could not connect: ' . mysql_error());
							}
							mysql_select_db("ambike", $con);
					
							$state = mysql_query("select state from state");
					
?>

<table>
<tr><form action="" method="post" name="dynamic">

<td>
						<select onchange="this.form.submit();" name="state" style="border:2px solid black;">
							
							<?php while($row = mysql_fetch_array($state))
							echo '<option>'.$row['state'].'</option>'; ?>
						</select></td>
						
</form>

<form action="" method="post" name="test1">
					
					<?php 
						$result = mysql_query("select city from city1 where city='------select------';");
						 if(isset($_POST['state']))
						{
						$s=$_POST['state'];
						
						
						if($s=="Rajasthan")
						{
						$result = mysql_query("select city from city1");
						?><script>document.test.state.value='<?php echo $s; ?>';</script><?php
						}
						elseif($s=="Punjab")
						$result = mysql_query("select city from city2");
						?><script>document.test.state.value='<?php echo $s; ?>';</script><?php
						}
						
					?>
					<td><select name="city" style="border:2px solid black;">
							
							<?php while($row = mysql_fetch_array($result))
							echo '<option>'.$row['city'].'</option>';?>
						</select>
						</td>
</form></tr>
</table>

</body>
</html>