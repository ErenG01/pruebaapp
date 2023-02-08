<?php
session_start();

//Condicion que permite que los usuarios inicien primero sesion antes de entrar a la aplicacion

if (empty($_SESSION['active'])) {
    header('location: ../');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/tablero.css">

</head>

<body>
    
        <?php
            include '../nav.php';
        ?> 
    
    <div class="container-general">
    
        <div class="container-1">
            <?php
            include '../index.php';
            ?>
        </div>
        <div class="container-2">
            <h1>TABLERO</h1>
        </div>
    </div>
</body>

</html>