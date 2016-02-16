<!DOCTYPE html>
<html>
<head>
	<title>Polling</title>
</head>
<body>
	<div id="userlist">

	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
	function getUsers(){
		$.ajax({
		url: 'polling.php',
		success: function(response){
			console.log(response);
			$('#userlist').html(response);
		}
	})
	;
	}

	var myinterval = setInterval(getUsers, 1000);

	</script>
</body>
</html>
