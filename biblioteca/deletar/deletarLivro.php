<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Livro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        .message {
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            border-radius: 4px;
        }

        .success {
            background-color: #dff0d8;
            color: #3c763d;
        }

        .error {
            background-color: #f2dede;
            color: #a94442;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Resultado da Exclusão do Livro</h1>
        <?php
        function deletarLivro($idLivro)
        {
            // Configurações de conexão com o banco de dados
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "biblioteca";
            $PORT = "7306";

            // Criar conexão
            $conn = new mysqli($servername, $username, $password, $dbname, $PORT);

            // Verificar conexão
            if ($conn->connect_error) {
                return "Falha na conexão: " . $conn->connect_error;
            }

            // Preparar a consulta SQL para deletar o livro
            $sql = "DELETE FROM Livros WHERE id = ?";

            // Preparar e executar a declaração
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $idLivro);
            $stmt->execute();

            // Verificar se a exclusão foi bem-sucedida
            if ($stmt->affected_rows > 0) {
                return "Livro deletado com sucesso.";
            } else {
                return "Erro ao deletar livro: " . $conn->error;
            }

            // Fechar declaração e conexão
            $stmt->close();
            $conn->close();
        }

        // Verificar se o ID do livro foi fornecido via POST
        if (isset($_POST['idLivro'])) {
            $idLivro = $_POST['idLivro'];
            $mensagem = deletarLivro($idLivro);
            if (strpos($mensagem, 'sucesso') !== false) {
                echo '<div class="message success">' . $mensagem . '</div>';
            } else {
                echo '<div class="message error">' . $mensagem . '</div>';
            }
        }
        ?>
    </div>
</body>

</html>