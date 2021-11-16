<?php  

//namespace Moovin\Job\Backend;
require_once 'src/ContaCorrente.php';
require_once 'src/ContaPoupanca.php';
require_once 'src/Contas.php';
<<<<<<< HEAD

=======
>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20
class CaixaEletronico {
    
    public function __construct(){
        $this->vetor_de_contas = [
            new ContaPoupanca('Cristian', 2000), 
            new ContaCorrente('Enzo', 5000), 
            new ContaCorrente('João', 2500), 
            new ContaPoupanca('Maria', 3000)
<<<<<<< HEAD
            //os ID das contas eu utilizei como o prórprio índice do array.
=======
            //os ID das contas eu utilizei como o prórprio índice do array
>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20
    ];
    }
    
    public $vetor_de_contas;

    public function getSaldo($id){
        if(isset($this->vetor_de_contas[$id])){
        return "Nome: ".$this->vetor_de_contas[$id]->getNome()." Saldo: B$".$this->vetor_de_contas[$id]->getSaldo()."\n";
        } else {
            return "Conta não localizada!\n";
        }
    }
<<<<<<< HEAD

=======
>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20
    public function sacar($id, $valorSaque){
        if(isset($this->vetor_de_contas[$id])) {
        return $this->vetor_de_contas[$id]->sacar($valorSaque);
    } else {
        return "Conta não localizada!\n"; 
        }
    }
<<<<<<< HEAD

=======
>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20
    public function depositar($id, $valorDeposito) {
        if(isset($this->vetor_de_contas[$id])) {
        return $this->vetor_de_contas[$id]->depositar($valorDeposito); 
    } else {
        return "Conta não localizada!\n"; 
        }
    }
<<<<<<< HEAD
    
=======
>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20
    public function transferir($id, $contaDestino, $valorTransferido){
        if(isset($this->vetor_de_contas[$id]) && isset($this->vetor_de_contas[$contaDestino])) {
        return $this->vetor_de_contas[$id]->transferir($valorTransferido, $this->vetor_de_contas[$contaDestino]);
        } else {
            return "Conta não localizada!\n"; 
        }
    }
<<<<<<< HEAD

=======
>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20
}