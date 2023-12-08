<?php
    include("../public/php/open.php");
    if(!$sesion){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css" />
    <link rel="shortcut icon" href="img/logo blanco.png" type="image/x-icon">
    <style>
    /* Agrega barras de desplazamiento al contenedor */
    .scroll-container {
        max-height: 900px;
        /* Establece la altura máxima del contenedor para que aparezcan las barras de desplazamiento cuando sea necesario */
        overflow-y: auto;
        /* Hace que aparezcan las barras de desplazamiento solo cuando el contenido es más alto que la altura del contenedor */
    }
    </style>
    <title>Techani</title>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CY9Q1W4ZRL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CY9Q1W4ZRL');
</script>


<body class="bg-azulSecundario">
    <div class="flex justify-center items-center h-screen bg-cover bg-center ">

        <div class="shadow-lg bg-white shadow-gray-500/50 w-6/12 rounded-lg h-4/5 flex flex-col justify-center p-10">


            <form action="" class="flex flex-col w-full " id="registroCorreo">
                <h1 class="font-fuenteTechani text-2xl uppercase mb-6 mt-6">Crea tu cuenta de TECHANI</h1>
                <div class="flex justify-between mb-3" id="div_nombre">
                    <input class="rounded-lg border-solid border-2  border-gray-300 p-1 mb-2 w-4/12 mr-2" type="text"
                        placeholder="Nombre(s)" id="nombrePaciente" name="nombre">
                    <input class="rounded-lg border-solid border-2  border-gray-300 p-1 mb-2 w-4/12 mr-2" type="text"
                        placeholder="Apellido Paterno" id="apellidoP_Paciente" name="apellidoP">
                    <input class="rounded-lg border-solid border-2  border-gray-300 p-1 mb-2 w-4/12" type="text"
                        placeholder="Apellido Materno" id="apellidoM_Paciente" name="apellidoM">
                </div>
                <div class="flex justify-between mb-3" id="div_usuario">
                    <div class="w-96">
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
                    </div>
                    <div class="w-5/12">
                        <input class="rounded-lg border-solid border-2  border-gray-300 p-1 mb-2 w-full appearance-none"
                            type="text" placeholder="Número de Celular" id="celular" name="telefono">
                        <ul class="list-inside hidden" id="confCel">
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                                    id="celConf">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <p id="celMSG">Celular no válido</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="flex mb-3">
                    <div class="w-full" id="div_correo">
                        <input class="rounded-lg border-solid border-2 border-gray-300 p-1 mb-2 w-2/3" type="text"
                            placeholder="Correo" id="correo" name="correo">
                        <ul class="list-inside hidden" id="correoVerif">
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                                    id="correoConf">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <p class=" w-full" id="mensajeCorreo">Correo no valido.Ejemplo: example@example.com</p>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="flex w-full mb-3">

                    <div class="w-1/2 mr-3">
                        <input class="rounded-lg border-solid border-2 border-gray-300 p-1 mb-2 w-full" type="password"
                            placeholder="Contraseña" id="contraseña" name="contrasenia">
                        <ul class="max-w-md space-y-1 -500 list-inside hidden" id="mensajeContraseña">

                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                                    id="caracteres">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Al menos 8 caracteres
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                                    id="caracEsp">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Al menos un caracter especial. ej ! @ # ? .
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-2 text-red-600  flex-shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                                    id="mayus">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                Al menos una mayuscula
                            </li>
                        </ul>
                    </div>


                    <div class="w-1/2">
                        <input class="rounded-lg border-solid border-2 border-gray-300 p-1 mb-2 w-full" type="password"
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
                    </div>

                </div>

                <div class="flex flex-col">
                    <p id="error_registro" class="text-red-500"></p>
                    <div class="mb-3">

                        <input type="checkbox" id="terminos">
                        <label for="">Acepto los <a href="" class="text-blue-500 underline font-bold">Terminos y
                                Condiciones</a></label>
                    </div>
                    <p id="login">Ya tienes una cuenta? <a href="login.php"
                            class="text-blue-500 underline font-bold">Iniciar
                            Sesion</a></p>

                    <div class="w-full flex justify-end mt-1">

                        <button
                            class="bg-amarillo cursor-pointer disabled:opacity-50 disabled:cursor-default w-1/3 rounded-lg py-1 "
                            id="enviar" disabled>Registrarse</button>
                    </div>

                </div>
            </form>
        </div>
        <div>
            <img src="img/Techani blanco con nombre.png" class="ml-28" alt="" width="400">
        </div>
    </div>


</body>
<script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="js/jquery.js"></script>

</html>
<?php
    }else{
        header("location: principal.php");
    }
?>