<?php
include('lock.php');
?>
<html lang="en">
    <head>
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/adminzone.css" />
		<style>
			a#home:link,a#home:visited{
				color:#700ff0;
				text-decoration:none;
			}
		</style>
	</head>
	<body>
	<center>
		<div id="box">
			<?php include('include/admintop.php')?>
			<div  style="width:70%;border:1px #016dff solid;height:500px;float:left;margin-top:40px;margin-left:70px;border-radius:25px;">
				<div id="centertop" style="background-color:#016dff;color:white;font-size:20px;float:right;width:100%;margin-top:-1px;height:35px;border-radius:25px;box-shadow:0px 0px 20px black;">
				<center style="margin-top:5px;">HOME</center>
				</div>
				<div id="overflow" style="float:left;width:100%;height:440px;overflow-y:auto;margin-top:20px;">
					<div style="width:300px;border:2px solid #016dff;box-shadow:0px 0px 20px black">
					<center><b style="color:#016dff;"><u>No. of Hits on Website</u></b></center><br/>
					<a href="http://xyz.freelogs.com/stats/a/ambike/" target="_top"><img border="0" alt="hit counter javascript" src="http://xyz.freelogs.com/counter/index.php?u=ambike&s=reflect" ALIGN="middle" HSPACE="4" VSPACE="2"></a><script src=http://xyz.freelogs.com/counter/script.php?u=ambike></script>
					<br><a style="font-size:12" href="http://www.freelogs.com/create.php" target="_top"><font style="font-size:12" color="#666666"></font></a>
					</div>
					<div style="width:300px;border:2px solid #016dff;margin-top:40px;box-shadow:0px 0px 20px black">
					<center><b style="color:#016dff;"><u>No. of Unique Users on Website</u></b></center><br/>
					<a href="http://xyz.freelogs.com/stats/a/ambike1/" target="_top"><img border="0" alt="myspace hit counter" src="http://xyz.freelogs.com/counter/index.php?u=ambike1&s=reflect" ALIGN="middle" HSPACE="4" VSPACE="2"></a><script src=http://xyz.freelogs.com/counter/script.php?u=ambike1></script>
					<br><a style="font-size:12" href="http://www.freelogs.com/create.php" target="_top"><font style="font-size:12" color="#666666"></font></a>
					</div>
					<div  style="margin-top:50px;">
					<a href="inquiryrecord.php" style="border-radius:10px;border:2px solid #016dff;background-color:#016dff;color:white;box-shadow:0px 0px 20px black;font-family:forte;font-size:28px;">Dealer</a>
					<a href="careerrecord.php" style="border-radius:10px;border:2px solid #016dff;background-color:#016dff;color:white;box-shadow:0px 0px 20px black;font-family:forte;font-size:28px;margin-left:10px;">Career</a>
					<a href="update.php" style="border-radius:10px;border:2px solid #016dff;background-color:#016dff;color:white;box-shadow:0px 0px 20px black;font-family:forte;font-size:28px;margin-left:10px;">Update</a>
					<a href="contactrecord.php" style="border-radius:10px;border:2px solid #016dff;background-color:#016dff;color:white;box-shadow:0px 0px 20px black;font-family:forte;font-size:28px;margin-left:10px;">Contact</a>
					<a href="updatereach.php" style="border-radius:10px;border:2px solid #016dff;background-color:#016dff;color:white;box-shadow:0px 0px 20px black;font-family:forte;font-size:28px;margin-left:10px;">Reach</a>
					<a href="logout.php" style="border-radius:10px;border:2px solid #016dff;background-color:#016dff;color:white;box-shadow:0px 0px 20px black;font-family:forte;font-size:28px;margin-left:10px;">Log Out</a>
					</div>
				</div>
			</div>
			<?php include('include/adminbottom.php')?>
		</div>
	<center>
	</body>
</html>