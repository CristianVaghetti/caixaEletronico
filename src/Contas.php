<?php

abstract class Contas {
    
    protected $nome;
    protected $saldo;

    public function __construct($nome, $saldo){
        $this->nome = $nome;
        $this->saldo = $saldo;
    }

    
    public function getSaldo() {
        return $this->saldo;
    }

    public function sacar($valorSaque) {
        if($this->getLimite() < $valorSaque){
            return "Limite de saque excedido!\n";
        }
        if($valorSaque > $this->saldo) {
            return "Saldo insuficiente!\n";
        }

        $this->saldo -= $valorSaque + $this->getTaxa();    
        return "Novo Saldo: B$ ".$this->saldo;
    }

    public  function depositar($valorDeposito) {
        $this->saldo += $valorDeposito;
        return "Valor depositado!\nNovo Saldo: B$ ".$this->saldo."\n";
    }

    public function transferir($valorTransferido, $contaDestino) {
        if($this->saldo < $valorTransferido){
            return "Saldo insuficiente para transferência!\n";
        }
        $this->saldo -= $valorTransferido;
        $contaDestino->saldo += $valorTransferido;
        return "Transferencia concluída!\nNovo Saldo: ".$this->saldo."\n";
<<<<<<< HEAD
=======

>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20
    }

    public function getNome(){
        return $this->nome;
    }

    abstract public function getTaxa();
    abstract public function getLimite();
<<<<<<< HEAD
    
=======
>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20
}
