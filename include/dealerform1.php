<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'minku@20');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ambike", $con);

$sql="SELECT * FROM area where state = '".$q."'";

$result = mysql_query($sql);


  ?>
<select name="city" style="border:2px solid black;">
							
							<?php while($row = mysql_fetch_array($result))
							echo '<option>'.$row['city'].'</option>';?>
						</select> <?php
  


mysql_close($con);
?>