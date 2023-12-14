<?php
require_once('../controllers/AppController.php');
require_once('../models/App.php');

if(isset($_POST['oid']) && isset($_POST['Appdate']) && isset($_POST['oname']) && isset($_POST['oemail']) && isset($_POST['ophone']) && isset($_POST['pname'])) {
	$oid = $_POST['oid'];
	$Appdate = $_POST['Appdate'];
	$oname = $_POST['oname'];
	$oemail = $_POST['oemail'];
	$ophone = $_POST['ophone'];
	$pname = $_POST['pname'];

	$appointment=new App($oid,$Appdate,$oname,$oemail,$ophone,$pname);
	$appCtr=new AppController();

	$res=$appCtr->insertU($appointment);

}


?>