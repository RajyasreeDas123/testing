<html>	
	<body>
		<?php
			$name = $email = $gender = $address = "";
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				  $name = $_POST["name"];
				  $email = $_POST["email"];
				  $address = $_POST["address"];
				  $gender = $_POST["gender"];
			}
		?>
		<?php
			
			echo "<h2>Your Input:</h2>";
			echo "Name- ";
			echo $name;
			echo "<br>";
			echo "Email-  ";
			echo $email;
			echo "<br>";
			echo "Address- ";
			echo $address;
			echo "<br>";
			echo "Hobbies- ";
			foreach($_POST['hob'] as $h) 
			{	
				echo $h;
				echo ", ";
			}	
			echo "<br>";
			echo "Gender- ";
			echo $gender;
		?>

	</body>
</html>
