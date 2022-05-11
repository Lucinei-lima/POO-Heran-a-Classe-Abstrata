<?php

require_once 'Bebida.php';

class Suco extends Bebida{
    private function getSabor(){
        return $this->sabor;
    }

    private function setSabor($sabor){
        $this->sabor = $sabor;
    }

    abstract function mostrarBebida(){
        echo 'nome'.$this->nome.'\br preco'.$this->preco.'\br safra'.$this->safra.'\br tipo'.$this-.'\br tipo';
    }

    abstract function verificarPreco($preco){
        $teste = true;
        if($preco < 2.5){
            $teste = true;
        }
        else{
            $teste = false;
        }
    }

}

?>