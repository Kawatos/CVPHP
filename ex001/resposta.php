<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
            $n = $_REQUEST["num"];
            echo "O antecessor é " . $n - 1 . " E o sucessor é " . $n + 1;
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
        <!-- <button onclick="javascript:history.go(-1)">Voltar</button> -->
        
    </main>
</body>
</html>