<?php
require_once 'Lutador.php';
class Luta{
    //atributos
    private $desafiado;//agregação
    private $desafiante;//agregação
    private $rounds;
    private $aprovada;
    //metodos
    //REGRAS: 
    //1. So pode ser marcada entre lutadores da msm categoria.
    //2.Desafiado e desafiante devem ser lutadores diferentes
    //3. So pode acontecer se a luta for aprovada
    //4.so pode ter como resultado a vitoria de um dos dois ou o empate
    public function marcarLuta($l1,$l2){
        if(($l1->getCategoria() == $l2->getCategoria())&&$l1 !== $l2){
            $this->aprovada=true;
            $this->desafiado=$l1;
            $this->desafiante=$l2;
        } else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor=mt_rand(0,2);
            switch ($vencedor){
                case 0:
                    echo " <p>Empatou!";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                break;
                case 1:
                    echo "<p>O ".$this->desafiado->getNome()." ganhou a luta!";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                break;
                case 2:
                    echo "<p>O ".$this->desafiante->getNome()." ganhou a luta!";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    default;
                }
        }else{
            echo" Luta nao pode acontecer";
        }
    }
    //metodos especiais
    public function setDesafiado($dd){
        $this->desafiado=$dd;
    }
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiante($dt){
        $this->desafiante=$dt;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function setRounds($r){
        $this->round=$r;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function setAprovada($a){
        $this->aprovada=$a;
    }
    public function getAprovada(){
        return $this->aprovada;
    }
}

?>