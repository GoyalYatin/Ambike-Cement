<!DOCTYPE html>
<html lang="en">
    <head>
		<title>	Ambike Cement	</title>
		<link rel="icon"  type="image/ico" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="css/newlayer.css" />
		<link rel="stylesheet" type="text/css" href="css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="css/fb.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
		<script type="text/javascript" src="js/newlayerscript.js"></script>
		<style>
			a#home:link,a#home:visited{
				color:red;
				text-decoration:none;
			}
		</style>
			
	</head>
	<body>
	<center>
		<div id="container">
			
		<!-----------------------------------------------UPPER--------------------------------------------------->
			<?php include 'include/home.php';?>
			
		<!-----------------------------------------------LOWER--------------------------------------------------->
			<div id="lower" style="width:1360px;height:400px;background-color:white;font-size:15px;">
			<br/>
			<br/>
		<!-----------------------------------------------LOGO--------------------------------------------------->	
				<div style="width:250px;height:250px;margin-left:100px;float:left;margin-top:30px;box-shadow:0px 0px 20px black;">
					<img src="images/logo.jpg" width="250px" height="250"/>
				</div>
				<div align="justify" style="width:730px;height:300px;float:left;margin-left:50px;color:black;">
					
						<center><h3 style="color:red;font-size:33px;font-family:metal mania;"><u>Company Profile</u></h3></center>
						
						Ambike Cement is the new brand which has been launched specially for the Indian market. Ambike Cement is the amalgamation of many professional bodies having a total experience of more than 20 years in manufacturing cement. Ambike Cement has been primarily involved in exporting cement to Gulf countries and due to the slowdown in Gulf economies the Directors of Ambike Cement decided to launch Ambike in India.<br/><br/>

						At Ambike Cement, we believe in quality and customer satisfaction which is indeed Ambike for us. We are committed to provide excellent customer satisfaction which includes on time delivery, feed back from clients, follow up their orders.Our main goal is to maintain satisfaction with the highest quality products at the most competitive prices.<br/><br/> Over the years, the export activities of our company have extended significantly to the point and numerous products such as Clinker, Gypsum, Fly Ash & Silica.

						Ambike also maintains all necessary periodic checks and highest quality standards with regards to requirements of different parameters for different products & grades by different international inspection agencies like its, SGS, BVQI.

						With a dedicated and efficient staff, Ambike has the ability to keep the stored materials in the optimum conditions and fill orders on short notice as the company has its own ware houses at different locations across India.<br/>
						Ambike Cement has got manufacturing facilities in Rajasthan, Gujarat, Madhya Pradesh,
						Haryana and Punjab and having future plans to start operations in the state of Maharashtra and Bihar in Year 2014.
					
				</div>
		<!-----------------------------------------------UPDATES TICKER--------------------------------------------------->		
				<div style="width:150px;height:245px;color:black;border:1px solid #232121;float:right;margin-right:40px;margin-top:30px;box-shadow:0px 0px 20px black;">
					<center>
					<?php
					$con = mysql_connect("localhost","root","minku@20");
							if (!$con)
							{
								die('Could not connect: ' . mysql_error());
							}
							mysql_select_db("ambike", $con);
							$update = mysql_query("select updates from updates order by sno");
							
					?>
					<h3 style="color:red;">LATEST UPDATES</h3><hr/>
					<marquee behavior="scroll" scrolldelay="0" direction="up" height="200px" scrollamount="4" onMouseOver="this.setAttribute('scrollamount', 0, 0);" onMouseOut="this.setAttribute('scrollamount', 3, 0);">
					<?php
					while($row = mysql_fetch_array($update))
					{
						echo $row['updates']."<br/><hr/><br/>" ;
					}
					?>
					</marquee><hr/>
					<div id="allupdatesbutton"><h4>SEE ALL UPDATES</h4></div>
					</center>
					
				</div>
		<!-----------------------------------------------UPDATES TICKER ENDS--------------------------------------------------->			
				<!-- <div id="fb" align="left" style="width:300px;margin-left:100px;float:left;height:400px;color:black;font-family:metal mania;font-size:16px;margin-top:20px;overflow-y:auto;">
				<?php //include 'include/fb.php';?>
				</div> -->
			</div>
		<!-----------------------------------------------BOTTOM BAR--------------------------------------------------->
			<?php include 'include/bottom.php';?>
		<!-----------------------------------------------ALL UPDATES LAYER--------------------------------------------------->					
			<div id="allupdates">
				<div style="float:right;width:30px;margin-top:2px;cursor:pointer;">
					<img id="close_update" src="images/close.png" width="20" height="20" />
				</div>
				<div id="overflow" style="float:left;width:475px;overflow-y:scroll;height:160px;">
					<center>
					<?php
					$con = mysql_connect("localhost","root","minku@20");
							if (!$con)
							{
								die('Could not connect: ' . mysql_error());
							}
							mysql_select_db("ambike", $con);
							$update = mysql_query("select updates from updates order by sno");
							
					?>
					<h3 style="color:red;font-size:30px;"><u>All Updates</u></h3><br/>
						<p style="text-align:left;"><?php
						$a=1;
					while($row = mysql_fetch_array($update))
					{
						
						echo "$a.".$row['updates']."<br/><br/>" ;
						$a++;
					}
					?>
					</p>
					</center>
				</div>
     
			</div>
		<!-----------------------------------------------ALL UPDATES LAYER ENDS--------------------------------------------------->					
		</div>
	</center>	
	</body>
</html>	
