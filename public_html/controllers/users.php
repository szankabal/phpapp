<?php

$dbuser = 'balazs';
$dbpass = 'Password123#@!';

$database = new PDO('mysql:host=localhost;dbname=phpapp', $dbuser, $dbpass);

include '../models/userModel.php';

$uModel = new UserModel($database);

$uList = $uModel->getUserData();

include '../views/viewUsers.php';

?>
