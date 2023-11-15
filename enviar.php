<?php

    $nome = addcslashes($_POST['Seu nome']);
    $email = addcslashes($_POST['Seu e-mail']);
    $contato = addcslashes($_POST['Seu celular']);
    $mensagem = addcslashes($_POST['Sua mensagem']);

    $para = "avelarluizz21@gmail.com";
    $assunto = "coleta de dados";

    $corpo = "Nome: ".$nome."\n"."e-mail: ".$email."\n"."contato: ".$contato."\n"."mensagem: ".$mensagem;

    $cabeca = "From: avelarluiz1@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Falha ao enviar")
    }
    

?>