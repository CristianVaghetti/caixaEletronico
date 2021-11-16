<?php

require_once 'src/Contas.php';

class ContaPoupanca extends Contas {

    public function getTaxa(){
        return 0.8;
    }

    public function getLimite(){
        return 1000;
    }
    
}