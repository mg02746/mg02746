<!DOCTYPE html>
	<head>
		<title>Weather</title>
		<script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous">
		</script>
	</head>
	<body>
		<script>
		$.getJSON('http://api.openweathermap.org/data/2.5/weather?q=Statesboro,GA&APPID=d97e77e0de68ef4e18dba7dd5fec47e7', function(data) {
			var weather = JSON.stringify(data);
			document.getElementById("weatherbox").innerHTML = weather;
		});
		</script>
		<div id="weatherbox"></div>
	</body>
</html>