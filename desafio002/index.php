<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002 - Sorteador de Numero</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com Numeros Aleatorios</h1>
        <?php 
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);
        echo "<p>Gerando  um numero aleatorio entre $min e $max <br> O valor gerado foi <strong>$num</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">Gerar numero</button>
    </main>
</body>
</html>