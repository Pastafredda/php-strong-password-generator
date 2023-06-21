<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Inserisci la lunghezza della password</h1>
    <form>
        <input type="number" name="genera">
        <input type="submit"  value="Genera password">
    </form>

    <?php
        $caratteri = [
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '123456789',
            '&%?!-/_'
        ];

        $psw = $_GET["genera"];

            $password = '';
            for($i = 1; $i <= $psw; $i++){
                $selezione = rand(0,3);
                // echo $selezione . ' ';
                $last = strlen($caratteri[$selezione]) - 1;
                $password .= $caratteri[$selezione][rand(0,$last)];
            }
            echo $password;
    ?>
    
</body>
</html>