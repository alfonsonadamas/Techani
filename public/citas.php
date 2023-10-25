<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css" />
    <title>Citas Médicas</title>
</head>
<body>



<div class="p-8">
        

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
    
        <form method="post" action="guardar_cita.php" class="flex flex-col mx-10" style="margin-top: 100px; margin-left: 250px;">
            <div class="flex space-x-4">
                <div class="w-1/2">
                    <label for="fecha_cita" class="block text-azul font-semibold">Fecha de la cita:</label>
                    <input type="date" name="fecha_cita" required class="border border-azul rounded p-2 w-full">
                </div>
                <div class="w-1/2">
                    <label for="hora_cita" class="block text-azul font-semibold">Hora de la cita:</label>
                    <input type="time" name="hora_cita" required class="border border-azul rounded p-2 w-full">
                </div>
            </div>

            <div class="w-full">
                <label for="tipo_cita" class="block text-azul font-semibold">Tipo de cita:</label>
                <input type="text" name="tipo_cita" required class="border border-azul rounded p-2 w-full">
            </div>


            <div class="w-full">
                <label for="lugar" class="block text-azul font-semibold">Lugar:</label>
                <input type="text" name="lugar" required class="border border-azul rounded p-2 w-full">
            </div>


            <div class="flex space-x-4">
                <div class="w-1/2">
                    <label for="fecha_recordatorio" class="block text-azul font-semibold">Fecha recordatorio:</label>
                    <input type="date" name="fecha_recordatorio" required class="border border-azul rounded p-2 w-full">
                </div>
                <div class="w-1/2">
                    <label for="hora_recordatorio" class="block text-azul font-semibold">Hora recordatorio:</label>
                    <input type="time" name="hora_recordatorio" required class="border border-azul rounded p-2 w-full">
                </div>
            </div>
            

            <div class="w-full">
                <label for="observaciones" class="block text-azul font-semibold">Observaciones:</label>
                <textarea name="observaciones" class="border border-azul rounded p-2 w-full"></textarea>
            </div>

            <button type="submit" class="bg-azul text-white rounded p-2 font-semibold">Guardar Cita</button>
        </form>
    </div>
        
</body>
<script src="js/script.js"></script>
</html>