<!DOCTYPE HTML>
<html lang="en">
<head>
	<?php if((preg_match("/iPad/i",$_SERVER['HTTP_USER_AGENT'])) || (preg_match("/iPhone/i",$_SERVER['HTTP_USER_AGENT'])) || (preg_match("/iPod/i",$_SERVER['HTTP_USER_AGENT']))) {
		echo "<title>MCSAdmin</title>";
	} else {
		echo "<title>MCSAdmin - MinecraftServers.com</title>";
	}
	?>
	<link rel="stylesheet" href="css/style_login.css" type="text/css" media="screen" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-css-transform.js"></script> 
	<script type="text/javascript" src="js/system_login.js"></script>
	<script type="text/javascript" src="js/detect.ios.js"></script>
	<link rel="apple-touch-icon" href="images/apple-icon.png"/>
	<link rel="apple-touch-startup-image" href="/startup.png" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-touch-fullscreen" content="yes" />
</head>
<body>
	<div id="login-form">
		<form action="javascript:login();" method="post">
			<div id="login_form_i">
				<h1>MCSAdmin</h1>
				<label><span>Username</span><input type="text" name="user" id="user" /></label><br />
				<label><span>Password</span><input type="password" name="pass" id="pass" /></label><br />
				<input type="submit" value="Login">
			</div>
			
			<div id="loading" style="display:none;">
				<div id="div4"> 
  					<div class="bar1"></div> 
  					<div class="bar2"></div> 
					<div class="bar3"></div> 
  					<div class="bar4"></div> 
  					<div class="bar5"></div> 
  					<div class="bar6"></div> 
  					<div class="bar7"></div> 
  					<div class="bar8"></div> 
				</div> 
			</div>
		</form>
		<h4>&copy; 2010 Hostiio, LLC.</h4>
	</div>
	
</body>
</html>