<?php

class Lutador{

    //atributos
private $nome;
private $nacionalidade;
private $idade;
private $altura;
private $peso;
private $categoria;
private $vitorias;
private $derrotas;
private $empates;

    //metodos
function apresentar(){
    echo"<p>-------------</p>";
    echo"<p>CHEGOU A HORA! O lutador ".$this->getNome();
    echo" veio diretamente d ". $this->getNacionalidade();
    echo " ,tem ". $this->getIdade() ." anos e pesa ".$this->getPeso() . " kg";
    echo " Ele tem ". $this->getVitorias()." vitorias, ";
    echo $this->getDerrotas()." derrotas e ".$this->getEmpates()." empates";
}

function status(){
echo"<p>---------------------</p>";
echo $this->getNome();
echo" é um peso ".$this->getCategoria();
echo "e ja ganhou ".$this->getVitorias()." vezes,";
echo" perdeu ". $this->getDerrotas()." vezes e";
echo" empatou ".$this->getEmpates()." vezes";
}

function ganharLuta(){
    $this->setVitorias($this->getVitorias() +1);
}

function perderLuta(){
    $this->setDerrotas($this->getDerrotas() + 1);
}
function empatarLuta(){
    $this->setEmpates($this->getEmpates() + 1);

}

    //metodos especiais
function __construct($no,$na,$al,$pe,$id,$vi,$de,$em)
{
    $this->nome=$no;
    $this->nacionalidade=$na;
    $this->altura=$al;
    $this->setPeso($pe);
    $this->idade=$id;
    $this->vitorias=$vi;
    $this->derrotas=$de;
    $this->empates=$em;
}
function getNome(){
    return $this->nome;
}
function setNome($no){
    $this->nome=$no;

}
function getNacionalidade(){
    return $this->nacionalidade;
}
function setNacionalidade($na){
    $this->nacionalidade=$na;
}

function getIdade(){
    return $this->idade;
}
function setIdade($id){
    $this->idade=$id;
}
function getAltura(){
    return $this->altura;
}
function setAltura($al){
    $this->altura=$al;

}
function getPeso(){
    return $this->peso;
}
function setPeso($pe){
    $this->peso=$pe;
    $this->setCategoria();

}
 function getCategoria(){
    return $this->categoria;
}
private function setCategoria(){
    if($this->peso < 52.2){
        $this->categoria=" Invalido ";
        }elseif($this->peso <= 70.3){
            $this->categoria="Leve ";
        }elseif($this->peso <= 83.9){
            $this->categoria=" Médio ";
        }elseif($this->peso <= 120.2){
        $this->categoria=" Pesado" ;
    } else{
        $this->categoria=" Invalido ";
    }
}
function getVitorias(){
    return $this->vitorias;
}
function setVitorias($vi){
    $this->vitorias=$vi;

}
function getDerrotas(){
    return $this->derrotas;
}
function setDerrotas($de){
    $this->derrotas=$de;
}
function getEmpates(){
    return $this->empates;
}
function setEmpates($em){
    $this->empates=$em;
}

}
