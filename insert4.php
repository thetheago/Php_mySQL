<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include "host.php" ?> <!-- arquivo com mysqli_connect -->
</head>
<style>
    *{
        margin: 20;
        padding: 20;
        font-family: sans-serif;
    }
</style>

<body>

    <div>
        <h1 id="titulo">Cadastro</h1>
        <p>Complete suas informações</p>
    </div>

    <form method="POST" action="" name="formul">
        <fieldset>
            <div>
                <Strong><label>Nome</label></Strong>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <Strong><label for="">Email</label></Strong>
                <input type="email" name="email" id="email"> 
            </div>
            <div>
                <Strong><label for="">Telefone</label></Strong>
                <input type="text" name="telefone" id="telefone">
            </div>
            <div>
                <Strong><label for="">Login</label></Strong>
                <input type="text" name="login" id="login">
            </div>
            <div>
                <Strong><label for="">Senha</label></Strong>
                <input type="text" name="senha" id="senha">
            </div>

            <input type="submit" value="Enviar" name="botao">
        </fieldset>
    </form>

    <?php 

        

        if(isset($_POST['botao'])){
            if((!empty($_POST['nome'])) && (!empty($_POST['email'])) && (!empty($_POST['telefone']))
            && (!empty($_POST['login'])) && (!empty($_POST['senha']))){

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $telefone = $_POST['telefone'];
                $login = $_POST['login'];
                $senha = $_POST['senha'];
    
                $sqlInsert = "INSERT INTO `teste1`(`nome`, `email`, `telefone`, `login`, `senha`)
                VALUES ('$nome','$email','$telefone','$login','$senha')";
                
    
                $sqlInsertToBanco = mysqli_query($link, $sqlInsert);
                var_dump($sqlInsertToBanco);
                if(isset($sqlInsertToBanco)){
                    echo "Enviado!";
                }else{
                    echo "Não enviado!";
                }
                
            }else{
                echo "Verifique se todos os campos estão preenchidos!";
            }
        }

    ?>
</body>
</html>