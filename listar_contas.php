<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />  
    </head>
    <body>
		<?php
		        include("classeContaCorrente.php");
                include("classeContaEspecial.php");
		        session_start();
		        include("cabecalho.php");
		        echo"<table border ='1'>
			    <thead>
				    <tr>
					    <th>Nome:</th>".$this->nome."
					    <th>Número da Conta</th>".$this->nroConta."
					    <th>Saldo</th>".$this->saldo."
				    </tr>
			    </thead>
		    <tbody>";
					
			foreach($_SESSION["produto"]as $i=>$p){
				$p->exibe_tr();
            }
		?>
			</tbody>
	</body>
</html>