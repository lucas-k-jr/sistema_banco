<?php

    class ContaEspecial{
        private $limite;

        public function __construct(){
            $this->limite = $limte;
        }

        public function __limitar(){
            $this->limite = $this->saldo;
        }

        public function sacar($valor){
            if($this->$valor < $this->limite){
                $this->$saldo = $this->$saldo - $this->$valor;
            }
            else{
                echo "Operação negada, seu limite irá ser ultrapassado";
            }
        }  
    }

?>