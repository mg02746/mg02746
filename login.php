<?php

if(isset($_POST['submit'])) {
	$u = $_POST['username'];
	$p = $_POST['password'];
	
	if(!empty($u) && $u == 'matt' && !empty($p) && $p == 'mattpass') {
		header('Location: http://ec2-13-59-77-26.us-east-2.compute.amazonaws.com/weather.php');
	} else {
		$msg = '<span style="color: red;">Invalid username and/or password.</span>';
	}
} 

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login.php</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			.navbar { border-radius: 0px; }
		</style>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mattnavbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						<a class="navbar-brand" href="#">Matt Gnann</a>
					</div>
					<div class="collapse navbar-collapse" id="mattnavbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
						</ul>
					</div>
				</div>
			</nav>
			
		<div class="container">
		
			<div class="page-header">
				<h1>Log In</h1>
			</div>
			
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<form method="POST" action="login.php" class="well well-lg">
						<?php echo $msg; ?>
						<div class="form-group">
							<label for="u">Username</label>
							<input type="text" name="username" id="u" value="<?php echo $u; ?>" class="form-control" placeholder="Username" autofocus required autocomplete="on">
						</div>
						<div class="form-group">
							<label for="p">Password</label>
							<input type="password" name="password" id="p" value="<?php echo $p; ?>" class="form-control" placeholder="Password" autofocus required autocomplete="on">
						</div>					
							<button type="submit" class="btn btn-default" name="submit">Log In</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>