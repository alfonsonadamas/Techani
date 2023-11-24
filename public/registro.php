<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="build/styles.css" />
  <link rel="shortcut icon" href="img/logo blanco.png" type="image/x-icon">
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
                        class="flex items-center h-10 px-5 transition duration-500 ease-in-out bg-azulFondo rounded-lg">
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
                        <a class="text-white ml-3" href="ejercicio.php">Registro de Ejercicio</a>
                    </div>
                    <div
                        class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulFondo rounded-lg">
                        <img src="img/carpeta.png" alt="" width="30">
                        <a class="text-white ml-3" href="analisis.php">Análisis Clínicos</a>
                    </div>
                    <div
                        class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulFondo rounded-lg">
                        <img src="img/calendario.png" alt="" width="30">
                        <a class="text-white ml-3" href="citas.php">Citas Médicas</a>
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
                <div class="flex flex-col mx-6">
                    <div class="w-full">
                        <div class="sm:flex sm:justify-center">
                            <form action="php/addRegistro.php" method="post" class="sm:w-4/5 sm:flex sm:flex-col">
                                <h1 class="text-left mb-10 mt-10 font-size text-2xl text-black font-sans">Registro
                                    Diario</h1>
                                <div class="">
                                    <div
                                        class="flex flex-col justify-center border shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl mb-10 w-1/3  h-20 p-2 bg-white">
                                        <label class="font-medium text-gray-900" for="glucosa">Medidición de
                                            Glucosa</label>
                                        <input
                                            class="bg-gray-50 border border-gray-300 p-1 text-gray-900 text-sm rounded-lg block"
                                            type="number" name="glucosa" id="" value="1">
                                    </div>
                                    <div class="sm:flex sm:flex-row sm:justify-center sm:w-full">
                                        <div
                                            class="sm:w-1/2 border ml:2 mr:2 mb-5 sm:mr-5 sm:mb-10 shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl bg-white">

                                            <div class="ml-4 mr-4 flex flex-row sm:flex sm:flex-col">

                                                <div class="flex flex-col items-left mr-4 mb-2 w-full sm:w-full">
                                                    <label for="tipo_insulina"
                                                        class="block mt-2 mb-1 text-sm font-medium text-gray-900 ">Tipo
                                                        de
                                                        Insulina</label>
                                                    <select data-te-select-init data-te-select-clear-button="true"
                                                        name="tipo_insulina" id=""
                                                        class="bg-gray-50 p-1 border border-gray-300 text-gray-900 text-sm rounded-lg block">
                                                        <option value="lenta" class="">Lenta</option>
                                                        <option value="rapida">Rapida</option>
                                                    </select>
                                                </div>
                                                <div class="flex flex-col w-full sm:w-full mb-2">
                                                    <label for="dosis"
                                                        class="block text-sm font-medium resize-none mt-2 mb-1 text-gray-900">Dosis
                                                        en ml</label>
                                                    <input type="number" name="dosis" min="1" max="25" placeholder="1"
                                                        value="1"
                                                        class="bg-gray-50 border border-gray-300 p-1 text-gray-900 text-sm rounded-lg block">
                                                </div>
                                            </div>
                                            <div class="ml-4 mr-4 flex mb-2 flex-col">
                                                <label for="tipo_dosis"
                                                    class="block mb-1 text-sm font-medium text-gray-900">Tipo de
                                                    dosis</label>
                                                <select name="tipo_dosis" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                                                    <option value="alimentos">Para Alimentos</option>
                                                    <option value="correccion">Corrección</option>
                                                    <option value="24_horas">24 Horas</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div
                                            class="sm:w-1/2 border ml:2 mr:2 mb-5 sm:ml-5 sm:mb-10 shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl bg-white">
                                            <div class="ml-4 mr-4 mb-2 flex flex-col">
                                                <label for="tipo_medicion"
                                                    class="block mt-2 mb-1 text-sm font-medium text-gray-900">Tipo de
                                                    medicion</label>
                                                <select name="tipo_medicion" id=""
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                                                    <option value="Prepandrial - Desayuno">Prepandrial - Desayuno
                                                    </option>
                                                    <option value="Postpandrial - Desayuno">Postpandrial - Desayuno
                                                    </option>
                                                    <option value="Prepandrial - Comida">Prepandrial - Comida</option>
                                                    <option value="Postpandrial - Comida">Postpandrial - Comida</option>
                                                    <option value="Prepandrial - Cena">Prepandrial - Cena</option>
                                                    <option value="Postpandrial - Cena">Postpandrial - Cena</option>
                                                    <option value="Nocturna">Nocturna</option>
                                                </select>
                                            </div>
                                            <div class="ml-4 mr-4 mb-2 flex flex-col">
                                                <label for="vasos_agua"
                                                    class="block mb-1 text-sm font-medium text-gray-900">Cantidad de
                                                    agua
                                                    consumida en vasos de 250ml</label>
                                                <input type="number" name="vasos_agua" min="0" max="20" placeholder="0"
                                                    value="0"
                                                    class="bg-gray-50 border p-1 border-gray-300 text-gray-900 text-sm rounded-lg block">
                                            </div>

                                            <div class="ml-4 mr-4 mb-2 flex flex-col">
                                                <label for="dia_atipico"
                                                    class="block mb-1 text-sm font-medium text-gray-900">Dia
                                                    atipico</label>
                                                <select name="dia_atipico" id="dia_atipico"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block"
                                                    onchange="ocultar()">
                                                    <option value="ninguno">Ninguno</option>
                                                    <option value="menstruacion">Menstruación</option>
                                                    <option value="vacuna">Vacuna</option>
                                                    <option value="enfermedad">Enfermedad</option>
                                                    <option value="examen">Examen</option>
                                                    <option value="otro" id="otro">Otro...</option>
                                                </select>
                                                <input type="text" id="especifique" placeholder="Especifique"
                                                    class="hidden mt-2 bg-gray-50 border border-gray-300 p-1 text-gray-900 text-sm rounded-lg resize-none ">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div
                                    class="w-full ml-2 mr-2 mb-5 p-4 flex flex-col border shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl bg-white">
                                    <label for="observaciones"
                                        class="block text-sm font-medium mb-1 text-gray-900 ">Observaciones</label>
                                    <textarea name="observaciones" id="observaciones" cols="30" rows="10"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm p-1 rounded-lg block resize-none"></textarea>
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
                                <div class="ml-4 mr-4">
                                    <input type="submit"
                                        class="bg-amarillo text-black hover:bg-yellow-300font-bold py-2 px-4 rounded cursor-pointer justify-end">
                                </div>
                            </form>
                        </div>
                        <div class="sm:flex sm:justify-center">

              <div class="sm:w-4/5 sm:flex sm:flex-col">
                <h2 class="text-left mb-5 mt-10 font-size text-2xl text-black font-sans">Registros
                  Anteriores</h2>

                                <div
                                    class="flex border items-center shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl mb-5 p-2 w-1/3">
                                    <label for="fechaFiltro">Filtrar: </label>
                                    <input type="date" name="fechaFiltro" id="FechaFiltro"
                                        class="bg-gray-50 border ml-3 border-gray-300 p-1 text-gray-900 text-sm rounded-lg block">

                                </div>
                                <div class="sm:flex sm:flex-wrap justify-between flex border flex-wrap shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl p-4 mb-10"
                                    id="registros">
                                    <?php
                                            include_once("./php/verRegistros.php");
                                            while ($row = $data->fetch_assoc()) {
                                                
                                            ?>
                                    <div
                                        class="flex w-full items-center justify-around boder border-b border-slate-400 pb-3 mb-3">

                                        <img src="img/pdf.png" alt="" width="70">
                                        <p class="text-center">Fecha: <?php echo $row['Fecha_Formateada'] ?></p>
                                        <div class="flex">

                                            <form action="./php/verPdf.php" method="post" class="mr-2" id="verRegistro">
                                                <button class="bg-green-700 px-5 text-white rounded-lg">Ver</button>
                                                <input type="text" hidden value="<?php echo $row['glucosa'] ?>"
                                                    name="glucosa">
                                                <input type="text" hidden value="<?php echo $row['Tipo_insulina'] ?>"
                                                    name="Tipo_insulina">
                                                <input type="text" hidden value="<?php echo $row['Dosis'] ?>"
                                                    name="Dosis">
                                                <input type="text" hidden value="<?php echo $row['Tipo_dosis'] ?>"
                                                    name="Tipo_dosis">
                                                <input type="text" hidden value="<?php echo $row['Tipo_medicion'] ?>"
                                                    name="Tipo_medicion">
                                                <input type="text" hidden value="<?php echo $row['Cantidad_agua'] ?>"
                                                    name="Cantidad_agua">
                                                <input type="text" hidden value="<?php echo $row['Dia_atipico'] ?>"
                                                    name="Dia_atipico">
                                                <input type="text" hidden value="<?php echo $row['Observaciones'] ?>"
                                                    name="Observaciones">
                                            </form>
                                            <form action="./php/descargarPdf.php" method="post" class="mr-2"
                                                id="descargarRegistro">
                                                <button
                                                    class="bg-yellow-400 px-5 text-white rounded-lg">Descargar</button>
                                                <input type="text" hidden value="<?php echo $row['glucosa'] ?>"
                                                    name="glucosa">
                                                <input type="text" hidden value="<?php echo $row['Tipo_insulina'] ?>"
                                                    name="Tipo_insulina">
                                                <input type="text" hidden value="<?php echo $row['Dosis'] ?>"
                                                    name="Dosis">
                                                <input type="text" hidden value="<?php echo $row['Tipo_dosis'] ?>"
                                                    name="Tipo_dosis">
                                                <input type="text" hidden value="<?php echo $row['Tipo_medicion'] ?>"
                                                    name="Tipo_medicion">
                                                <input type="text" hidden value="<?php echo $row['Cantidad_agua'] ?>"
                                                    name="Cantidad_agua">
                                                <input type="text" hidden value="<?php echo $row['Dia_atipico'] ?>"
                                                    name="Dia_atipico">
                                                <input type="text" hidden value="<?php echo $row['Observaciones'] ?>"
                                                    name="Observaciones">
                                                <input type="text" hidden value="<?php echo $row['Fecha_Formateada'] ?>"
                                                    name="Fecha">
                                            </form>
                                            <form action="./php/endPointEliminarRegistros.php" method="post"
                                                id="eliminarRegistro">
                                                <button class="bg-red-500 px-5 text-white rounded-lg">Eliminar</button>
                                                <input type="text" hidden
                                                    value="<?php echo $row['idRegistro_diario'] ?>" name="id">
                                            </form>



                                        </div>

                                    </div>

                                    <?php
                                            }
                                            ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="js/script.js"></script>

</html>