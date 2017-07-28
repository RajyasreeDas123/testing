<html>
	<body>
		<p id="demo"></p>
		<input type="number" id="uname" >
		<input type="number" id="fname">
		<button>click here</button>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script>
				$(document).ready(function()
				{
					$("button").click(function()
					{
						var x=parseInt($("#uname").val());
						var y=parseInt($("#fname").val());
						var a=(x+y);
						$("p").append("this is the result " +a);
					});
				});
		</script>
		
		
	</body>
</html>
