<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
				
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<title>website blocked by pi-hole!</title>
		<link rel="icon" href="https://wp-cdn.pi-hole.net/wp-content/uploads/2016/12/cropped-Vortex-R-1-32x32.png">
	</head>

	<body style="background-image: url('https://cdn.pixabay.com/photo/2019/03/01/09/38/universe-4027609_1280.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center;">		
		<div class="row" style="text-align: center;">
			<div class="col s12"><h3 class="transparent-text">this is a placeholer</h3></div>
			<div class="col s12"><img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Pi-hole_Logo.png" alt="PiHoleLogo" height="200" /></div>
			<div class="col s12">
				<h2 class="white-text">WEBSITE BLOCKED!</h2>
				<p class="white-text">by Pi-hole®</p>
			</div>
			<div class="col s12">
				<button class="btn waves-effect waves-light red darken-4" type="button" onclick="sendMail()">Request whitelist
					<i class="material-icons left">email</i>
				</button>
			</div>
		</div>
			
		<!--JavaScript at end of body for optimized loading-->
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
			function sendMail() {
                window.open('mailto:michael.weissmare@web.de?subject=Pi-hole: Whitelist Request! &body=<?php echo $_SERVER['SERVER_NAME'];?>',"_self");
            }
		</script>

	</body>
</html>
