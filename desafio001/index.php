<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001 - Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $numero = $_GET["number"] ?? "sem valor";
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;

        echo "<p> O sucessor de <strong>$numero</strong> é $sucessor</p>
              <p> O antecessor de <strong>$numero</strong> é $antecessor</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
</body>

</html>