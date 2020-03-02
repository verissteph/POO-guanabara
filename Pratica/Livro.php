<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{
    //atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    //métodos
    public function detalhes(){
        echo"<hr>Livro ".$this->titulo." escrito por ".$this->autor;
        echo"<br> Páginas: ".$this->totPaginas." atual ".$this->pagAtual;
        echo"<br> Sendo lido por ".$this->leitor->getNome();
    }
    //sobreescrevendo metodos
    public function abrir(){
        $this->aberto=true;
    }
    public function fechar(){
        $this->aberto=false;
    }
    public function folhear($p){
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        } else{
            $this->pagAtual = $p;
        }
    }
    public function avançarPag(){
        
        $this->pagAtual++;
    }
    
    public function voltarPag(){
        $this->pagAtual--;
    }
    //métodos especiais
    public function __construct($tit,$au,$tp,$le)
    {
        $this->titulo=$tit;
        $this->autor=$au;
        $this->totPaginas=$tp;
        $this->aberto=false;
        $this->pagAtual=0;
        $this->leitor=$le;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($tit){
        $this->titulo=$tit;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function setAutor($au){
        $this->autor=$au;
    }
    public function getTotPaginas(){
        return $this->totPaginas;
    }
    public function setTotPaginas($tp){
        $this->totPaginas=$tp;
    }
    public function getPagAtual(){
        return $this->pagAtual;
    }
    public function setPagAtual($pa){
        $this->pagAtual=$pa;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function setAberto($ab){
        $this->aberto=$ab;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setLeitor($le){
        $this->leitor=$le;
    }
}
?>