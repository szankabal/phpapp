<?php

$dbuser = 'balazs';
$dbpass = 'Password123#@!';

$database = new PDO('mysql:host=localhost;dbname=phpapp', $dbuser, $dbpass);

include '../models/advertisementModel.php';

$aModel = new AdvertisementModel($database);

$aList = $aModel->getAdvertisementData();

include '../views/viewAdvertisements.php';

?>
