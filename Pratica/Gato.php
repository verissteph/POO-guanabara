<?php
class Gato{
    //atributos
    var $idade;
    var $cor;
    var $raça;
    var $alimentado;
    var $cansado;
    //metodos
    function miar(){
        echo "<p>O marola está miando..</p>";
    }
    function comer(){
        if($this->alimentado==false){
            echo"<p> Ele está comendo.</p>";
        } else{
            echo "<p> Ele não está comendo.</p>";
        }
    }

    function dormir(){
        if($this->cansado == true){
            echo"<p> Ele vai dormir</p>";
        }
    }

    function brincar(){
        if($this->cansado ==false){
            echo "<p> Ele vai brincar</p>";
        }
    }
}
?>