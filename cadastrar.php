<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastrar</title>
    </head>
    <body>
    <?php

	include("cabecalho.php");

    echo'<form action=\"classeDivisao.php\" method=\"POST\">

        <p><label>CPF:</label>
            <input type=\"number\" name=\"cpf\" size=\"30\" />
        </p>
        <p><label>Nome:</label>
            <input type=\"text\" name=\"nome\" size=\"30\" />
        </p>
        <p><label>Email:</label>
            <input type=\"mail\" name=\"email\"/>
            </p>
		<p><label>Tipo:</label>
        <!DOCTYPE html>
        <html>
	        <head>
		        <script>
			    function liberar_limite(valor){
				    if(valor=="ce"){
					    document.getElementById("limite").style.display="block";
                    }
                    else{
					    document.getElementById("limite").style.display="none";
				    }
				
			    }
		        </script>
	        </head>
	    <body>
		    <form name="teste">
			    <select name="tipo" onchange="liberar_limite(this.value)">
				    <option value="">::selecione::</option>
				    <option value="cc">Conta Corrente</option>
				    <option value="ce">Conta Especial</option>
			    </select>
			    <br />
			    <div id="limite" style="display:none">
				    <input type="number" name="limite" placeholder="Digite o limite especial..."  />				
			    </div>	
	    </body>
        </html>
        </p>
        <input type="button" value="Enviar">
		</form>
		';
            
        ?>
	</body>
</html>