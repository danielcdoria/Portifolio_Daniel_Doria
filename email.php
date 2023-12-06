<?php

if(isset($_POST["email"]) && !empty($_POST["email"]));

$nome = addslashes($_POST["nome"]);
$email = addslashes($_POST["email"]);
$telefone = addslashes($_POST["telefone"]);
$mensagem = addslashes($_POST["mesage"]);

$to = "danielcarvalhodoria@gmail.com";
$subjet = "Coleta de dados - Daniel Doria Pages";
$body = "Nome: ".$nome. "\r\n"
        "E-mail: ".$email. "\r\n"
        "Telefone: ".$telefone. "\r\n"
        "Mensagem: ".$mensagem;
$header = "From:daniel222poke@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if($mail($to,$subjet,$body,$header)){
    echo("E-mail enviado!");
}else{
    echo("E-mail edafagaf");
}
     


?>