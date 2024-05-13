<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros aleatorios</h1>
        <?php 
            $minimo = 1;
            $maximo = 100;
            $numero_aleatorio = random_int($minimo, $maximo);
            echo "<p>Gerando um numero aleatorio entre $minimo e $maximo... <br>O numero gerado foi $numero_aleatorio.</p>";
        ?>
        <button onclick="javascript:document.location.reload()">Gerar novamente</button>
    </main>
</body>
</html>