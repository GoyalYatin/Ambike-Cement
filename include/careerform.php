<div style="text-align:center; float:left; margin-left:0px;width:300px; height:80px;margin-top:40px;font-size:16px;font-weight:bold;">
						<?php

						  if(isset($_POST['submit']))
						  {
							
							$con = mysql_connect("localhost","root","minku@20");
							if (!$con)
							{
								die('Could not connect: ' . mysql_error());
							}
							$sno=0;
							$r;	
							
							$name=$_POST['name'];
							$fname=$_POST['fname'];
							$mobile=$_POST['mobile'];
							$phone1=$_POST['phone1'];
							$phone2=$_POST['phone2'];
							$mail=$_POST['mail'];
							$addr=$_POST['addr'];
							$post=$_POST['post'];
							
							$state=$_POST['state'];
							$city=$_POST['city'];
							$salary=$_POST['salary'];
							$job=$_POST['job'];
							$photo=$fileName;
							$resume=$imageName ;
							
							
							
							mysql_select_db("ambike", $con);
							$result = mysql_query("select sno from career");
							while($row = mysql_fetch_array($result))
							{
								$r=$row['sno'];
							}
							
						if(empty($name))
							{
								?>
								 
                     				<p style="color:red;"><u>please enter name.</u></p>
                     				<script>document.careerform.name.focus();
								
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
                                    document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
									
									
									
									</script>
								<?php
								  
							}
							else if(!preg_match("/^[A-Za-z ]+$/",$name))
							{
								?>
								 
                     				<p style="color:red;"><u>please enter valid name.</u></p>
                     				<script>document.careerform.name.focus();
									
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
                                    document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
									</script>
								<?php
							}
							elseif(empty($fname))
							{
								?>
								 
                     				<p style="color:red;"><u>please enter father's name.</u></p>
                     				<script>document.careerform.fname.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
									document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
                                    
									</script>
								<?php
								  
							}
							else if(!preg_match("/^[A-Za-z ]+$/",$fname))
							{
								?>
								 
                     				<p style="color:red;"><u>please enter valid name.</u></p>
                     				<script>document.careerform.fname.focus();
									
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
                                    document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
									</script>
								<?php
							}
								else if(empty($mobile))
							{
								?>
								 
                     				<p style="color:red;"><u>please enter mobile number.</u></p>
                     				<script>document.careerform.mobile.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
                                    document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
									</script>
								<?php
							}
							else if($mobile<=7000000000 || $mobile>=9999999999)
							{
							?>
								 
                     				<p style="color:red;"><u>please enter valid mobile number.</u></p>
                     				<script>document.careerform.mobile.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
									document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
                                    </script>
								<?php
							}
					
							else if(!empty($phone1) && $phone1<=0 || $phone1>=99999)
							{
							?>
								 
                     				<p style="color:red;"><u>please enter valid std code.</u></p>
                     				<script>document.careerform.phone1.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
									document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
                                    </script>
								<?php
							}
							
							else if(!empty($phone2) && $phone2<=10000 || $phone2>=99999999)
							{
							?>
								 
                     				<p style="color:red;"><u>please enter valid phone number.</u></p>
                     				<script>document.careerform.phone2.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
									document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
                                    </script>
								<?php
							}
							else if((!preg_match("/^[_0-9a-zA-Z-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,3})$/",$mail))&&!empty($mail))
							{
								?>
								  	
                     				<p style="color:red;"><u>please enter valid email id.</u></p>
                     				<script>document.careerform.mail.focus();
                                   document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
									document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
                                     </script>
								<?php
							}
							
							elseif(empty($post)||$post=='---select---')
							{
								?>
								 
                     				<p style="color:red;"><u>please select a post.</u></p>
                     				<script>document.careerform.post.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
                                    document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
									</script>
								<?php
								  
							}
							elseif(empty($state)||$state=='----select----'||$city=='----select----')
							{
								?>
								 
                     				<p style="color:red;"><u>please select an area.</u></p>
                     				<script>document.careerform.state.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
                                    document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
									</script>
								<?php
								  
							}
					
							else if(empty($salary))
							{
								?>
								 
                     				<p style="color:red;"><u>please enter salary expected.</u></p>
                     				<script>document.careerform.salary.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
									document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
                                    </script>
								<?php
							}
							else if($salary<=0 || $salary>=99999999)
							{
							?>
								 
                     				<p style="color:red;"><u>please enter only numbers.</u></p>
                     				<script>document.careerform.salary.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
                                    document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
									</script>
								<?php
							}
									else if(empty($job)||$job=='---select---')
							{
								?>
								 
                     				<p style="color:red;"><u>please select job profile.</u></p>
                     				<script>document.careerform.job.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
                                    document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
									</script>
								<?php
							}
								/*elseif (($_FILES["file"]["size"])!=0)
								{
								if ((($_FILES["file"]["type"] != "image/gif")
										&& ($_FILES["file"]["type"] != "image/jpeg")
										&& ($_FILES["file"]["type"] != "image/jpg")
										&& ($_FILES["file"]["type"] != "image/pjpeg")
										&& ($_FILES["file"]["type"] != "image/x-png")
										&& ($_FILES["file"]["type"] != "image/png"))
										|| !($_FILES["file"]["size"] < 5388608)
										|| !in_array($extension, $allowedExts))
									{
								?>
								 
                     				<p style="color:red;"><u>invalid file.</u></p>
                     				<script>document.careerform.file.focus();
									document.careerform.name.value='<?php echo $name; ?>';
                            		document.careerform.fname.value='<?php echo $fname; ?>';
                                    document.careerform.mobile.value='<?php echo $mobile; ?>';
                            		document.careerform.phone1.value='<?php echo $phone1; ?>';
                                    document.careerform.phone2.value='<?php echo $phone2; ?>';
									document.careerform.mail.value='<?php echo $mail; ?>';
									document.careerform.addr.value='<?php echo $addr; ?>';
									document.careerform.post.value='<?php echo $post; ?>';
									document.careerform.salary.value='<?php echo $salary; ?>';
                            		document.careerform.job.value='<?php echo $job; ?>';
                                    document.careerform.file.value='<?php echo $photo; ?>';
									document.careerform.file1.value='<?php echo $imagename; ?>';
									</script>
								<?php
									
									}
								}
								*/
							else 
							{
								$sno=$r+1;
								$sql="INSERT INTO career VALUES('$sno','$name','$fname','$mobile','$phone1','$phone2','$mail','$addr','$post','$state','$city','$salary','$job','$photo','$resume')";
								?> 
								<?php 
									if (!mysql_query($sql,$con))
									{
					  
										die(mysql_error());
									}
								?>
								<script>window.alert('Form submitted we will contact you soon.')</script>
                    
					
								<?php
							}
								mysql_close($con);
							}
								?>	
</div>