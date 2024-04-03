<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Livro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #61a956; /* Fundo verde */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #343a40;
        }

        input[type="number"],
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #28a745; /* Cor verde */
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #218838; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Alterar Livro</h1>
        <form action="alterarLivro.php" method="post">
            <label for="idLivro">ID do Livro:</label>
            <input type="number" name="idLivro" id="idLivro" required>
            <label for="novoNome">Novo Nome:</label>
            <input type="text" name="novoNome" id="novoNome" required>
            <label for="novoAutor">Novo Autor:</label>
            <input type="text" name="novoAutor" id="novoAutor" required>
            <label for="novaDescricao">Nova Descrição:</label>
            <textarea name="novaDescricao" id="novaDescricao" required></textarea>
            <label for="novaClassificacao">Nova Classificação:</label>
            <input type="number" name="novaClassificacao" id="novaClassificacao" required>
            <input type="submit" value="Alterar Livro">
        </form>
    </div>
</body>
</html>
