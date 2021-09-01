<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include "host.php" ?> <!-- arquivo com mysqli_connect -->
</head>
<body>
    <h3>Digite seu id:</h3>
    <form name="formula" action="" method="POST">
        <input type="text" name="idDigitado">
        <input type="submit" name="botao" value="Send">
    </form>

    <?php 


    //isset verifica se a variavel foi iniciada, no caso (quando clickei no botão ele foi de false pra true e entrou no if)
    if(isset($_POST['botao'])){

        $idDigitado = $_POST['idDigitado'];
        $sqlSelect = "SELECT * FROM teste1 WHERE id = $idDigitado";
        $sqlSelectFromBanco = mysqli_query($link, $sqlSelect);
        if($sqlSelectFromBanco != false){
            
            $arraySql = mysqli_fetch_assoc($sqlSelectFromBanco);
            if($arraySql != NULL){
                $nome = $arraySql['nome'];
                $email = $arraySql['email'];

                echo nl2br("Seu nome é $nome\n");
                echo "Seu email é: $email";
            }else{
                echo "Id inexistente!";
            }
            

        }else{
            echo "Certifique-se de digitar algo!";
        }

    }else{

    }
    

    ?>

</body>
</html>