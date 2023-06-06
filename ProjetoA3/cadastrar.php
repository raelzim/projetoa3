<link rel="icon" type="image/png" href="https://www.shareicon.net/data/128x128/2015/10/03/111567_development_512x512.png"/>
<?php
include('conexao.php');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$insert = "INSERT INTO login (nome, login, senha)
            VALUES ('$nome', '$login', '$senha')";
$query = mysqli_query($conexao, $insert);

echo "Cadastro Realizado com sucesso!"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel= "stylesheet" href= "estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <center>
        Cadastro Realizado com Sucesso <br><br>
        <a href="index.php">Voltar</a>
    </center>
</body>
</html>