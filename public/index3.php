<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>bawl</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">		
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/social-networks.css">
	<link rel="stylesheet" href="css/bootstrap/css/bootstrap-theme.min.css">
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
	<header>
		<div id="main-banner" class="header-elements"><span>bawl</span></div>
		<div id="cry-out-button" class="header-elements"><span>Cry out</span></div>
		<div id="about-button" class="header-elements"><span>About</span></div>
		<div id="login-button" class="header-elements" ><span><a href="#login">Login</a></span></div>
	</header>
	<div id="main-container" class="row">
		<div id="map-canvas"></div>
		<div id="sidebar">
<!-- Login form were here, but I added it thought backbone view-->
		</div>	
	</div>
		<script  data-main="js/main.js" src="js/libs/requirejs/require-full.js"></script>
<!-- I am not sure how to add scripts to index file, while we use RequreJS. Let's discuss, how to do this right. I've uploaded them on previous way -->		
	<script src="js/libs/jquery/jquery-2.1.4.js"></script>
    <script src="js/libs/bootstrap/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script src="js/libs/gmaps/markerclusterer.js"></script>	
	<script src="js/apps/main.js"></script>
	<script src="js/apps/validation.js"></script>
    <script src="js/apps/addValid.js"></script>
	<!--<script src="../js/apps/social-networks-buttons.js">-->
	</script><script src="js/apps/signform.js"></script>
</body>
</html>