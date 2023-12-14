<?php

class App {
private $oid,$Appdate,$oemail,$oname,$ophone,$pname;
function __construct($oid="",$Appdate="",$oname="",$ophone="",$oemail="",$pname="") {
	
    $this->oid=$oid;
    $this->Appdate=$Appdate;
    $this->oname=$oname;
    $this->ophone=$ophone;
    $this->oemail=$oemail;
    $this->pname=$pname;
}

public function getID(){
	return $this->oid;
}

public function getName(){
	return $this->oname;
}

public function getEmail(){
	return $this->oemail;
}

public function getPhone(){
	return $this->ophone;
}

public function getPName(){
	return $this->pname;
}

public function getAppdate(){
	return $this->Appdate;
}


public function setID($oid){
    $this->oid = $oid;
}
    
public function setName($oname){
    return $this->oname = $oname;
}
    
public function setEmail($oemail){
    return $this->oemail = $oemail;
}
    
public function setPhone($ophone){
    return $this->ophone = $ophone;
}
    
public function setPName($pname){
    return $this->pname = $pname;
}
    
public function setAppdate($Appdate){
    return $this->Appdate = $Appdate;
}
	
}?>