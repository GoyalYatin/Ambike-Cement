<html>
<body>
<?php

						  if(isset($_POST['login']))
						  {
							$con = mysql_connect("localhost","root","minku@20");
							if (!$con)
							{
								die('Could not connect: ' . mysql_error());
							}
							$sno=0;
							$user;
							$pass;
							$username=$_POST['username'];
							$password=$_POST['password'];
							mysql_select_db("ambike", $con);
							$result = mysql_query("select username from login;");
							while($row = mysql_fetch_array($result))
							{
								$user=$row['username'];
							}
							$result = mysql_query("select password from login;");
							while($row = mysql_fetch_array($result))
							{
								$pass=$row['password'];
							}
							if($user!=$username && $pass!=$password)
							{
							?>
								<script>window.alert('!!!Incorrect username/password!!!')</script>
							<?php
							}
							else
							{
							?>
								<script>window.alert('!!!Logged In!!!')</script>
							<?php
							}

							mysql_close($con);
						}
?>
</body>
</html>