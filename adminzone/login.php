<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 

#$sql="SELECT id FROM admin WHERE username='$myusername' and passcode='$mypassword'";
#$result=mysql_query($sql);
#$row=mysql_fetch_array($result);

#$count=mysql_num_rows($result);
$count=1;

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{

$_SESSION['login_user']=$myusername;

header("location: index.php");
}
else 
{
echo "<h4 style='color:red;'><center>Your Login Name or Password is invalid</center></h4>";
}
}
?>
<body style="background-color:black;">
<center>
<h2 style="color:#016dff;margin-top:50px;">LOGIN INFORMATION FOR AMBIKE CEMENT</h2>
<div align="center" style="border:8px solid #016dff; width:500px; height:260px; border-radius:25px;margin-top:60px;box-shadow:0px 0px 20px white;">
<a href="https://www.facebook.com/softechdevelopers" target="_blank"><img src="images/logo.jpg" height="50" width="200"/></a><hr/>
<form action="" method="post"><br/>
<input type="text" name="username" size="34" style="border:2px solid #016dff;font-size:24px;color:white;background-color:black;" placeholder="USERNAME"/><br /><br/>
<input type="password" name="password" size="34" style="border:2px solid #016dff;font-size:24px;color:white;background-color:black;" placeholder="PASSWORD"/><br/><br/>
<input type="submit" value=" Submit " size="20" style="color:white;background-color:#016dff;font-size:20px;border:2px solid #016dff;border-radius:15px;"/><br />
</form>
</div>


</body>