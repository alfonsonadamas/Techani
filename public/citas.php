<?php
    include("../public/php/open.php");
    if($sesion){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css" />
    <title>Citas Médicas</title>
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CY9Q1W4ZRL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
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

                    <button id="btn" class="bg-white p-4 mt-10 ml-10 mb-10 border-2 border-black rounded-md">+ Agregar
                        Cita</button>

                    <div id="divForm" class="ml-10 mr-10">

                        <form id="form" action="php/addCitas.php" method="post" class="flex-col hidden p-4
                 bg-white sm:w-4/5 border ml:2 mr:2 mb-5 sm:mr-5 sm:mb-10 shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl
                 ">

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

                            <button type="submit" class="bg-amarillo text-black p-2 rounded font-semibold">Guardar
                                Cita</button>

                        </form>
                    </div>

                    <p>Texto prueba</p>
                </div>
            </div>

</body>

<script src="js/script.js"></script>

</html>
<?php
    }else{
        header("location: login.php");
    }
?>