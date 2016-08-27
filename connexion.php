<?php
	require 'inc/bootstrap.php';
	if (isset($_POST['username']) && isset($_POST['password'])) {
		$db = App::getDatabase();
		$user = $db->query('SELECT * FROM connex WHERE login=?', [$_POST['username']])->fetch();
		if ($user && password_verify($_POST['password'],$user->pwd)) {
			Session::getInstance()->addUser($user);
			App::redirect('account.php');
			exit();
		}else{
			Session::getInstance()->setFlash('alert','Mot de passe ou pseudo invalide');
		}

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
  <body class="body_connexion">
	<div class="layer">
		<div class="row">
			<div class="connexion medium-4 medium-offset-4 columns align-self-middle">	
				<?php  
				App::hasflashes();
				?>
				<p>CONNECTE TOI</p>
				<form action="" method="post">
					<div class="row">
						<div class="small-12 medium-12 columns">
							<input type="text" name="username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'pseudo'" placeholder="pseudo" required>
						</div>
						<div class="small-12 medium-12 columns">
							<input type="password" name="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'mot de passe'" placeholder="mot de passe" required>
						</div>
						<div class="small-12 medium-12">
							<button>connexion</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>