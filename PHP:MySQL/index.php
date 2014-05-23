<!doctype html>
<html>
	<head>
		<title>Polling System</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#btn").click(function(){
					var val =  $('input:radio[name=poll]:checked').val();
					//$('#res').html(val); //testing
					//Now to send data with ajax
					$.ajax({
						type : "POST", 
						url : "add.php",
						data : "poll="+val,
						success : function(data)
						{
							$(res).html(data);
						}

					});
				});
			});
		</script>
	</head>
	<body>
		<form>
			<h1><label>How much do you hate these ppl?</label></h1></br>
			<label>Yes:</label>
			<input type="radio" name="poll" value="1"><br/>
			<label>No:</label>
			<input type="radio" name="poll" value="0"><br/>
			<input type="button" id="btn" value="Vote">
		</form>
		<div id = "res"></div>
	</body>
</html>