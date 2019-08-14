<div style="width:150px; height:400px;margin-top:-220px;margin-left:00px;color:red;">
						<?php

						  if(isset($_POST['dealersubmit']))
						  {
							
							$con = mysql_connect("localhost","root","minku@20");
							if (!$con)
							{
								die('Could not connect: ' . mysql_error());
							}
							$sno=0;
							$r;	
							
							$radio=$_POST['radio'];
							$name=$_POST['name'];
							$fname=$_POST['fname'];
							$state=$_POST['state'];
							$city=$_POST['city'];
							$space=$_POST['space'];
							$invest=$_POST['invest'];
							$exp=$_POST['exp'];
							$addr=$_POST['addr'];
							$mobile=$_POST['mobile'];
							$phone1=$_POST['phone1'];
							$phone2=$_POST['phone2'];
							$mail=$_POST['mail'];
							
							mysql_select_db("ambike", $con);
							$result = mysql_query("select sno from dealer");
							while($row = mysql_fetch_array($result))
							{
								$r=$row['sno'];
							}
							if(empty($name))
							{
								?>
								 
                     				<p style="color:red;"><u>please enter name.</u></p>
                     				<script>document.dealerform.name.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
								  
							}
							else if(!preg_match("/^[A-Za-z ]+$/",$name))
							{
								?>
								 
                     				<p style="color:red;"><u>please enter valid name.</u></p>
                     				<script>document.dealerform.name.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                   
									
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
							}
							elseif(empty($fname))
							{
								?>
								 
                     				<p style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>please enter firm's name.</u></p>
                     				<script>document.dealerform.fname.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
								  
							}
							elseif(empty($state))
							{
								?>
								 
                     				<br/><br/><p style="color:red;"><u>please select a state.</u></p>
                     				<script>document.dealerform.state.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
								  
							}
							else if(empty($space))
							{
								?>
								 
                     				<br/><br/><br/><p style="color:red;"><u>please enter available area(space).</u></p>
                     				<script>document.dealerform.space.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
							}
							else if(empty($invest))
							{
								?>
								 
                     				<br/><br/><br/><p style="color:red;"><u>please enter min investment.</u></p>
                     				<script>document.dealerform.invest.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
							}
							else if($invest<=0 || $invest>=99999999)
							{
							?>
								 
                     				<br/><br/><br/><p style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>please enter only numbers.</u></p>
                     				<script>document.dealerform.invest.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
							}
								else if(empty($addr))
							{
								?>
								 
                     				<br/><br/><br/><p style="color:red;"><u>please enter address.</u></p>
                     				<script>document.dealerform.addr.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
							}
							else if(empty($mobile))
							{
								?>
								 
                     				<br/><br/><br/><p style="color:red;"><u>please enter mobile number.</u></p>
                     				<script>document.dealerform.mobile.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
							}
							else if($mobile<=7000000000 || $mobile>=9999999999)
							{
							?>
								 
                     				<br/><br/><br/><p style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>please enter valid mobile number.</u></p>
                     				<script>document.dealerform.mobile.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
							}
					
							else if(!empty($phone1) && $phone1<=0 || $phone1>=99999)
							{
							?>
								 
                     				<br/><br/><br/><p style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>please enter valid std code.</u></p>
                     				<script>document.dealerform.phone1.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
							}
							
							else if(!empty($phone2) && $phone2<=10000 || $phone2>=99999999)
							{
							?>
								 
                     				<br/><br/><br/><p style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>please enter valid phone number.</u></p>
                     				<script>document.dealerform.phone2.focus();
									<?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
									document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
									
									</script>
								<?php
							}
							else if((!preg_match("/^[_0-9a-zA-Z-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,3})$/",$mail))&&!empty($mail))
							{
								?>
								  	<br/><br/><br/>
                     				<p style="color:red;"><u>please enter valid email id.</u></p>
                     				<script>document.dealerform.mail.focus();
                                   <?php switch($radio) 
									{ 
									case "Sub Dealer":?>
									document.getElementById("Sub Dealer").checked=true;
									<?php break; 
									case "Distributer": ?>
									document.getElementById("Distributer").checked=true;
									<?php break; 
									
									}  ?>
                                    document.dealerform.name.value='<?php echo $name; ?>';
                            		document.dealerform.fname.value='<?php echo $fname; ?>';
                                    
									document.dealerform.space.value='<?php echo $space; ?>';
                            		document.dealerform.invest.value='<?php echo $invest; ?>';
                                    document.dealerform.exp.value='<?php echo $exp; ?>';
									document.dealerform.addr.value='<?php echo $addr; ?>';
									document.dealerform.mobile.value='<?php echo $mobile; ?>';
                            		document.dealerform.phone1.value='<?php echo $phone1; ?>';
                                    document.dealerform.phone2.value='<?php echo $phone2; ?>';
									document.dealerform.mail.value='<?php echo $mail; ?>';
                                    </script>
								<?php
							}
								
								
						
								
							else 
							{
								
								$sno=$r+1;
								$sql="INSERT INTO dealer VALUES('$sno','$radio','$name','$fname','$state','$city','$space','$invest','$exp','$addr','$mobile','$phone1','$phone2','$mail')";
								
									if (!mysql_query($sql,$con))
									{
					  
										die();
									}
								?>
								<script>window.alert('Form submitted we will contact you soon.')</script>
                    
					
								<?php
							}
							
								mysql_close($con);
							}
								?>	
</div>