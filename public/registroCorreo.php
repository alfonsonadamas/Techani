<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css" />
    <link rel="shortcut icon" href="img/logo blanco.png" type="image/x-icon">
    <title>Techani</title>
</head>

<body class="bg-azulFondo">
    <div class="flex flex-col justify-center items-center h-screen bg-cover bg-center">

        <div class="bg-white w-1/4 rounded-lg h-4/5 flex flex-col justify-center items-center">
            <div class="mb-7">
                <img src="img/Techani negro letras.png" alt="" width="100">
            </div>
            <h1 class="font-fuenteTechani text-2xl uppercase text-center mb-6">Crea tu cuenta de <br> TECHANI</h1>
            <form action="" class="flex flex-col w-full px-10 justify-evenly" id="registroCorreo">

                <input class="rounded-lg border-solid border-2 border-gray-300 p-1 mb-2 w-full" type="text"
                    placeholder="Usuario" id="usuario" name="usuario">
                <ul class="max-w-md space-y-1 w-full list-inside hidden" id="mensajeUsuario">

                    <li class="flex items-center" id="msgUsuario">
                        <svg class="w-3.5 h-3.5 mr-2 text-green-600  flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                            id="caracUsuario">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        Al menos 8 caracteres
                    </li>
                </ul>
                <input class="rounded-lg border-solid border-2 border-gray-300 p-1 mb-2  w-full hidden" type="email"
                    placeholder="Correo" id="correo" name="correo">
                <ul class="list-inside hidden" id="correoVerif">
                    <li class="flex items-center">
                        <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" id="correoConf">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <p class=" w-full" id="mensajeCorreo">Correo no valido.Ejemplo: example@example.com</p>
                    </li>
                </ul>

                <p class="hidden" id="mensajeCorreoValido">Correo valido</p>
                <input class="rounded-lg border-solid border-2 hidden border-gray-300 p-1 mb-2 w-full" type="password"
                    placeholder="Contraseña" id="contraseña" name="contraseña">
                <ul class="max-w-md space-y-1 -500 list-inside hidden" id="mensajeContraseña">

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


                <input class="rounded-lg border-solid border-2 hidden border-gray-300 p-1 mb-2 w-full" type="password"
                    placeholder="Confirmar Contraseña" id="confContraseña">
                <ul class="list-inside hidden" id="confMsg">
                    <li class="flex items-center">
                        <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                            id="passwordConf">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <p id="passwordMSg">Las contraseñas no coinciden</p>
                    </li>
                </ul>
                <div class="flex flex-col">
                    <p id="login">Ya tienes una cuenta? <a href="login.php"
                            class="text-blue-500 underline font-bold">Iniciar
                            Sesion</a></p>
                    <div class="w-full flex justify-end mt-7">
                        <button
                            class="bg-amarillo cursor-pointer disabled:opacity-50 disabled:cursor-default w-1/3 rounded-lg py-1"
                            id="siguiente" disabled>Siguiente</button>
                        <button
                            class="bg-amarillo cursor-pointer disabled:opacity-50 disabled:cursor-default w-1/3 rounded-lg py-1 hidden"
                            id="siguienteCont" disabled>Siguiente</button>
                        <button
                            class="bg-amarillo cursor-pointer disabled:opacity-50 disabled:cursor-default w-1/3 rounded-lg py-1 hidden"
                            id="enviar" disabled>Registrar</button>
                    </div>

                </div>
            </form>
        </div>

    </div>


</body>
<script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="js/jquery.js"></script>

</html>