<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="build/styles.css" />
    <title>Citas Médicas</title>
</head>

<body class="bg-fondoGris">

    <div class="p-8">
        <div class="flex w-full h-screen">
            <!-- Barra lateral -->
            <div class="bg-azul w-1/4 mt-6 ml-6 mb-6 rounded-3xl flex flex-col items-center justify-center shadow-xl">
                <img class="mb-10" src="img/Techani blanco con nombre.png" alt="" width="130">
                <div class="">
                    <div
                        class="flex items-center h-10 px-5 transition duration-500 ease-in-out hover:bg-azulFondo  rounded-lg">
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
                        <a class="text-white ml-3" href="">Análisis Clínicos</a>
                    </div>
                    <div
                        class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulFondo rounded-lg">
                        <img src="img/alarma.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Alarmas</a>
                    </div>
                    <div
                        class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out bg-azulFondo rounded-lg">
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
                        <p class="mx-8">Sofi Garcia</p>
                    </div>
                </div>





                <div class="block m-11 ml-28">

                    <h1 class="text-left mt-10 font-size text-2xl text-black font-sans">Citas Medicas</h1>
                    
                    <!-- Modal toggle -->
                    <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Agregar cita
                    </button>

                    <!-- Main modal -->
                    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Crear cita
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">

                                    <form id="form" action="php/addCitas.php" method="post">

                                    <div class="flex space-x-4 mb-5">
                                        <div class="w-1/2 mr-4">
                                            <label for="fecha_cita" class="block font-semibold">Fecha de la cita:</label>
                                            <input type="date" name="fecha_cita" required
                                                class="border border-black rounded p-2 w-full">
                                        </div>
                                        <div class="w-1/2">
                                            <label for="hora_cita" class="block font-semibold">Hora de la cita:</label>
                                            <input type="time" name="hora_cita" required
                                                class="border border-black rounded p-2 w-full">
                                        </div>
                                    </div>

                                    <div class="w-full mb-5">
                                        <label for="tipo_cita" class="block font-semibold">Tipo de cita:</label>
                                        <input type="text" name="tipo_cita" required
                                            class="border border-black rounded p-2 w-full">
                                    </div>

                                    <div class="w-full mb-5">
                                        <label for="lugar" class="block font-semibold">Lugar:</label>
                                        <input type="text" name="lugar" required class="border border-black rounded p-2 w-full">
                                    </div>

                                    <div class="w-full flex flex-col">
                                        <label for="observaciones"
                                            class="block text-sm font-medium mb-1 text-gray-900">Observaciones</label>
                                        <textarea name="observaciones" id="observaciones" cols="30" rows="10"
                                            class="bg-black-50 border border-black text-gray-900 text-sm rounded-md block resize-none"></textarea>
                                        <div id="contador-caracteres">Caracteres restantes: 600</div>
                                    </div>
                                    <script>
                                    const textarea = document.getElementById('observaciones');
                                    const contadorCaracteres = document.getElementById('contador-caracteres');
                                    const maxLength = 600;

                                    textarea.addEventListener('input', () => {
                                        let inputValue = textarea.value;
                                        const lineBreaks = (inputValue.match(/\n/g) || []).length;
                                        const totalCaracteres = inputValue.length + lineBreaks * 50;

                                        if (totalCaracteres > maxLength || totalCaracteres + 50 > maxLength) {
                                            const maxTextLength = maxLength - lineBreaks * 50;
                                            inputValue = inputValue.substring(0, maxTextLength);
                                            textarea.value = inputValue;
                                        }

                                        const caracteresRestantes = maxLength - totalCaracteres;
                                        contadorCaracteres.textContent = `Caracteres restantes: ${
                                                Math.max(0, caracteresRestantes)
                                            }`;
                                    });

                                    textarea.addEventListener('keydown', (event) => {
                                        if (event.key === 'Enter') {
                                            const caracteresRestantes = maxLength - (textarea.value.length + (
                                                textarea.value.match(/\n/g) || []).length * 50);
                                            if (caracteresRestantes <= 50) {
                                                event.preventDefault();
                                            }
                                        }
                                    });
                                    </script>
                                        <!-- Modal footer -->    
                                        <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Guardar Cita
                                        </button>
                                        <button data-modal-hide="default-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                            Cerrar
                                        </button>                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="ml-8 p-4 relative overflow-x-auto p-4 shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl">
                        <?php
                        require_once("php/verCitas.php");
                        require_once("php/eliminarCitas.php");
                        while ($row = $data->fetch_assoc()) {
                        ?>

                        <div class="w-11/12 mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-3">
                                        <div class="md:flex">
                                            <div class="p-8">
                                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Tipo de cita: <?php echo $row["Tipo_Cita"] ?></div>
                                            <p class="block mt-1 text-lg leading-tight font-medium text-black">Fecha: <?php echo $row["Fecha"] ?> Hora: <?php echo $row["Hora"] ?></p>
                                            <p class="mt-2 text-gray-500">Lugar</p>
                                            <label for=""><?php echo $row["Lugar"] ?></label>
                                            <p class="mt-2 text-gray-500">Descripción</p>
                                            <label for=""><?php echo $row["Observaciones"] ?></label><br>
                                            <button class="mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-azul hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                Editar
                                            </button>
                                            <button class="mt-5 ml-3 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                Eliminar
                                            </button>
                                            </div>
                                        </div>
                                    </div><br>

                                    <?php
                        }
                        ?>

                </div>


                </div>
</div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
<script src="js/script.js"></script>

</html>