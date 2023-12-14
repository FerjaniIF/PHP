<?php
require_once('../controllers/AppController.php');

if (isset($_GET['oid'])) {
    $oid = $_GET['oid']; 
    $appCtr = new AppController();
    $appCtr->delete($oid);
    header('Location: home.html');
    exit;
}
?>
