<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="build/styles.css" />
    <title>Techani</title>
</head>

<body class="bg-fondoGris">
    <div class="flex">
        <div class="flex w-full h-screen">
            <!-- Barra lateral -->
            <div class="bg-azul w-1/4 mt-6 ml-6 mb-6 rounded-3xl flex flex-col items-center justify-center shadow-xl">
                <img class="mb-10" src="img/Techani blanco con nombre.png" alt="" width="130">
                <div class="">
                    <div
                        class="flex items-center h-10 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/registro.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Registro Diario</a>
                    </div>

                    <div
                        class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/restaurante.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Registro de Comidas</a>
                    </div>
                    <div
                        class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/comida-sana.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Banco de Alimentos</a>
                    </div>
                    <div
                        class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/rutina-de-ejercicio.png" alt=" " width="30">
                        <a class="text-white ml-3" href="">Registro de Ejercicio</a>
                    </div>
                    <div
                        class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/carpeta.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Registros</a>
                    </div>
                    <div
                        class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/alarma.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Alarmas</a>
                    </div>
                    <div
                        class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/calendario.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Citas Médicas</a>
                    </div>
                </div>
            </div>
            <!-- BARRA SUPERIOR -->
            <div class="w-full">
                <div class="flex justify-end h-16 mt-6 mx-6 border-2 shadow-xl drop-shadow-lg">
                    <div class="flex  items-center">
                        <img class="mr-8" src="img/casa.png" alt="" width="25" height="25">
                        <img src="img/notificacion.png" alt="" width="25" height="25">
                    </div>
                    <div class="flex items-center ml-8">
                        <img class="rounded-full" src="img/perfil.jpg" alt="" width="35">
                        <p class="mx-8">Sofia Garcia</p>
                    </div>
                </div>
                <!-- Aqui editale -->
                <div class="m-11 ml-28">
                    <h1 class="text-left mb-10 mt-10 font-size text-2xl text-black font-sans">Registro de comidas</h1>
                    <div class="ml-10">
                        <div
                            class="bg-white sm:w-4/5 border ml:2 mr:2 mb-5 sm:mr-5 sm:mb-10 shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl">
                            <div class="m-4">
                                <div class="flex flex-col">
                                    <label for="Tipo">Tipo de alimento</label>
                                    <select name="tipo_alimento" id="tipo_alimento"
                                        class="border-2 border-black rounded-md" onchange="ocultar()">
                                        <option value="Fruta">Fruta</option>
                                        <option value="Leguminosa">Leguminosa</option>
                                        <option value="Celeral">Celeral</option>
                                        <option value="Lacteo">Lacteo</option>
                                        <option value="Proteína">Proteína</option>
                                        <option value="Grasa">Grasa</option>
                                        <option value="Azucares">Azucares</option>
                                    </select>


                                </div>

                                <div class="flex flex-col">
                                    <label for="Descripción alimento">Descripción del alimento</label>
                                    <textarea name="Descripción alimento" id="" cols="30" rows="10"
                                        class="border-2 border-black resize-none"></textarea>
                                </div>

                                <label for="Tipo">Unidad de medida</label>
                                <select name="unidad_medida" id="unidad_medida" class="border-2 border-black"
                                    onchange="ocultar()">
                                    <option value="Pieza">Pieza</option>
                                    <option value="Gramos">Gramos</option>
                                    <option value="Caja">Caja</option>
                                    <option value="Vaso">Vaso</option>
                                </select>

                                <div class="flex flex-col mb-2">
                                    <label for="Cantidad porcion"
                                        class="block mb-1 text-sm font-medium text-gray-900">Cantidad por
                                        porción</label>
                                    <input type="number" name="Cantidad porcion" min="1" max="100" placeholder="1"
                                        value="1" class="border-2 border-black p-1.5">
                                </div>
                                <div class="flex flex-col mb-2">
                                    <label for="Carbohidratos porcion"
                                        class="block mb-1 text-sm font-medium text-gray-900">Carbohidratos por
                                        porción</label>
                                    <input type="number" name="Carbohidratos porcion" min="1" max="100" placeholder="1"
                                        value="1" class="border-2 border-black p-1.5">
                                </div>

                                <div>
                                    <input type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                                </div>

</body>
</html>