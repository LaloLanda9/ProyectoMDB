<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "mdb";

$conexion = mysqli_connect ($servidor, $usuario, $password, $basededatos);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="img/LogoMDB.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilasoo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Login M.D.B</title>
</head>
<body>
    <div id="div1" class="content-div active">
        <div class="logomdb">
            <img src="img/MDB1.png">
        </div>
            <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12804.93089462708!2d-57.19702680956748!3d-32.357887710603435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2suy!4v1717790925632!5m2!1ses!2suy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            <button class="mdb-btn" onclick="showDiv(2)">Sesion</button>
    </div>
    <div id="div2" class="content-div">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a M.D.B</h2>
                <p>Si ya tienes una cuenta inicia sesion aqui</p>
                <button class="sign-up-btn" onclick="showDiv(3)">Iniciar Sesion</button>
                <button class="sign-in-btn" onclick="showDiv(1)">Inicio</button>
            </div>
        </div>
        <form class="formulario" action="" name="mdb" method="POST">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="text" name="contrasena" placeholder="Contraseña" required>  
            <input type="submit" name="registro">
            </form>
        </form>
    </div>
    <div id="div3" class="content-div">
        <form class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="email" placeholder="Correo" required>
            <input type="password" placeholder="Contraseña" required>
            <input type="button" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn" onclick="showDiv(2)">Registrarse</button>
                <button class="sign-in-btn" onclick="showDiv(1)">Inicio</button>
            </div>
        </div>
    </div>
    <script>
        function showDiv(divNumber) {
            // Ocultar todos los divs
            const divs = document.querySelectorAll('.content-div');
            divs.forEach(div => div.classList.remove('active'));

            // Mostrar el div deseado
            const divToShow = document.getElementById('div' + divNumber);
            divToShow.classList.add('active');
        }
        function limpiarFormulario(event) {
        event.preventDefault();
        var formulario = document.getElementById('formulario');
        formulario.reset();
        }
    </script>
</body>

</html>
<?php
if(isset($_POST['registro'])){
   $nombre= $_POST ['nombre'];
   $correo= $_POST ['correo'];
   $contrasena= $_POST ['contrasena'];

   $insertar = "INSERT INTO cuentas VALUES ('$nombre','$correo','$contrasena')";

   $ejecutar = mysqli_query ($conexion,$insertar);

   
   exit();
}
?>
