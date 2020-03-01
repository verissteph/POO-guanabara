<?php
class ContaBanco{
    //atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    //métodos especiais
    public function __construct()
    {
        $this->status=false;
        $this->saldo = 0;
    }
    public function setNumConta($n){
         $this->numConta = $n;
    }
    public function getNumConta(){
        return $this->numConta;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setDono($d){
        $this->dono = $d;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setStatus($st){
        $this->status = $st;
    }
    public function getStatus(){
        return $this->status;
    }
    //métodos
    public function abrirConta($t){
        $this->setStatus(true);
        $this-> setTipo($t);
        if($t=="CC"){
            $this->setSaldo(50);
        } else if($t=="CP"){
            $this->setSaldo(150);
        }

    }
    public function fecharConta(){
        if($this->getSaldo > 0){
            echo "Conta com dinheiro!";
        } else if($this->getSaldo < 0){
            echo "Conta com débito";
        } else{
            $this->setStatus(false);
        }

    }
    public function depositar($v){
        if($this->getStatus==true){
            $this->setSaldo($this->getSaldo() + $v);
        } else{
            echo "Impossivel depositar";
        }
    }
    public function sacar($v){
        if($this->getStatus == true){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            } else{
                echo "Saldo insuficiente";
            }
        }else{
            echo "Impossivel sacar.";
        }

    }
    public function pagarMensal(){
        $v=0;//declarar a variavel V de valor
        if($this->getTipo()=="CC"){
            $v=12;
        } else if($this->getTipo()=="CP"){
            $v=20;
        }
        if($this->getStatus()==true){
            if($this->getSaldo > $v){
                $this->setSaldo($this->getSaldo()-$v);
            } else{
                echo "Saldo insuficiente";
            }
        } else{
            echo "Impossivel pagar";
        }

    }

}


?>