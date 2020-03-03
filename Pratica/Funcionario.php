<?php
require_once 'CPessoa.php';
class Funcionario extends Pessoa{
    //atributos
    private $setor;
    private $trabalhando;
    //metodos
    public function mudarTrabalho(){
        $this->trabalhando != $this->trabalhando;
        }

    
    //metodos especiais
    public function __construct($se)
    {
        $this->setor=$se;
        $this->trabalhando=true;
    }
    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($se){
        $this->setor=$se;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    }
    public function setTrabalhando($tr){
        $this->trabalhando=$tr;
    }
}
?>