<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
    //0x = hexadecimal, 0b = binário, 0 = Octal 

        $v = 300;
        var_dump($v);

        $v = 45.2;
        var_dump($v);

        $v = true;
        var_dump($v);

        $v = "Guilherme";
        var_dump($v);

        $v = 3e2;
        var_dump($v);

        //Coerção
        $v = (int) 3e2;
        var_dump($v);

        $v = (int) "3e2";
        var_dump($v);

        $v = (float) "3e2";
        var_dump($v);

    ?>
    <p>
        <?php
            $vet = [5, 3, 7, 2, 8, 1];
            var_dump($vet)
        ?>
    </p>

    <p>
        <?php 
            echo "$vet[0], $vet[1], $vet[2], $vet[3], $vet[4], $vet[5]";
            
        ?>
    </p>
</body>
</html>