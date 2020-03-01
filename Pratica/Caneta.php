<?php 
class Caneta{
public $modelo;
private $cor;
private $ponta;
private $tampada;

public function __construct($m,$c,$p)//ou em vez disso poe o mesmo nome da Classe, no caso ficaria: public function Caneta(){}
{
    $this->modelo=$m;
    $this->cor =$c;
    $this->ponta = $p;
    // $this->cor="Azul";
    $this->tampar();
}

public function tampar(){
    $this->tampada = true;
}

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