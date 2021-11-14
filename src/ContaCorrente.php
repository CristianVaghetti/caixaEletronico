<?php

require_once 'src/Contas.php';

class ContaCorrente extends Contas {

    public function getTaxa(){
        return 2.5;
    }

    public function getLimite(){
        return 600;
    }
}