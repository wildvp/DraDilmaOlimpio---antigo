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
                        		<legend> <fontered>PARA MARCAÇÃO DE CONSULTAS, UTILIZE O TELEFONE OU WHATS UP (21) 99999-3649</fontered></legend>
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
    											<td><input id="telefone" name="telefone" type="text" size="50" maxlength="20" placeholder="Digite seu telefone (opcional):"> 
                                                <script>$("#telefone").mask("(00) 0000-0009");</script>
                                                </td>
                                        	   </tr>
                                               
                                               <td>Celular:</td>
    											<td><input id="celular" name="celular" type="text" size="50" maxlength="50" placeholder="Digite seu celular:(opcional)">
                                                <script>$("#celular").mask("(00) 00000-0009");</script>
                                                </td>
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

