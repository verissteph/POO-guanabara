<?php
require_once 'CPessoa.php';
class Professor extends Pessoa{
//atributos
private $especialidade;
private $salario;

//metodos
public function receberAum($valor){
$this->setSalario($this->getSalario()+$valor);
}
//metodos especiais
public function __construct($esp,$sal)
{
    $this->especialidade=$esp;
    $this->salario=$sal;
}
public function getEspecialidade(){
    return $this->especialidade;
}
public function setEspecialidade($esp){
    $this->especialidade=$esp;
}
public function getSalario(){
    return $this->salario;
}
public function setSalario($sal){
    $this->salario=$sal;
}
}

?>