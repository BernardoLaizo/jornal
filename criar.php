<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Cadastro</title>
    </head>
    <body>
        <form method="post">
            <label for="titulo">Titulo: </label>
            <input type="text" name="titulo" required>
            <br>

            <label for="data">Data: </label>
            <input type="date" name="data" required>
            <br>

            <label for="resumo">Resumo: </label>
            <input type="text" name="resumo" required>
            <br>

            <label for="noticia">Noticia: </label>
            <input type="text" name="noticia" required>
            <br>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-danger">
        </form>

        <?php
            if (isset($_POST['enviar'])) {

                include_once('config.php');

                $titulo = $_POST['titulo'];
                $data = $_POST['data'];
                $resumo = $_POST['resumo'];
                $noticia = $_POST['noticia'];

                $inserir = "INSERT INTO noticias(titulo, data, resumo, noticia)
                VALUES ('$titulo','$data','$resumo','$noticia')";

                if ($conexao->query($inserir) === true) {
                    echo "Cadastro efetuado com sucesso!";
                }

                $conexao->close();
                
            }
        ?>
    </body>
</html>