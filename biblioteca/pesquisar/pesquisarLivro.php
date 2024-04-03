<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Pesquisa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #e1e1e1; /* Verde */
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #4b3e1e; /* Marrom */
        }

        .result {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9; /* Cinza claro */
            border-radius: 4px;
        }

        .result p {
            margin: 5px 0;
        }

        .no-result {
            text-align: center;
            color: #f00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultados da Pesquisa</h1>
        <?php
        // Código PHP aqui
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

        // Processar o formulário
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obter critério e termo de pesquisa do formulário
            $criterio = $_POST["criterio"];
            $termo = $_POST["termo"];

            // Preparar a consulta de acordo com o critério escolhido
            switch ($criterio) {
                case "nome":
                    $sql = "SELECT * FROM Livros WHERE nome LIKE '%$termo%'";
                    break;
                case "id":
                    $sql = "SELECT * FROM Livros WHERE id = $termo";
                    break;
                case "genero":
                    $sql = "SELECT * FROM Livros WHERE genero LIKE '%$termo%'";
                    break;
                case "autor":
                    $sql = "SELECT * FROM Livros WHERE autor LIKE '%$termo%'";
                    break;
                default:
                    echo "Critério de pesquisa inválido.";
                    exit;
            }

            // Executar a consulta
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Exibir os resultados
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="result">';
                    echo '<p><strong>ID:</strong> ' . $row["id"] . '</p>';
                    echo '<p><strong>Nome:</strong> ' . $row["nome"] . '</p>';
                    echo '<p><strong>Autor:</strong> ' . $row["autor"] . '</p>';
                    echo '<p><strong>Descrição:</strong> ' . $row["descricao"] . '</p>';
                    echo '<p><strong>Valor:</strong> ' . $row["valor"] . '</p>';
                    echo '<p><strong>Classificação:</strong> ' . $row["classificacao"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p class="no-result">Nenhum resultado encontrado.</p>';
            }

            // Fechar a conexão
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
