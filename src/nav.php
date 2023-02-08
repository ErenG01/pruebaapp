
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/nav.css">
</head>

<body>

    <nav>
        <P class="logo">LOGO</P>
        <div class="container1">
            <p>Matises: Gestion Administrativa</p>
        </div>

        <div class="containerBox2">
            <img src="../img/IMGusuarios.png" alt="ImgUser">

            <div class="datesuser">

                <p><?php echo $_SESSION['nombre']; ?></p>
                <p><?php echo $_SESSION['rol']; ?></p>

            </div>
            <ul class="menu-desplegable">
                <a href="">
                    <li>perfil</li>
                </a>
                <a href="">
                    <li>configuracion</li>
                </a>
                <a href="../../salir.php">
                    <li>salir</li>
                </a>

            </ul>
        </div>
    </nav>

</body>

</html>