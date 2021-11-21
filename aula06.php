<!DOCTYPE html>
<html lang="pt">
    <?php
    $nome = $_POST['nome'];
    $email= $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
        mail('heitorhvp@gmail.com',$assunto,$mensagem, 'From: '.$email);
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<p><label for="">nome:</label><input type="text" name="nome"></p>
<p><label for="">email:</label><input type="text" name="email"></p>
<p><label for="">assunto:</label><input type="text" name="assunto"></p>
<label for=""><textarea name="mensagem" cols="30" rows="10"></textarea></label>
<p><input type="submit" name="enviar"></p>
</form>
</body>
</html>
