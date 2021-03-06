<?php
abstract class Pessoa{
    //atributos
protected $nome;
protected $idade;
protected $sexo;

//metodos
public final function fazerAniv(){
    $this->idade++;
}
//metodos especiais
public function __construct($no,$id,$se)
{
    $this->nome=$no;
    $this->idade=$id;
    $this->sexo=$se;
}

public function getNome(){
    return $this->nome;
}
public function setNome($no){
    $this->nome=$no;
}
public function getIdade(){
    return $this->idade;
}
public function setIdade($id){
    $this->idade=$id;
}
public function getSexo(){
    return $this->sexo;
}
public function setSexo($se){
    $this->sexo=$se;
}

}

?>