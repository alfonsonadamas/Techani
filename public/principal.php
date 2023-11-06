<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css" />
    <link rel="shortcut icon" href="img/logo blanco.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <title>Techani</title>
</head>

<body>
    <div class="flex w-full h-screen">
        <!-- Barra lateral -->
        <div class="bg-azul w-1/4 mt-6 ml-6 mb-6 rounded-3xl flex flex-col items-center justify-center shadow-xl">
            <img class="mb-10" src="img/Techani blanco con nombre.png" alt="" width="130">
            <div class="">
                <div
                    class="flex items-center h-10 px-5 transition duration-500 ease-in-out hover:bg-azulFondo rounded-lg">
                    <img src="img/registro.png" alt="" width="30">
                    <a class="text-white ml-3" href="registro.php">Registro Diario</a>
                </div>
                <div
                    class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulFondo rounded-lg">
                    <img src="img/comida-sana.png" alt="" width="30">
                    <a class="text-white ml-3" href="alimentos.php">Registro de Alimentos</a>
                </div>
                <div
                    class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulFondo rounded-lg">
                    <img src="img/rutina-de-ejercicio.png" alt=" " width="30">
                    <a class="text-white ml-3" href="">Registro de Ejercicio</a>
                </div>
                <div
                    class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulFondo rounded-lg">
                    <img src="img/carpeta.png" alt="" width="30">
                    <a class="text-white ml-3" href="">Analisis Clinicos</a>
                </div>
                <div
                    class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulFondo rounded-lg">
                    <img src="img/alarma.png" alt="" width="30">
                    <a class="text-white ml-3" href="">Alarmas</a>
                </div>
                <div
                    class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulFondo rounded-lg">
                    <img src="img/calendario.png" alt="" width="30">
                    <a class="text-white ml-3" href="">Citas Médicas</a>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="flex justify-end h-16 mt-6 mx-6 border-2 shadow-xl drop-shadow-lg">
                <div class="flex  items-center">
                    <img class="mr-8" src="img/casa.png" alt="" width="25" height="25">
                    <img src="img/notificacion.png" alt="" width="25" height="25">
                </div>
                <div class="flex items-center ml-8">
                    <img class="rounded-full" src="img/perfil.jpg" data-dropdown-toggle="dropdownInformation" alt=""
                        width="35">
                    <p class="mx-8">Sofia Garcia</p>
                </div>
            </div>

            <div id="panel"
                class="absolute z-10 w-36 h-32 hidden rounded-xl top-24 right-28 border-gray-400 border-2 shadow-xl drop-shadow-lg">

            </div>

            <div class="flex flex-col mx-6">
                <div class="my-10 ml-10">
                    <h1 class="text-3xl font-bold">Bienvenida Sofia</h1>
                </div>
                <div class="flex justify-around mt-9">
                    <img class="shadow-xl" src="img/grafica.png" alt="" width="500">
                    <img class="shadow-xl" src="img/grafica.png" alt="" width="500">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
<script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="js/jquery.js"></script>

</html>