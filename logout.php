<?php

require 'inc/bootstrap.php';

Session::getInstance()->delUser();

App::redirect('connexion.php');