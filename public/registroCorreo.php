<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css" />
    <link rel="shortcut icon" href="img/logo blanco.png" type="image/x-icon">
    <title>Techani</title>
</head>

<body>
    <h1>Registro de correo y contraseña</h1>
    <form action="" class="flex flex-col w-2/5" id="registroCorreo">
        <input type="text" placeholder="Usuario" id="usuario">
        <ul class="max-w-md space-y-1 -500 list-inside hidden" id="mensajeUsuario">

            <li class="flex items-center">
                <svg class="w-3.5 h-3.5 mr-2 text-green-600  flex-shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" id="caracUsuario">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                Al menos 8 caracteres
            </li>
        </ul>
        <input type="email" placeholder="Correo" id="correo">
        <p class="hidden" id="mensajeCorreo">Correo no valido. <br> Por favor introduzca uno de la forma:
            correo@example.com</p>
        <p class="hidden" id="mensajeCorreoValido">Correo valido</p>
        <input type="password" placeholder="Contraseña" id="contraseña">
        <ul class="max-w-md space-y-1 -500 list-inside hidden" id="mensajeContraseña">
            <p id="errorMsg">Contraseña no valida.</p>
            <li class="flex items-center">
                <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" id="caracteres">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                Al menos 8 caracteres
            </li>
            <li class="flex items-center">
                <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" id="caracEsp">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                Al menos un caracter especial. ej ! @ # ? .
            </li>
            <li class="flex items-center">
                <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" id="mayus">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                Al menos una mayuscula
            </li>
        </ul>


        <input type="password" placeholder="Confirmar Contraseña" id="confContraseña">
        <ul class="list-inside hidden" id="confMsg">
            <li class="flex items-center">
                <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" id="passwordConf">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <p id="passwordMSg">Las contraseñas coinciden</p>
            </li>
        </ul>
        <input type="submit" class="bg-amarillo cursor-pointer disabled:opacity-50 disabled:cursor-default" id="enviar"
            disabled>
    </form>


</body>
<script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="js/jquery.js"></script>

</html>