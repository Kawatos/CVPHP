<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <main>
        <h1>Analisador de Numero Real</h1>
        <?php 
        $num = $_POST["n"] ?? 0;
        echo "<p>Analisando o numero " . number_format($num, 3, "," , ".") . " informado pelo usuario</p>";
        $int = (int) $num;
        $fra = $num - $int;
        echo "<p>A parte inteira do numero e: " . number_format($int, 0, ",", ".") . "</p>";
        echo "A parte fracionaria do numero e: ". number_format($fra, 3, ",", ".");
        ?>
        <button onclick="javascript:window.location.href='index.html'">Voltar</button>
    </main>
</body>
</html>