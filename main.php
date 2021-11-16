<?php
require_once 'src/CaixaEletronico.php';
require_once __DIR__ . '/vendor/autoload.php';
//use Moovin\Job\Backend\CaixaEletronico;

/*$operacao1 = new CaixaEletronico;
echo $operacao1->getSaldo(1);                       //Teste da função de consultar saldo
echo $operacao1->sacar(1, 599);*/                   //Teste da função de sacar 

<<<<<<< HEAD
$operacao2 = new CaixaEletronico;
echo $operacao2->getSaldo(2);                       
echo $operacao2->depositar(2, 1000);              //Teste da função de depositar 

// $operacao3 = new CaixaEletronico;
// echo $operacao3->getSaldo(0);
// echo $operacao3->getSaldo(1);
// echo $operacao3->transferir(1, 0, 6000);            //Teste da função de transferir.
// echo $operacao3->getSaldo(0);
// echo $operacao3->getSaldo(1);

=======
/*$operacao2 = new CaixaEletronico;
echo $operacao2->getSaldo(2);                       
echo $operacao2->depositar(2, 1000); */             //Teste da função de depositar 


$operacao3 = new CaixaEletronico;
echo $operacao3->getSaldo(0);
echo $operacao3->getSaldo(1);
echo $operacao3->transferir(1, 0, 6000);            //Teste da função de transferir
echo $operacao3->getSaldo(0);
echo $operacao3->getSaldo(1);
>>>>>>> fbf0d95ec8fc90beb873334cc1f15b2b4b292a20




