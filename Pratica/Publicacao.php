<?php

interface Publicacao{
    //metodos abstratos
    public function abrir();
    public function fechar();
    public function folhear($p);
    public function avançarPag();
    public function voltarPag();
}

?>