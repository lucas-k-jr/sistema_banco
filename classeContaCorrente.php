<?php

    class ContaCorrente extends ContaEspecial{
        private $cpf;
        private $nome;
        public $email;
        private $nroConta;
        private $saldo;
        private $tipo;

        public function __construct($cpf, $nome, $email, $nroConta, $saldo, $tipo){
            parent::__construct($cpf, $nome, $email, $nroConta, $saldo, $tipo);
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->email = $email;
            $this->nroConta = $nroConta;
            $this->saldo = $saldo;
            $this->tipo = $tipo;
        }

        public function depositar($valor){
            $this->$saldo = $this->$saldo + $this->$valor;
        }

        public function sacar($valor){
            if ($saldo > $valor){
                $this->$saldo = $this->$saldo - $this->$valor;
            }
            else {
                echo "Não foi possível retirar o valor! Verifique seu saldo";
            }
        }

        public function get_exibe_dados(){
            echo "
                <fieldset>
                    <div>
                        <label>Nome:</label>".$this->nome."
                    </div>
                        <label>Número Conta:</label>".$this->nroConta."
                    </div>
                ";          
        }

        public function get_exibe_saldo(){
            echo "
                <fieldset>
                    <div>
                        <label>Saldo:</label>".$this->saldo."
                    </div>
                </fieldset>";          
        }
    }







?>