<?php

    $nome = addslashes($_POST["nome"]);
    $email = addslashes($_POST["email"]);
    $telefone = addslashes($_POST["telefone"]);
    $mensagem = addslashes($_POST["mensagem"]);

    $para = "danielcarvalhodoria@gmail.com";
    $assunto = "Coletas de dados - Doria Pages";
    
    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From daniel222poke@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("O E-mail foi enviado com sucesso! Aguarde o retorno.");
    }else{
        echo("[ERRO] Houve um erro na tentativa de envio do formulário.Tente novamente.");
    }

?>