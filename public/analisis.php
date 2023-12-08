<?php
    include("../public/php/open.php");
    if($sesion){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-Frame-Options" content="DENY">

    <link rel="stylesheet" href="build/styles.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
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

<body class="bg-fondoGris">
    <div class="flex">
        <div class="flex w-full h-screen">
            <!-- Barra lateral -->
            <div class="bg-azul w-1/4 mt-6 ml-6 mb-6 rounded-3xl flex flex-col items-center justify-center shadow-xl ">
                <img class="mb-10" src="img/Techani blanco con nombre.png" alt="" width="130">
                <div class="">
                    <div class="flex items-center h-10 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/registro.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Registro Diario</a>
                    </div>

                    <div class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/restaurante.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Registro de Comidas</a>
                    </div>
                    <div class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/comida-sana.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Banco de Alimentos</a>
                    </div>
                    <div class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/rutina-de-ejercicio.png" alt=" " width="30">
                        <a class="text-white ml-3" href="">Registro de Ejercicio</a>
                    </div>
                    <div class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/carpeta.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Análisis Clinicos</a>
                    </div>
                    <div class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                        <img src="img/alarma.png" alt="" width="30">
                        <a class="text-white ml-3" href="">Alarmas</a>
                    </div>
                    <div class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
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
                <div class="ml-8 mt-10">
                    <div class="ml-6 ">
                        <h1 class="font-bold text-2xl">Análisis Clínicos</h1>
                    </div>

                    <div class="ml-6 mt-7">
                        <button class="border border-black p-2 rounded-lg hover:bg-gray-200 " id="agregar"> + Agregar
                            Análisis </button>
                    </div>

                    <div id="form" class="hidden mb-14">
                        <form enctype="multipart/form-data" action="php/addAnalisis.php" method="post" class="border border-gray-400 w-2/4 rounded-lg my-7 ml-20 shadow-xl drop-shadow-lg p-6 flex flex-col items-center">
                            <div class="flex mb-8">
                                <div class="flex flex-col mr-20">
                                    <label for="tipo_estudio" class="font-semibold text-lg mb-2">Tipo de Estudio</label>
                                    <input name="tipo_estudio" type="text" class="border border-black w-56 h-8">
                                </div>

                                <div class="flex flex-col ">
                                    <label for="fecha" class="font-semibold text-lg mb-2">Fecha</label>
                                    <input name="fecha" type="date" class="border border-black w-40 h-8">
                                </div>
                            </div>
                            <div class="flex mb-5">
                                <input name="archivo_pdf" class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="default_size" type="file" accept=".pdf">
                            </div>
                            <div class="w-full ml-2 mr-2 mb-5 p-4 flex flex-col border shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl">
                                <label for="observaciones" class="block font-medium mb-1 text-gray-900 text-lg">Observaciones</label>
                                <textarea name="observaciones" id="observaciones" cols="30" rows="10" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm p-1 rounded-lg block resize-none" oninput="caracteresRestantes()" onkeydown="Enter(event)"></textarea>
                                <div id="contador-caracteres">Caracteres restantes: 300</div>
                            </div>
                            <div class="ml-4 mr-4">
                                <input type="submit" class="bg-amarillo text-black hover:bg-yellow-300font-bold py-2 px-4 cursor-pointer justify-end rounded-lg">
                            </div>
                        </form>
                    </div>
                    <!-- registro de analisis realizados -->
                    <div class="border border-gray-400 w-11/12 rounded-lg shadow-xl drop-shadow-lg  m-7">
                        <?php
                        require_once("php/verAnalisis.php");
                        while ($row = $data->fetch_assoc()) {
                        ?>
                            <div class="flex items-center justify-between my-7 px-12">
                                <img src="img/pdf.png" alt="" width="80">
                                <p><?php echo $row["Archivo pdf"] ?></p>
                                <div class=" flex pr-8">
                                    <a class=" text-white bg-amarillo rounded px-4 py-2 mr-2" href="./archivos/1/<?php echo $row["Archivo pdf"] ?>" target="_blank">
                                        Ver
                                    </a>
                                    <form action="php/borrarAnalisis.php" method="post" class="text-white bg-red-500 rounded px-4 py-2">
                                        <input type="hidden" name="id" value="<?php echo $row["idAnálisis_archivos"] ?>">
                                        <input type="hidden" name="nombre" value="<?php echo $row["Archivo pdf"] ?>">
                                        <input type="submit" value="Eliminar" class="cursor-pointer">
                                    </form>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>



                </div>

</body>
<script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
<script src="js/script.js"></script>

</html>

<?php
    }else{
        header("location: login.php");
    }
?>