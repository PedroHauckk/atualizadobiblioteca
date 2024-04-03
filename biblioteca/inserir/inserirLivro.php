<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Livro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #e1e1e1; /* Verde */
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .message {
            text-align: center;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .success {
            background-color: #dff0d8; /* Verde claro */
            color: #3c763d; /* Verde escuro */
        }

        .error {
            background-color: #f2dede; /* Vermelho claro */
            color: #a94442; /* Vermelho escuro */
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
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
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Processar o formulário se os dados foram enviados via POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obter os dados do formulário
            $nome = $_POST["nome"];
            $autor = $_POST["autor"];
            $descricao = $_POST["descricao"];
            $valor = $_POST["valor"];
            $classificacao = $_POST["classificacao"];

            // Preparar a consulta SQL para inserir o livro
            $sql = "INSERT INTO Livros (nome, autor, descricao, valor, classificacao) VALUES (?, ?, ?, ?, ?)";

            // Preparar e executar a declaração
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssd", $nome, $autor, $descricao, $valor, $classificacao);
            $stmt->execute();

            // Verificar se a inserção foi bem-sucedida
            if ($stmt->affected_rows > 0) {
                echo '<div class="message success">Livro inserido com sucesso.</div>';
            } else {
                echo '<div class="message error">Erro ao inserir livro: ' . $conn->error . '</div>';
            }

            // Fechar declaração
            $stmt->close();
        }

        // Fechar conexão
        $conn->close();
        ?>
    </div>
</body>
</html>
