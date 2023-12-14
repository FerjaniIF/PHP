<?php
require_once('../controllers/AppController.php');

$appCtr = new AppController();

if (isset($_POST['oid'])) {
    $oid = $_POST['oid'];
    if ($appCtr->idExists($oid)) {
        header("Location: editFormU.php?oid=".$oid);
        exit();
    } else {
        echo '<script>alert("Oops :( ... ID not found, try again!");';
        echo 'window.location.href = "verifCode.php";</script>';
        exit();
    }
}
?>
