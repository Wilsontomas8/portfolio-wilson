<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'vendor/autoload.php';
        $nome=$_POST["name"];
        $Email=$_POST["email"];
        $telefone=$_POST["phone"];
        $mensagem=$_POST["message"];
        
        $from = new SendGrid\Email(null, "joaofifi70@gmail.com");
        $subject = "Confirmar email";
        $to = new SendGrid\Email(null, "Wilsonquissangatomas@outlook.com");
        $content = new SendGrid\Content("text/html", "Olá Wilson, <br><br>Nova Mensagem De Contacto<br><br> Nome:$nome<br><br> E-mail:$Email<br><br> Telefone:$telefone<br><br> Mensagem=$mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = 'SG.wVZ';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo $response->statusCode();
        echo $response->headers();
        echo $response->body();
        ?>
    </body>
</html>
