<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header-footer.css">
</head>
<body>
    <!--HEADER-->
    <?php include 'header.php'?>
    
    <?php
        include 'home.php'
    ?>

    <!--FOOTER-->
    <footer>
        <div class="contfooter form">
            <div class="footerbox">
                <h4>CONTACTO</h4>
                <form action="">
                    <input type="text" name="" id="" placeholder="Escribe tu mensaje...">
                    <input type="submit" value="ENVIAR">
                </form>
            </div>
        </div>
        <div class="contfooter info">
            <div class="footerbox">
                <img class="logo-footer" src="../img/svg/logotipo-white.svg" alt="logotipo-white">
                <ul class="links">
                    <li>INICIO</li>
                    <li>TIENDA</li>
                    <li>NOSOTROS</li>
                    <li>CONTACTO</li>
                </ul>
                <div class="networks">
                    <span>f</span>
                    <span>I</span>
                </div>
                <ul class="contact">
                    <li>000-000-000-00</li>
                    <li>DIRECCIÓN #00-00</li>
                    <li>CORREO@GMAIL.COM</li>
                    <li>BARRANQUILLA COL.</li>
                </ul>
                <img class="qr-code" src="../sources/codigo.png" alt="">
            </div>
        </div>
</footer>
</body>
</html>