<?php
require_once 'CPessoa.php';
class Aluno extends Pessoa{
    //atributos
    private $matricula;
    private $curso;
    //metodos
    public function pagarMensalidade(){
        echo "<p> Pagando a mensalidade do aluno <strong> ". $this->getNome()." <p>";
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