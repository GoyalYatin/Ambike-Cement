<?php

						$con = mysql_connect("localhost","root","mysql");
						if (!$con)
							{
							}

						mysql_select_db("ambike", $con);
						$i=1;
						$result = mysql_query("select * from contact");
					?>
						<table border="2" cellpadding="3" cellspacing="0" align="center" width="200px;"style="border:2px #016dff solid;color:black;text-align:center;">
						<tr>
						
						<td><b>Name</b></td>
						<td><b>Phone Number</b></td>
						<td><b>Email</b></td>
						<td><b>Queries</b></td>
						
						</tr>
					<?php
						$i=1;
						while($row = mysql_fetch_array($result))
						  {
						  echo "<tr>";
						  
						  echo "<td>" . $row['name'] . "</td>";
						  echo "<td>" . $row['phone'] . "</td>";
						  echo "<td>" . $row['mail'] . "</td>";
						  echo "<td>" . $row['query'] . "</td>";
						  
							echo "</tr>";	
							$i=$i+1;
							}
							echo "</table>";
						

					?>

				</div>
				<hr/>
				<div style="float:left;width:100%;height:30px;">
				
				<a href="exp.php" >EXPORT to EXCEL</a>
				<?php
				
				
				?>
				</div>
			</div>
			
			<?php 
			mysql_close($con);
			?>