<?php
require_once 'Livro.php';
require_once 'Publicacao.php';
class Pessoa {
    //atributos
    private $nome;
    private $idade;
    private $sexo;
    //metodo
    public function fazerAniver(){
        $this->idade+1;
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