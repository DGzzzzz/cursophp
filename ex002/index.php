<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo php</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é " . date("G:i:s") . " horário de brasilia";
    ?>
    <br>
    <?php 
    const PAIS = "Brasil";
    $nome = "Douglas";
    $sobrenome = "Winter";
        echo "Meu nome é $nome $sobrenome" . ". Você mora no " . PAIS; 
    ?>
</body>
</html>