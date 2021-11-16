<?php

require_once 'src/Contas.php';

class ContaPoupanca extends Contas {

    public function getTaxa(){
        return 0.8;
    }

    public function getLimite(){
        return 1000;
    }
<<<<<<< HEAD
     
=======
>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20
}