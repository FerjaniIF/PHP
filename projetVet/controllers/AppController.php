<?php
include_once('../models/App.php') ;
include_once('../database/cnx.php');

class AppController extends Connexion{
function __construct() {
parent::__construct();
}


function insertA(App $a) {
    try {
        $query = "INSERT INTO app(oid, Appdate, oname, oemail, ophone, pname, reason) VALUES (?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($a->getID(),$a->getAppDate(),$a->getName(),$a->getPhone(),$a->getEmail(),$a->getPName());
        $res->execute($aryy);
        header("Location: showDB.php");
        exit();
    } catch (PDOException $e) {
        if ($e->getCode() == '23000') { // 23000:violation du contraint pour oid  
            echo '<script>alert("Oops! ID already exists. Please try again.");';
            echo 'window.location.href = "Reserv_formA.html";</script>';
            exit();
        } 
    }
}


function insertU(App $a) {
    try {
        $query = "INSERT INTO app(oid, Appdate, oname, oemail, ophone, pname) VALUES (?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);
        $aryy = array($a->getID(),$a->getAppDate(),$a->getName(),$a->getPhone(),$a->getEmail(),$a->getPName());
        $res->execute($aryy);
        header("Location: success.html");
        exit();
    } catch (PDOException $e) {
        if ($e->getCode() == '23000') { // 23000:violation du contraint pour oid  
            echo '<script>alert("Oops! ID already exists. Please try again.");';
            echo 'window.location.href = "Reserv_formU.html";</script>';
            exit();
        } 
    }
}

function getApp($oid){
    $query = "SELECT * FROM app WHERE oid = ?";
    $res = $this->pdo->prepare($query);
    $res->execute([$oid]);
    $array = $res->fetch();
    return $array;
}

function delete($oid) {
    $query = "DELETE FROM app WHERE oid=?";
    $res = $this->pdo->prepare($query);
    return $res->execute([$oid]);
}

function liste(){
$query = "select * from app";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}

function edit(App $a){
    $query = "UPDATE app SET Appdate=?, oname=?, ophone=?, oemail=?, pname=? WHERE oid=?";
    $res = $this->pdo->prepare($query);
    $res->execute([$a->getAppDate(), $a->getName(), $a->getPhone(), $a->getEmail(), $a->getPName(), $a->getID()]);
}

function idExists($oid) {
    $query = "SELECT COUNT(*) as count FROM app WHERE oid = ?";
    $prepq = $this->pdo->prepare($query);
    $prepq->execute([$oid]);
    $result = $prepq->fetch();

    return ($result['count'] > 0);
}

function Nsearch(){
    if(isset($_GET['searchN'])) {
        $name = $_GET['searchN'];
        $query = "SELECT * FROM app WHERE oname = :name or oid = :name";
        $result = $this->pdo->prepare($query);
        $result->bindParam(':name', $name);
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetchAll();
    }
    return []; 
}



}
?>


	