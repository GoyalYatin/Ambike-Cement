<div style="text-align:left; float:left; width:200px; height:300px;margin-top:90px;">
						<?php

						  if(isset($_POST['submitcontact']))
						  {
							$con = mysql_connect("localhost","root","minku@20");
							if (!$con)
							{
								die('Could not connect: ' . mysql_error());
							}
							$sno=0;
							$r;	
							$name=$_POST['name'];
							$phone=$_POST['phone'];
							$mail=$_POST['mail'];
							$query=$_POST['query'];
							mysql_select_db("ambike", $con);
							$result = mysql_query("select sno from contact");
							while($row = mysql_fetch_array($result))
							{
								$r=$row['sno'];
							}
							
							if(empty($name))
							{
								?>
								 
                     				<p style="color:red;"><u>please enter name.</u></p>
                     				<script>document.contactform.name.focus();
									document.contactform.name.value='<?php echo $name; ?>';
                            		document.contactform.phone.value='<?php echo $phone; ?>';
                                    document.contactform.mail.value='<?php echo $mail; ?>';
									document.contactform.query.value='<?php echo $query; ?>';</script>
								<?php
								  
							}
							else if(!preg_match("/^[A-Za-z ]+$/",$name))
							{
								?>
								 
                     				<p style="color:red; "><u>please enter valid name.</u></p>
									<script>document.contactform.name.focus();
									document.contactform.name.value='<?php echo $name; ?>';
									document.contactform.phone.value='<?php echo $phone; ?>';
                                    document.contactform.mail.value='<?php echo $mail; ?>';
									document.contactform.query.value='<?php echo $query; ?>';</script>
								<?php
							}
							else if(empty($phone))
							{
								?>
									<br/>
                     				<p style="color:red;"><u>please enter phone number.</u></p>
									<script>document.contactform.phone.focus();
									document.contactform.name.value='<?php echo $name; ?>';
									document.contactform.phone.value='<?php echo $phone; ?>';
                                    document.contactform.mail.value='<?php echo $mail; ?>';
									document.contactform.query.value='<?php echo $query; ?>';</script>
								<?php
							}
							else if($phone<=7000000000 || $phone>9999999999)
							{
								?>
									<br/>
                     				<p style="color:red;"><u>fill valid 10 digit phone no.</u></p>
									<script>document.contactform.phone.focus();
									document.contactform.name.value='<?php echo $name; ?>';
									document.contactform.phone.value='<?php echo $phone; ?>';
                                    document.contactform.mail.value='<?php echo $mail; ?>';
									document.contactform.query.value='<?php echo $query; ?>';</script>
								<?php
									
							}
							else if(empty($mail))
							{
								?>
									<br/><br/><br/>
                     				<p style="color:red;"><u>please enter email id.</u></p>
                     				<script>document.contactform.mail.focus();
                                    document.contactform.name.value='<?php echo $name; ?>';
									document.contactform.phone.value='<?php echo $phone; ?>';
                                    document.contactform.mail.value='<?php echo $mail; ?>';
									document.contactform.query.value='<?php echo $query; ?>';</script>
								<?php
							}
							else if(!preg_match("/^[_0-9a-zA-Z-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,3})$/",$mail))
							{
								?>
								  	<br/><br/><br/>
                     				<p style="color:red;"><u>please enter valid email id.</u></p>
                     				<script>document.contactform.mail.focus();
                                    document.contactform.name.value='<?php echo $name; ?>';
									document.contactform.phone.value='<?php echo $phone; ?>';
                                    document.contactform.mail.value='<?php echo $mail; ?>';
									document.contactform.query.value='<?php echo $query; ?>';
                                    </script>
								<?php
							}
								
								
							else if(empty($query))
							{
								?>
								  	<br/><br/><br/><br/><br/><br/>
                     				<p style="color:red;"><u>please fill the query box.</u></p>
                                    <script>document.contactform.query.focus();
                                    document.contactform.name.value='<?php echo $name; ?>';
									document.contactform.phone.value='<?php echo $phone; ?>';
                                    document.contactform.mail.value='<?php echo $mail; ?>';
									document.contactform.query.value='<?php echo $query; ?>';
                                    
                                    </script>
								<?php
							}
								 
							
									
							else 
							{
								$sno=$r+1;
								$sql="INSERT INTO contact VALUES('$sno','$name','$phone','$mail','$query')";
								?> 
								<?php 
									if (!mysql_query($sql,$con))
									{
					  
										die();
									}
								?>
								<script>window.alert('Query recieved reply will be mailed/messaged asap.')</script>
                    
					
								<?php
							}
								mysql_close($con);
							}
								?>	
</div>