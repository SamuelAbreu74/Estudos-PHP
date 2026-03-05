<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 

    // BASES NUMERICAS
        // 0x = Hexadecimal
        // 0b = Binario
        // 0 = Octal

    // EXEMPLOS DE TIPOS PRIMITIVOS ESCALARES
        // INTEIRO
        // $num = 0x1A;
        // echo "O valor da variavel e: $num";
        // $v = 300;
        // var_dump($v);

        // INTEIRO COM COERÇAO
        // $num = (int)3e2; // 3 x 10(2)  coerçao
        // echo "O valor e $num";
        // var_dump($num);

        // DECIMAL / FLOAT
        // $num = (float) "950";
        // var_dump($num);

        // BOOLEANO 
        // $casado = true; 
        // // var_dump($casado);
        // print "O valor para casado e: $casado";


    // EXEMPLOS DE TIPOS PRIMITIVOS COMPOSTOS

        // ARRAY
        // $vet = [5, 2.5, "Helena", 7, true];
        // var_dump($vet);

        // OBJECT
        // class Pessoa {
        //     private string $nome;
        // }

        // $p = new Pessoa;
        // var_dump($p);

        
    ?>
</body>
</html>