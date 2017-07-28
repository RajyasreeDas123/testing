<html>
	<body>
		<p id="demo"></p>
		<input type="number" id="age" >
		<button>click here</button>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<br>
		<script>
			$(document).ready(function()
				{
					$("button").click(function()
					{
						$('#demo').text(" ");
						var a=parseInt($("#age").val());
						switch(true)
						{
							case (a<=13):
								$("p").append(+a+"-TEENAGER");
								break;
							case (a<=30):
								$("p").append(a+"-YOUTH");
								break;
							case (a<=50):
								$("p").append(a+"-MIDDLE AGE");
								break;
							case (a>50):
								$("p").append(a+"-OLD AGE");
								break;
							default:
								$("p").append(a+"-INVALID AGE");
						}	
						$('#age').val(" ");	
					});
				});
		</script>
	</boby>
</html>
