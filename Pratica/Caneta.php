<?php 
class Caneta{
public $modelo;
private $ponta;

public function getModelo(){
    return $this->modelo;
}

public function setModelo($m){
    return $this->modelo=$m;
}

public function getPonta(){
    return $this->ponta;
}

public function setPonta($p){
    return $this->ponta=$p;
}

}
?>