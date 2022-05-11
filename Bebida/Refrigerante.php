<?php

require_once 'Bebida.php';

class Suco extends Bebida{
    private function getRetornavel(){
        return $this->retornavel;
    }

    private function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }

    abstract function mostrarBebida(){
        echo 'nome'.$this->nome.'\br preco'.$this->preco.'\br safra'.$this->safra.'\br tipo'.$this-.'\br tipo';
    }

    abstract function verificarPreco($preco){
        $teste = true;
        if($preco < 5){
            $teste = true;
        }
        else{
            $teste = false;
        }
    }
    
}

?>