<?php
require_once('../controllers/AppController.php');
require_once('../models/App.php');
$appCtr=new AppController();
$client=new App();

$client->setID($_POST['oid']);
$client->setAppdate($_POST['Appdate']);
$client->setName($_POST['oname']);
$client->setEmail($_POST['oemail']);
$client->setPhone($_POST['ophone']);
$client->setPName($_POST['pname']);
$appCtr->edit($client);
header('Location:success.html');

?>