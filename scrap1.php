<html>
	<body>
		<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "test";
				$conn = mysql_connect($servername, $username, $password, $dbname);
				if (!$conn) 
				{
					die("Connection failed: " . mysqli_connect_error());
				}
				echo "Database Connection made Successfully";
				echo "<br>";
				$res=$conn->query("SELECT EMPNAME,EMPAGE FROM EmployeeData");
				echo "<table><tr><td>ID</td><td>Name</td><td>Age</td><td></td><td></td>>";
				while($query2=mysql_fetch_array($result))
				{
					echo "<tr><td>".$query2['id']."</td>";
				echo "<td>".$query2['name']."</td>";
				echo "<td>".$query2['age']."</td>";
				echo "<td><a href='edit.php?id=".$query2['id']."'>Edit</a></td>";
				echo "<td><a href='delete.php?id=".$query2['id']."'>x</a></td><tr>";
				}
		?>
	</ol>
	</table>
	</body>
</html>
 
