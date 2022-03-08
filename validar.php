<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validando com PHP</title>
</head>
<body>
    <form method="post" >
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" class="nome">
        <br>
        <label for="sobrenome">Digite seu sobrenome:</label>
        <input type="text" name="sobrenome" class="sobrenome">
        <br>
        <label for="email">Digite seu email:</label>
        <input type="text" name="email" class="email">
        <br>
        <label for="telefone">Digite seu telefone:</label>
        <input type="text" name="telefone" class="telefone">
        <br>
        <label for="endereco">Digite seu endereço: </label>
        <input name="endereco" type="text" class="endereco">
        <br>
        <input type="submit" name="enviar" value="enviar">
    </form>

    <?php


        if(isset($_POST['enviar'])){
            $nome = strip_tags($_POST['nome']);
            
            $sobrenome = strip_tags($_POST['sobrenome']);
            
            $endereco = $_POST['endereco'];

            //echo "O formulário foi enviado.<br/>";
            //echo "Seu nome é ".$_POST['nome']."<br>";
           // echo "Seu telefone é ".$_POST['telefone']."<br>";

            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false){      
                echo "Email Inválido";
            
            }
            else{
                $email = $_POST['email'];
                $pdo = new PDO('mysql:host=localhost;dbname=validartutorial', 'root', 'root');

                $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?,?,?)");
                $sql->execute(array($nome, $sobrenome, $email, $endereco));

                echo 'Inserido com Sucesso!';
            }
        }
    ?>
</body>
</html>