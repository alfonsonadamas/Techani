<?php

require_once('php/classes.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css" />
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

<body>
    <div class="flex w-full h-screen">
        <!-- Barra lateral -->
        <div class="bg-azul w-1/4 mt-6 ml-6 mb-6 rounded-3xl flex flex-col items-center justify-center shadow-xl">
            <img class="mb-10" src="img/Techani blanco con nombre.png" alt="" width="130">
            <div class="">
                <div class="flex items-center h-10 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                    <img src="img/registro.png" alt="" width="30">
                    <a class="text-white ml-3" href="">Registro Diario</a>
                </div>
                <div class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                    <img src="img/comida-sana.png" alt="" width="30">
                    <a class="text-white ml-3" href="">Registro de Alimentos</a>
                </div>
                <div class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                    <img src="img/rutina-de-ejercicio.png" alt=" " width="30">
                    <a class="text-white ml-3" href="">Registro de Ejercicio</a>
                </div>
                <div class="flex items-center h-10 my-7 px-5 transition duration-500 ease-in-out hover:bg-azulSecundario rounded-lg">
                    <img src="img/carpeta.png" alt="" width="30">
                    <a class="text-white ml-3" href="">Registros</a>
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
            <div class="flex flex-col mx-20">
                <div>
                    <h1 class="text-black text-2xl mt-4 mb-4 font-semibold ">Registro de Alimentos</h1>
                </div>

                <form class="rounded-2xl shadow-lg shadow-black opacity-75 p-10" action="" id="formAlimentos">
                    <?php

                    if ($data->num_rows > 0) {

                    ?>
                        <label for="registro">Fecha y hora de registro:</label>
                        <select name="registro" id="">
                            <?php
                            while ($row = $data->fetch_assoc()) {
                            ?>


                                <option value="<?php echo $row["idRegistro_diario"] ?>"><?php echo $row["Fecha_Formateada"] ?></option>
                            <?php
                            }
                        } else {


                            ?>

                            <p>No hay ningun registro</p>

                        <?php
                        }
                        ?>
                        </select>

                        <label class="text-base font-semibold" for="tipo_comida">Tipo de comida</label>
                        <br>
                        <select class="bg-white border border-black" name="tipo_comida" id="">
                            <option value="desayuno">Desayuno</option>
                            <option value="c_mat">Colacion - Matutina</option>
                            <option value="comida">Comida</option>
                            <option value="c_vesp">Colacion - Vespertina</option>
                            <option value="cena">Cena</option>
                            <option value="al_correc">Alimento de Correccion</option>
                        </select>

                        <table class="mt-10 border-2 border-black" id="tablaPrueba">
                            <thead>
                                <tr class="border-black border">
                                    <th class="border-r border-black w-60 h-16 text-center">
                                        Tipo de Alimento
                                    </th>
                                    <th class="border-r border-black w-60 h-16 text-center">
                                        Alimento
                                    </th>
                                    <th class="w-60 h-16 text-center">
                                        Porción
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <!-- <tr>
                    <td>
                        <select name="" id="tipo_alimento0">
                            <option value="" selected>--Selecciona una opcion--</option>
                            <option value="">Proteina</option>
                            <option value="">Grasa c/ Proteina</option>
                            <option value="">Lacteo</option>
                        </select>
                    </td>
                    <td>
                        <select name="" id="comida" disabled>
                            <option value="" selected>--Selecciona una opcion--</option>

                        </select>
                    </td>
                    <td>
                        <input type="number" id="porcion" disabled>
                    </td>
                </tr> -->


                            </tbody>



                        </table>




                        <div>
                            <button id="agregar">+ | Agregar un nuevo alimento</button>
                        </div>


                        <div class="pt-5">
                            <button class="bg-amarillo rounded-md px-10 py-1">Enviar</button>
                        </div>



                </form>
            </div>

            <div class="flex flex-col mx-20">
                <div>
                    <h1 class="text-black text-2xl mt-10 mb-4 font-semibold ">Registro de Alimentos Anteriores</h1>
                </div>

                <div class="rounded-2xl shadow-lg shadow-black opacity-75 p-10">
                    <table class="border-2 border-black">
                        <thead>
                            <tr class="border-black border">
                                <th class="border-r border-black w-60 h-16 text-center">
                                    Tipo de Alimento
                                </th>
                                <th class="border-r border-black w-60 h-16 text-center">
                                    Alimento
                                </th>
                                <th class="w-60 h-16 text-center">
                                    Porción
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- contenido de la tabla -->
                            <tr class="border-black border">
                                <th class="border-r border-black w-60 h-16 text-center">--</th>
                                <th class="border-r border-black w-60 h-16 text-center">--</th>
                                <th class="border-r border-black w-60 h-16 text-center">--</th>
                            </tr>
                            <tr class="border-black border">
                                <th class="border-r border-black w-60 h-16 text-center">--</th>
                                <th class="border-r border-black w-60 h-16 text-center">--</th>
                                <th class="border-r border-black w-60 h-16 text-center">--</th>
                            </tr>
                            <tr class="border-black border">
                                <th class="border-r border-black w-60 h-16 text-center">--</th>
                                <th class="border-r border-black w-60 h-16 text-center">--</th>
                                <th class="border-r border-black w-60 h-16 text-center">--</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <!-- h-[87px] -->

    </div>
    </div>
</body>
<script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/script.js"></script>

</html>