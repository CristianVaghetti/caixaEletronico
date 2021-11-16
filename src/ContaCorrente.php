<?php

require_once 'src/Contas.php';

class ContaCorrente extends Contas {

    public function getTaxa(){
        return 2.5;
    }

    public function getLimite(){
        return 600;
    }
<<<<<<< HEAD
    
=======
>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20
}