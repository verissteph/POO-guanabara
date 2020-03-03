<?php
require_once 'CPessoa.php';
class Aluno extends Pessoa{
    //atributos
    private $matricula;
    private $curso;
    //metodos
    public function cancelarMatr(){
        if($this->getMatricula()){
            echo "<br> A matricula ". $this->getMatricula()." foi cancelada<br>";
            $this->setMatricula(null);
        } else {
            echo "<br> Não há matricula para cancelar";
        }

    }
    //metodos especiais
    public function __construct($mat,$c)
    {
        $this->matricula=$mat;
        $this->curso=$c;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($mat){
        $this->matricula=$mat;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($c){
        $this->curso=$c;
    }
}

?>