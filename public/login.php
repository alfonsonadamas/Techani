<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css" />
    <meta http-equiv="X-Frame-Options" content="DENY">
    <link rel="shortcut icon" href="img/logo blanco.png" type="image/x-icon">
    <title>Techani</title>
</head>

<body class="bg-azul">
    <div class="flex justify-center items-center h-screen w-full">
        <div class="flex flex-col items-center mr-20">
            <img class="mb-5" src="img/Techani blanco con nombre.png" alt="techanilogo" width="250">
            <p class="font-fuentesec text-5xl text-white">Tu salud en tus manos</p>
        </div>
        <div class="flex flex-col justify-center items-center bg-white h-4/6 w-3/12 rounded-lg ml-10">
            <h2 class="font-fuenteTechani mb-8  text-2xl">INICIAR SESION</h2>
            <form action="" class="flex flex-col items-center" id="login">
                <input class="rounded-lg border-solid border-2 border-gray-300 py-2 px-2 mb-5 w-72" type="email"
                    placeholder="Correo Electronico" name="correo">
                <input class="rounded-lg border-solid border-2 border-gray-300 px-2 py-2 mb-5 w-72" type="password"
                    placeholder="Contraseña" name="contrasena">
                <p class="text-red-600 hidden" id="alerta">Correo o contraseña incorrectos</p>
                <p class="mb-5">¿No tienes cuenta? <a class="text-azul font-bold underline"
                        href="registroCorreo.php">Registrate</a>
                </p>
                <button id="login_enviar" class="bg-amarillo px-7 py-1 rounded-lg w-44 disabled:opacity-50">Iniciar
                    Sesion</button>

            </form>
        </div>
    </div>
</body>
<script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="js/jquery.js"></script>

</html>