<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #61a956;
            /* Fundo verde */
        }

        .container {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #000;
            /* Cor do texto preto */
            margin-bottom: 30px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #000;
            /* Cor de fundo preto */
            color: #fff;
            /* Cor do texto branco */
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #333;
            /* Alterado para um tom mais escuro de preto ao passar o mouse */
        }

        /* Estilos para a imagem */
        h1 img {
            max-width: 50%;
            /* Define a largura máxima da imagem como 80% do contêiner */
            display: block;
            /* Permite centralizar a imagem horizontalmente */
            margin: 0 auto;
            /* Centraliza a imagem horizontalmente */
        }
    </style>
</head>

<body>
    <h1>
        <img src="img/OgroLiterario-03-04-2024 (1).png" alt="Nome da Loja">
    </h1>
    <div class="container">
        <h2>Escolha uma opção:</h2>
        <button onclick="window.location.href = 'pesquisar/htmlpesquisar.php';">Pesquisar</button>
        <button onclick="window.location.href = 'inserir/htmlinserir.php';">Inserir</button>
        <button onclick="window.location.href = 'alterar/htmlalterar.php';">Alterar</button>
        <button onclick="window.location.href = 'deletar/htmldeletar.php';">Deletar</button>
    </div>

</body>

</html>