<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include "host.php" ?>
</head>
<body>

    
    
    <form action="" method="POST" style="text-align: center;">
        <h1>Atualizar email</h1>

        <label>
            -Digite seu id- <br>
            <input style="margin-bottom: 7px;" type="text" name="idDigitado"><br>
            <input type="text" value="Digite sua senha" name="senhaDigitada"><br>
            <input type="text" value="Digite seu novo email" name="emailDigitado"><br>
            <input type="submit" name="botaoId">
        </label>
        </form>
        <?php 
        
            if(isset($_POST['botaoId'])){
                if((!empty($_POST['idDigitado'])) && (!empty($_POST['emailDigitado'])) && (!empty($_POST['senhaDigitada']))){
                    $idDigitado = $_POST['idDigitado'];
                    $emailDigitado = $_POST['emailDigitado'];
                    $senhaDigitada = $_POST['senhaDigitada'];
                    $update = "UPDATE `teste1` SET `email` = '$emailDigitado' WHERE id = '$idDigitado' and senha = '$senhaDigitada'";
                    $updateInBanco = mysqli_query($link, $update);
    
                    $select = "SELECT email FROM `teste1` WHERE id = '$idDigitado' and senha = '$senhaDigitada'";
                    $selectFromBanco = mysqli_query($link, $select);
                    $arraySql = mysqli_fetch_assoc($selectFromBanco);
                    $emailDoId = $arraySql['email'];
    
                    //echo "SEU EMAIL ATUAL É: '$emailDoId'";
                
        ?>
                <h1 style="text-align: center;" > Seu novo email é: <?php echo $emailDoId ?></h1>

        <?php 
                }
                else{
                    echo "Digite algo!";
                }
            } 
        ?>

</body>
</html>