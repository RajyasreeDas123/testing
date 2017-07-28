<html>
	<body>
		<p id="demo"></p>
		<input type="number" id="age" >
		<button>click here</button>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script>
			$(document).ready(function()
				{
					$("button").click(function()
					{
						$('#demo').text(" ");
						var a=parseInt($("#age").val());
						if(a>13 &&a <15)
							$("p").append(+a+"-TEENAGER");
						else if(a>=15 && a<30)
							$("p").append(a+"-YOUTH");
						else if(a>=30 && a<=50)
							$("p").append(a+"-MIDDLE AGE");
						else
							$("p").append(a+"-OLD AGE");
						$('#age').val(" ");	
					});
				});
		</script>
	</boby>
</html>
