<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Login</title>
    </head>
    <body>
    <?php
    session_start();

    include_once('config.php');

    $id = $_GET['id'];

    $resultado = $conexao->execute_query('SELECT * FROM noticias WHERE id =?',[$id]);
    ($dados = mysqli_fetch_assoc($resultado)); 
    echo "<div class = 'div1'>" ;   
    echo "<h1>" . $dados['noticia'] . '<h1>';
    echo "</div>";
    
    $conexao->close();
    ?>
</body>