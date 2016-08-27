<?php

require 'inc/bootstrap.php';

if (!Session::getInstance()->isConnect()) {
	App::redirect('connexion.php');
	exit();
}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
  </head>
  <body class="body_account">
	<div class="menu">
		<div class="row">
			<div class="medium-8 columns">
				<h1>Votre compte <?php echo Session::getInstance()->showUser()->login; ?></h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="medium-8 medium-offset-2 columns">
			<!--<button ><a href="logout.php" style="color : black">deco</a></button>-->
			
		</div>
	</div>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>