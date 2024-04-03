<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Livros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #61a956;
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

        select,
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #237210;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #162714;;
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
        <h1>Pesquisar Livros</h1>
        <form action="pesquisarLivro.php" method="post">
            <label for="criterio">Escolha o critério de pesquisa:</label>
            <select name="criterio" id="criterio">
                <option value="nome">Nome</option>
                <option value="id">ID</option>
                <option value="genero">Gênero</option>
                <option value="autor">Autor</option>
            </select>
            <label for="termo">Digite o termo de pesquisa:</label>
            <input type="text" name="termo" id="termo">
            <input type="submit" value="Pesquisar">
        </form>
    </div>
</body>
</html>
