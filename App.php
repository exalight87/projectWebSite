<?php

/**
* 
*/
class App
{
	
	static function getDatabase(){
		return new Database('root','','sport');
	}

	static function hasflashes(){
		if(!empty($_SESSION['flash'])){
			foreach ($_SESSION['flash'] as $key => $msg) {
				echo "<div class='callout $key'>";
						echo $msg."<br>";
				echo "</div>";
			};  
			session_unset();
		}
	}

	static function redirect($page){
		header("location: $page");
	}

}