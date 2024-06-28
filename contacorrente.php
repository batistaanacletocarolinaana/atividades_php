<?php
    abstract class conta {
        public $saldo = 0;

        abstract function depositar ($valor);
        
        abstract function sacar ($valor);

    }
    
    class contacorrente extends conta {

        function depositar ($valor)
        {
            $this->$saldo += $valor ;
        }
    
        function sacar ($valor){
            $this->$saldo -= $valor ;
        }

        function transferir ($contadestino,$valor){
            $this->saldo - $valor;
        }
    } 

    $novaconta1 = new contacorrente();
    $novaconta2 = new contacorrente();
    $novaconta1 -> transferir('xxx-xxx', 500);
    $novaconta2 -> depositar('xxx-xxx', 100);

    echo "saldo" .$novaconta1->saldo;
    echo "saldo" .$novaconta2->saldo;

?>