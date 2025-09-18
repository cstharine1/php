<?php 
$numeroA = 1;
$numeroB = 2;
$nome = "Serafina";?>

<?php

function Formulario(){
    $login = $_GET ["login"];
    $senha = $_GET ["senha"];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>

    <span class= "nome-usuario"> <?php echo $nome?> </span>

    <span class= "nome-usuario"> <?php echo $numeroA + $numeroB ?> </span>

    FINGE QUE TA FUNCIONANDO
    <form action="function.php" method="GET">
        <input type="text" name="login"><br>
        <input type="password" name="senha"><br>
        <input type="submit">
    </form>
</body>
</html>

