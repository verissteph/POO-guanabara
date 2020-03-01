<?php
    require_once('Controlador.php');
class ControleRemoto implements Controlador{
    //atributos
    private $volume;
    private $ligado;
    private $tocando;

    //metodos especiais
    function __construct()
    {
        $this->volume=50;
        $this->ligado=false;
        $this->tocando = false;
    }
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($volume){
        $this->volume=$volume;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($ligado){
        $this->ligado=$ligado;
    }
    private function getTocando(){
        $this->tocando;
    }
    private function setTocando($tocando){
        $this->tocando=$tocando;
    }
    //sobreescrevendo métodos:
    function ligar(){
        $this->setLigado(true);
    }
    function desligar(){
        $this->setLigado(false);
    }
    function abrirMenu(){
    echo"<br>------------MENU---------------";
    echo"<br> Está ligado?: ". ($this->getLigado()?"SIM":"NÃO");
    echo "<br> Está tocando?:". ($this->getTocando()?"SIM":"NÂO");
    echo"<br> Volume: ". $this->getVolume();
    for($i=0;$i<=$this->getVolume();$i+=10){
        echo "|";
    }
    echo"<br>";
    }
    function fecharMenu(){
        echo "<br>Fechando Menu..";
    }
    function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume()+5);
        } else{
            echo "<p>ERRO! Nao posso aumentar</p>";
        }
    }
    function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume()-5);
        } else{
            echo"<p> ERRO! Nao posso diminuir </p>";
        }
    }
    function ligarMudo(){
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
    function play(){
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}

?>