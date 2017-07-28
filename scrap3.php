<html>
		<head>
		</head>
			<body>
				<table width="50%" align="center" border="0">
					<tr>
					<th>First Name</th>
					<th>Last Name</th>
					</tr>
					<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "test";
						$conn = mysql_connect($servername, $username, $password, $dbname);
						if (!$conn) 
						{
							die("Connection failed: " . mysql_connect_error());
						}
						echo "Database Connection made Successfully";
						echo "<br>";
						$ID=$_REQUEST["id"];
						echo $ID;
						$query=$conn->query("SELECT EMPNAME,EMPAGE FROM EmployeeData WHERE EMPID='$ID'");
						print_r($query);exit;
						$query1=mysql_fetch_array($query,MYSQL_BOTH);
					?>
				  <tr>
					  <td>
						 <input type="hidden" name="id" value="<?php echo $query1['EMPID'];?>" />
						 <input type="text" value="<?php echo $query1['EMPNAME'];?>" />
					  </td>
					  <td>
						 <input type="text" value="<?php echo $query1['EMPAGE'];?>" />
					  </td>
				  </tr>
				<tr>
					<td colspan="2">
						<button type="submit" name="savemul">Update all</button>
					</td>
				</tr>
			</table>
		</body>
</html>
