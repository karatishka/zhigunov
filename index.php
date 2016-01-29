<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hello =)</title>
<style>
	#conteiner{
		font-family: Arial, sans-serif;
		font-size: 16px;
		padding: 40px;
		background-color: #dbdbdb;
	}
	.time{
		text-align: center;
	}
	#info{
		margin: 20px;
	}
</style>
</head>
<body>
	<div id="conteiner"></div>
	<div id="info"><span>
		<? phpinfo(); ?>
	</span></div>

	<script>
		window.onload = function (){
			var a = new Date();
			var b = document.getElementById('conteiner');

			b.innerHTML = '<p class="time">' + a + '</p>';

			function t(){
				var a = new Date();
				var b = document.getElementById('conteiner');

				b.innerHTML = '<p class="time">' + a + '</p>';
			}
			var timeId = setInterval(t, 1000);
		}	
	</script>
</body>
</html>