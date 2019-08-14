<html lang="en">
    <head>
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/adminzone.css" />
		<style>
			a#resume:link,a#resume:visited{
				color:#700ff0;
				text-decoration:none;
			}
		</style>
	</head>
	<body>
	<center>
		<div id="box">
			<?php include('include/admintop.php')?>
			<div  style="width:60%;border:1px #016dff solid;height:500px;float:left;margin-top:40px;margin-left:150px;border-radius:25px;">
				<div id="centertop" style="background-color:#016dff;color:white;font-size:20px;float:right;width:100%;margin-top:-1px;height:35px;border-radius:25px;box-shadow:0px 0px 20px black;">
				<center style="margin-top:5px;">ALL RESUMES</center>
				</div>
				<div id="overflow" style="float:left;width:100%;height:440px;overflow-y:auto;">
				<br/><br/>no of hits
				<br/><br/>current users
				<br/><br/>unique visitors
				
				</div>
			</div>
			<?php include('include/adminbottom.php')?>
		</div>
	<center>
	</body>
</html>