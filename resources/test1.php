<html>
<head>
</head>
<body>
<?php
							$con = mysql_connect("localhost","root","mysql");
							if (!$con)
							{
								die('Could not connect: ' . mysql_error());
							}
							mysql_select_db("ambike", $con);
					
							$state = mysql_query("select state from state");
					
?>

<table>
<form action="test1.php" method="post" name="test">

<tr><td><sup>*</sup>Name:</td><td><input type="textbox" name="name" size="24" placeholder="your name" style="border:2px solid black;"/></td>
						<td colspan="2"></td><td><sup>*</sup>Firm's Name:</td><td><input type="textbox" name="fname" size="24" placeholder="your firm's name" style="border:2px solid black;"/></td></tr>
<tr><td colspan="4"><iframe src="test.php" name="iframe_a" height="100px" width="500px" frameborder="0"></iframe></td></tr>

</form>
</table>

</body>
</html>