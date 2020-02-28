<?php include_once "topo.php";?>




	<!--Conteudo do site -->
    <div id="borda">
    
    	<div id="yellowline">
        </div>
        
        
    
<div id="conteudo">
        
        	<div id="titulo">
            
            </div>
            
            <div id="texto">
            Contato
			</div>
            
            <div id="formulario">
           

            
            
            <form name="form_contato" action="send_mail.php" method="post">
                         		<fieldset>
                        		<legend> <fontered>Escreva sua mensagem... </fontered></legend>
                                	<br />
                        			<br /><br />
                                    
                        
                        			<table width="730" border="0">
  										<tbody>
                                        <td></td>
    											<tr>
                                        		<td>Nome:</td>
    											<td><input id="nome" name="nome" type="text" size="50" maxlength="20" placeholder="Digite seu nome:" ></td>
                                        	   </tr>
                                               <td>Telefone:</td>
    											<td><input id="telefone" name="telefone" type="text" size="50" maxlength="20" placeholder="Digite seu telefone (opcional):"></td>
                                        	   </tr>
                                               <td>Celular:</td>
    											<td><input id="celular" name="celular" type="text" size="50" maxlength="50" placeholder="Digite seu celular:(opcional)"></td>
                                        	   </tr>
                                               <tr>
    											<td>E-mail:</td>
    											<td><input id="email" name="email" type="text" size="50" maxlength="50" placeholder="Digite seu email:"></td>
  											</tr>
                                            
                                            <tr>
                                            
    											<td>Assunto:</td>
    											<td><input id="assunto" name="assunto" type="text" size="50" maxlength="50" placeholder="Digite o assunto:"></td>
  											</tr>
                                            <tr>
    											<td>Mensagem:</td>
    											<td><textarea id"mensagem" name="mensagem" cols="50" rows="20" placeholder="Digite sua mensagem:"></textarea></td>
  											</tr>
  											
                                            
                                            
                                            
										</tbody>
                            		</table><br /><br />

                        
                        	                
           	    			<input type="submit" name="submit" onclick="return validar()">
                            <input type="reset" name="submit" value="Limpar">
                        
                        </fieldset>
                        
					
                    </form>
            		
            </div>
            
            <div id="textoconsult">
            <fontered>
            Avenida Nelson Cardoso, 1149 - Sala 1510<br />
            Taquara - Jacarepaguá - Rio de Janeiro - RJ<br />
            Telefone: (21) 2423-4925<br />
            Celular: (21) 99999-3649<br /><br />
            
            </fontered>
			</div>
            
            
	</div>
                       
    
            
      
        
    </div>
    
    
<?php include_once "footer.php";?>



<?php

/* 
*******************************************************************************************************************************
**********************************SCRIPT PARA ENVIO DO EMAIL A PARTIR DE UM FORMULÁRIO*****************************************
*******************************************************************************************************************************
*/


?>


<?php

	//Recuperando dados do formulário
	$GetPost = filter_input_array(INPUT_POST,FILTER_DEFAULT);
	var_dump($GetPost);
	
	//Variaveis locais
	$nome = $GetPost['nome'];
	$telefone = $GetPost['telefone'];
	$celular = $GetPost['celular'];
	$email = $GetPost['email'];
	$assunto = $GetPost['assunto'];
	$mensagem = $GetPost['mensagem'];
	
	
	//Incluir PHPMailer
	//$Erro = true;
	include_once 'PHPMailer/class.smtp.php';
	include_once 'PHPMailer/class.phpmailer.php';
	
	//Enviando o email utilizando o PHPMailer
	$Mailer = new PHPMailer;
	$Mailer->Charset = "utf-8";//Tipo de Caractere
	$Mailer->SMTPDebug = 3;//Debug
	$Mailer->isSMTP();//Tipo de envio
	$Mailer->Host = "email-ssl.com.br"; //Servidor de email locaweb 
	//imap.dradilmaolimpio.com.br //pop.dradilmaolimpio.com.br //mail.dradilmaolimpio.com.br
	$Mailer->SMTPAuth = "true";//Metodo de envio - se cx postal existe no servidor usar true
	$Mailer->Username = "portaldilmaolimpio@dradilmaolimpio.com.br";
	$Mailer->Password = "ch@345350DBA";
	$Mailer->SMTPSecure = "ssl";//Tipo de segurança
	$Mailer->Port = 465; //ou 587
	$Mailer->FromName = "($nome)";
	$Mailer->From = "portaldilmaolimpio@dradilmaolimpio.com.br";//De
	$Mailer->addAddress("dilmaolimpio@oi.com.br");//Destinatário
	$Mailer->isHTML(true);//Sera enviado no formato HTML
	$Mailer->Subject = "Recebido do Portal - $nome - $assunto - ".date("d/m/Y")." - " .date("H:i"); //Assunto do e-mail
	$Mailer->Body = "<strong>De: $nome<br>E-mail: $email<br>Telefone: $telefone<br>Celular: $celular<br>Assunto: $assunto</strong><br><br>$mensagem";
	
	
	//Verificação
	/*
	if($Mailer->send())
	{
		$Erro = false;
	}
	var_dump($Erro);
	*/
	if($Mailer->send())
	{
		echo "<script>
					confirma_envio();
			</script>";
	}
	else
	{
		var_dump($Erro);
	}

?>