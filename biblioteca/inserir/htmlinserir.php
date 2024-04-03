<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Livro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
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

        input[type="text"],
        textarea,
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #61a956;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #162714;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #64e943;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Inserir Livro</h1>
        <form action="inserirLivro.php" method="post">
            <label for="nome">Nome do Livro:</label>
            <input type="text" name="nome" id="nome" required>
            <label for="autor">Autor:</label>
            <input type="text" name="autor" id="autor" required>
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" required></textarea>
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor" step="0.01" required>
            <label for="classificacao">Classificação:</label>
            <input type="number" name="classificacao" id="classificacao" min="1" max="5" required>
            <input type="submit" value="Inserir Livro">
        </form>
    </div>
</body>
</html>
