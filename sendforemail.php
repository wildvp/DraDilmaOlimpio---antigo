<?php
	require 'PHPmailer/PHPMailerAutoload.php';
	
	$Mailer = new PHPMailer();
	
	// Define que será usado smtp
	$Mailer->IsSMTP();
	
	//Enviar email em FTML
	$MailerisHTML(true);
	// Aceitar caracteres especiais
	$Mailer->Charset = 'UTF-8';
	
	//Configurações
	$Mailer -> SMTPAuth = true;
	$Mailer -> SMTPSecure = 'ssl';
	
	//nome do servidor (LOCAWEB)
	$Mailer -> 'email-ssl.com.br';
	
	//Porta de saida do email
	$Mailer -> Port 465;
	
	//Dados do usuário	
	$Mailer ->Username = 'portaldilmaolimpio@dradilmaolimpio.com.br';
	$Mailer ->Password = '??????????';
	
	
	//Email remetente
	$Mailer ->Username = 'portaldilmaolimpio@dradilmaolimpio.com.br';	
	
	//Nome do remetente
	$Mailer -> $nome = $_REQUEST['nome'];
	
	//Assunto da mensagem
	$Mailer -> $assunto = $_REQUEST['assunto'];
	
	
	
	$email = $_REQUEST['email'];
	$mensagem = $_REQUEST['mensagem'];
	
	// Corpo da mensagem

	$Mailer -> $corpo = "<strong>Mensagem recebida pelo portal</strong><br><br>";
	$Mailer -> $corpo .= "<strong>Nome: </strong> $nome";
	$Mailer -> $corpo .= "<br><strong>E-mail: </strong> $email";
	$Mailer -> $corpo .= "<br><strong>Assunto: </strong> $assunto";
	$Mailer -> $corpo .= "<br><strong>Mensagem: </strong> $mensagem";
	
	
	// Destintario
	
	$Mailer -> AddAdress('professorcarlosmuniz@gmail.com');
	
	if ($Mailer->Send())
		{
			echo "Mensagem enviada com cucesso!!!";
		}
	else
		{
			echo "Erro no envio da mensagem" .$Mailer->ErrorInfo;
		}
	
	
	
	
/*	
	$header = "From: $email Reply-to: $email";
	$header .= "Content-Type: text/html; charset= utf-8";
	
	
	************************************************
	
	
	
	
	
/*
	//Transmitindo dados para o e-mail
	$v_para="professorcarlosmuniz@gmail.com";
	
	//php recebendo os dados do formulario // $_REQUEST[eVITA ERROS ENTRE GET E POST 
	$v_nome=$_REQUEST["nome"];
	$v_email=$_REQUEST["email"];
	$v_assunto=$_REQUEST["assunto"];
	$v_mensagem=$_REQUEST["mensagem"];
	
	//Formatando o corpo do email
		$v_corpo="<strong>Mensagem recebida pelo portal</strong><br><br>";
		$v_corpo.="<strong>Nome:</strong> $v_nome"; //.= Concatena elementos
		$v_corpo.="<br><strong>Email:</strong> $v_email";
		$v_corpo.="<br><strong>Assunto:</strong> $v_assunto";
		$v_corpo.="<br><strong>Mensagem:</strong> $v_mensagem";
	
		$v_header .= "Content-Type: text/html; charset= utf-8\n";
		$v_header.="From: $v_email Reply-to: $v_email\n";
		
		
	//Enviando o email
	mail($v_para,$v_assunto,$v_corpo,$v_header);
	
	header("location:contato.php?msg=enviado");
*/

/*

//isset checa se o botão enviar foi clicado e só vai disparar o email se for verdadeiro
if(isset($_POST['enviar'])){
    $assunto = "Mensagem do Portal Dra. Dilma Olimpio";

    // pegando os dados do form...
    $msg = "Nome: " . $_POST["nome"] . "<br>";
    $msg .= "Email: " . $_POST["email"] . "<br>";
    $msg .= "Assunto: " . $_POST["assunto"] . "<p>";
    $msg .= "Mensagem:<br>" . $_POST["mensagem"];

    // email onde tu vai receber a mensagem
    $destinatario = "professorcarlosmuniz@gmail.com";

    // headers que prepara a mensagem
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $_POST["nome"] . "<" . $_POST["email"] . ">\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

    // envia o email...
    mail($destinatario,$assunto,$msg,$headers);

    // volta para contato.html
    header("Location: contato.html");
}
*/
	

	
	/*
	echo $corpo;
	echo $header;
	*/
	
	
	


?>