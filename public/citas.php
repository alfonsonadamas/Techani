<?php
    include("../public/php/open.php");
    if($sesion){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="build/styles.css" />
    <meta http-equiv="X-Frame-Options" content="DENY">
    <title>Citas Médicas</title>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CY9Q1W4ZRL"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'G-CY9Q1W4ZRL');
</script>

<script>
$(document).ready(function() {

    $('#btn').click(function() {

        $("#forms").show();
        $(this).hide();
    })

});
</script>

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
                    <button data-modal-target="formRegistrarCita" data-modal-toggle="formRegistrarCita"
                        class="mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-azul hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2"
                        type="button">
                        Agregar cita
                    </button>

                    <!-- Main modal -->
                    <div id="formRegistrarCita" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Crear cita
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="formRegistrarCita">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">

                                    <form id="form" action="php/addCitas.php" method="post">

                                        <div class="flex space-x-4 mb-5">
                                            <div class="w-1/2 mr-4">
                                                <label for="fecha_cita" class="block font-semibold">Fecha de la
                                                    cita:</label>
                                                <input type="date" name="Fecha" id="Fecha" required
                                                    class="border border-black rounded p-2 w-full">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="hora_cita" class="block font-semibold">Hora de la
                                                    cita:</label>
                                                <input type="time" name="Hora" id="Hora" required
                                                    class="border border-black rounded p-2 w-full">
                                            </div>
                                        </div>

                                        <div class="w-full mb-5">
                                            <label for="tipo_cita" class="block font-semibold">Tipo de cita:</label>
                                            <input type="text" name="Tipo_Cita" id="Tipo_Cita" required
                                                class="border border-black rounded p-2 w-full">
                                        </div>

                                        <div class="w-full mb-5">
                                            <label for="lugar" class="block font-semibold">Lugar:</label>
                                            <input type="text" name="Lugar" id="Lugar" required
                                                class="border border-black rounded p-2 w-full">
                                        </div>

                                        <div class="w-full flex flex-col">
                                            <label for="Observaciones"
                                                class="block text-sm font-medium mb-1 text-gray-900">Observaciones</label>

                                            <textarea name="ObservacionesAgregar" id="ObservacionesAgregar" cols="30"
                                                rows="10"
                                                class="bg-black-50 border border-black text-gray-900 text-sm rounded-md block resize-none"></textarea>
                                            <div name="Contador_caracteresAgregar" id="Contador_caracteresAgregar">
                                                Caracteres restantes: 600</div>

                                        </div>
                                        <!-- Modal footer -->
                                        <button data-modal-hide="formRegistrarCita" type="submit"
                                            class="bg-amarillo text-black p-2 rounded font-semibold">
                                            Guardar Cita
                                        </button>
                                        <button data-modal-hide="formRegistrarCita" type="button"
                                            class="modal-close bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Cerrar
                                        </button>
                                    </form>

                                    <script>
                                    var textarea = document.getElementById('ObservacionesAgregar');
                                    var contadorCaracteres = document.getElementById('Contador_caracteresAgregar');
                                    var maxLength = 600;

                                    textarea.addEventListener('input', () => {
                                        let inputValue = textarea.value;
                                        var lineBreaks = (inputValue.match(/\n/g) || []).length;
                                        var totalCaracteres = inputValue.length + lineBreaks * 50;
                                        console.log("JJJJ");
                                        if (totalCaracteres > maxLength || totalCaracteres + 50 > maxLength) {
                                            var maxTextLength = maxLength - lineBreaks * 50;
                                            inputValue = inputValue.substring(0, maxTextLength);
                                            textarea.value = inputValue;
                                        }

                                        var caracteresRestantes = maxLength - totalCaracteres;
                                        console.log(caracteresRestantes);
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="ml-8 p-4 relative overflow-x-auto shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl">
                    <h1>Lista de citas</h1>
                    <div id="Container_Citas">

                        <?php
                require_once("php/verCitas.php");

                // Datos de ejemplo
                $tableData = [];
                while ($row = $data->fetch_assoc()) {
                    $tableData[] = $row;
                }

                // Número de elementos por página
                $itemsPerPage = 3;

                // Calcula el número total de páginas
                $totalPages = ceil(count($tableData) / $itemsPerPage);

                // Obtiene el número de página actual desde la consulta GET
                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                // Calcula el índice de inicio y fin para los datos de la página actual
                $startIndex = ($currentPage - 1) * $itemsPerPage;
                $endIndex = $startIndex + $itemsPerPage;
                $currentPageData = array_slice($tableData, $startIndex, $itemsPerPage);

                // Itera sobre los datos de la página actual para mostrar las citas
                foreach ($currentPageData as $row) {
                    // ... tu código HTML para mostrar cada cita
                    echo '
                    <div class="w-11/12 mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-3">               
                        <script>
                            // Función para cambiar la visibilidad del div al hacer clic en el botón
                            function MDetalle(id) {
                                console.log("HOLA MUNDO");
                                var detalleCita = document.getElementById("DetalleCita" + id);
                                if (detalleCita.classList.contains("hidden")) {
                                    detalleCita.classList.remove("hidden");
                                } else {
                                    detalleCita.classList.add("hidden");
                                }
                            }
                        </script>     
                        <div class="md:flex">
                            <div class="p-8">
                                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Tipo de cita: ' . $row["Tipo_Cita"] . '</div>
                                <p class="block mt-1 text-lg leading-tight font-medium text-black">Fecha: ' . $row["Fecha"] . ' Hora: ' . $row["Hora"] . '</p>
                                <div id="DetalleCita' . $row["idCitas"] . '" class="hidden">
                                    <p class="mt-2 text-gray-500">Lugar</p>
                                    <label for="">' . $row["Lugar"] . '</label>
                                    <p class="mt-2 text-gray-500">Descripción</p>
                                    <label for="">' . $row["Observaciones"] . '</label><br>      
                                </div>
                                <button onclick="MDetalle(' . $row["idCitas"] . ')" class="mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-azul hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                    Detalle
                                </button>
                                <button data-modal-target="formEditarCita' . $row["idCitas"] . '" data-modal-toggle="formEditarCita' . $row["idCitas"] . '" class="ml-4 mt-5 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-azul hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2" type="button">
                                    Editar
                                </button>
                                <button onclick="eliminarCita(' . $row["idCitas"] . ')" id="buttonEliminarCita' . $row["idCitas"] . '" name="buttonEliminarCita' . $row["idCitas"] . '" class="mt-5 ml-3 px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                    Eliminar
                                </button>
                                <!-- Aquí incluyes el script JavaScript -->
                                <script>
                                    function eliminarCita(id) {
                                        console.log(id);                                            
                                    }
                                </script>
                            </div>
                        </div>
                    </div><br>
                    <!-- Main modal -->
                    <div id="formEditarCita' . $row["idCitas"] . '" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Editar Cita
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="formEditarCita' . $row["idCitas"] . '">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">

                                <form id="formEditarCita$' . $row["idCitas"] . '" action="php/endPointEditarCitas.php" method="post">


                                <div class="flex space-x-4 mb-5">
                                    <div class="w-1/2 mr-4">
                                        <label for="fecha_cita" class="block font-semibold">Fecha de la cita:</label>
                                        <input value="' . $row["Fecha"] . '" type="date" name="Fecha" id="Fecha" required
                                            class="border border-black rounded p-2 w-full">
                                    </div>
                                    <div class="w-1/2">
                                        <label for="hora_cita" class="block font-semibold">Hora de la cita:</label>
                                        <input value="' . $row["Hora"] . '" type="time" name="Hora" id="Hora" required
                                            class="border border-black rounded p-2 w-full">
                                    </div>
                                </div>
                                
                                <div class="w-full mb-5">
                                    <label for="tipo_cita" class="block font-semibold">Tipo de cita:</label>
                                    <input value="' . $row["Tipo_Cita"] . '" type="text" name="Tipo_Cita" id="Tipo_Cita" required
                                        class="border border-black rounded p-2 w-full">
                                </div>
                                
                                <div class="w-full mb-5">
                                    <label for="lugar" class="block font-semibold">Lugar:</label>
                                    <input value="' . $row["Lugar"] . '" 
                                    type="text" name="Lugar" id="Lugar" required class="border border-black rounded p-2 w-full">
                                </div>
                                
                                <div class="w-full flex flex-col">
                                        <label for="observaciones" class="block text-sm font-medium mb-1 text-gray-900">Observaciones</label>
                                        <textarea name="ObservacionesEditar" id="ObservacionesEditar' . $row["idCitas"] . '" cols="30" rows="10"
                                            class="bg-black-50 border border-black text-gray-900 text-sm rounded-md block resize-none">' . $row["Observaciones"] . '</textarea>
                                        <div id="Contador_caracteresEditar' . $row["idCitas"] . '">Caracteres restantes: 600</div>
                                </div>
                                
                                <div class="hidden" >
                                    <input  id="idCitas" name="idCitas" type="text" value="' . $row["idCitas"] . '">
                                </div>
                                
                                
                                    <!-- Modal footer -->    
                                    <button data-modal-hide="formEditarCita' . $row["idCitas"] . '" type="submit" class="bg-amarillo text-black p-2 rounded font-semibold">
                                        Editar Cita
                                    </button>
                                    <button data-modal-hide="formEditarCita' . $row["idCitas"] . '" type="button" class="modal-close bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Cerrar
                                    </button>                                    
                                </form>
                                <script>
                                function setupContadorCaracteres(idCitas) {
                                    var textarea = document.getElementById("ObservacionesEditar" + idCitas);
                                    var contadorCaracteres = document.getElementById("Contador_caracteresEditar" + idCitas);
                                    var maxLength = 600;
                        
                                    textarea.addEventListener("input", () => {
                                        let inputValue = textarea.value;
                                        var lineBreaks = (inputValue.match(/\n/g) || []).length;
                                        var totalCaracteres = inputValue.length + lineBreaks * 50;
                        
                                        if (totalCaracteres > maxLength || totalCaracteres + 50 > maxLength) {
                                            var maxTextLength = maxLength - lineBreaks * 50;
                                            inputValue = inputValue.substring(0, maxTextLength);
                                            textarea.value = inputValue;
                                        }
                        
                                        var caracteresRestantes = maxLength - totalCaracteres;
                                        contadorCaracteres.textContent = `Caracteres restantes: ${Math.max(0, caracteresRestantes)}`;
                                    });
                        
                                    textarea.addEventListener("keydown", (event) => {
                                        if (event.key === "Enter") {
                                            const caracteresRestantes = maxLength - (textarea.value.length + (
                                                textarea.value.match(/\n/g) || []).length * 50);
                                            if (caracteresRestantes <= 50) {
                                                event.preventDefault();
                                            }
                                        }
                                    });
                                }
                        
                                // Llamas a la función para cada formulario
                                setupContadorCaracteres("' . $row["idCitas"] . '");
                            </script>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }

                // Muestra la paginación
                echo '<div class="pagination-container"><br>';
                echo '<div class="flex items-center justify-center">';
                // Previous Button 
                echo '<a href="?page=' . ($currentPage - 1) . '" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" ' . (($currentPage <= 1) ? 'disabled' : '') . '>
                    Anterior
                </a>';
                
                // Next Button
                echo '<a href="?page=' . ($currentPage + 1) . '" class="flex items-center justify-center px-3 h-8 ms-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" ' . (($currentPage >= $totalPages) ? 'disabled' : '') . '>
                    Siguiente
                </a>';
                echo '</div>';
                ?>
                    </div>
                </div>
            </div>
        </div>

</body>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
<script src="js/script.js"></script>

</html>
<?php
    }else{
        header("location: login.php");
    }
?>