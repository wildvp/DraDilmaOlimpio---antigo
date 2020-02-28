<?php
//isset checa se o botão enviar foi clicado e só vai disparar o email se for verdadeiro
if(isset($_POST['enviar'])){
    $assunto = "Email do portal";

    // pegando os dados do form...
    $msg = "nome: " . $_POST["nome"] . "<br>";
    $msg .= "email: " . $_POST["email"] . "<p>";
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
?>