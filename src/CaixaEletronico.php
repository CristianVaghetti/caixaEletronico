<?php  

//namespace Moovin\Job\Backend;
require_once 'src/ContaCorrente.php';
require_once 'src/ContaPoupanca.php';
require_once 'src/Contas.php';
class CaixaEletronico {
    
    public function __construct(){
        $this->vetor_de_contas = [
            new ContaPoupanca('Cristian', 2000), 
            new ContaCorrente('Enzo', 5000), 
            new ContaCorrente('João', 2500), 
            new ContaPoupanca('Maria', 3000)
            //os ID das contas eu utilizei como o prórprio índice do array
    ];
    }
    
    public $vetor_de_contas;

    public function getSaldo($id){
        if(isset($this->vetor_de_contas[$id])){
        return "Nome: ".$this->vetor_de_contas[$id]->getNome()." Saldo: B$".$this->vetor_de_contas[$id]->getSaldo()."\n";
        } else {
            return "Conta não localizada!";
        }
    }
    public function sacar($id, $valorSaque){
        return $this->vetor_de_contas[$id]->sacar($valorSaque);
    }
    public function depositar($id, $valorDeposito){
        return $this->vetor_de_contas[$id]->depositar($valorDeposito);
    }
    public function transferir($id, $contaDestino, $valorTransferido){
        return $this->vetor_de_contas[$id]->transferir($valorTransferido, $this->vetor_de_contas[$contaDestino]);
    }
}