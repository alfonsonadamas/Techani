<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="build/styles.css" />
  <title>Techani</title>
</head>

<body class="">
  <div class="flex">
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
                <h1 class="text-left mb-10 mt-10 font-size text-2xl text-black font-sans">Registro Diario</h1>
                <div class="sm:flex sm:flex-row sm:justify-center sm:w-full">
                  <div class="sm:w-1/2 border ml:2 mr:2 mb-5 sm:mr-5 sm:mb-10 shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl">
                    <div class="ml-4 mr-4 flex flex-row sm:flex sm:flex-col">
                      <div class="flex flex-col items-left mr-4 mb-2 w-full sm:w-full">
                        <label for="tipo_insulina" class="block mt-2 mb-1 text-sm font-medium text-gray-900 ">Tipo de Insulina</label>
                        <select data-te-select-init data-te-select-clear-button="true" name="tipo_insulina" id="" class="bg-gray-50 p-1 border border-gray-300 text-gray-900 text-sm rounded-lg block">
                          <option value="lenta" class="">Lenta</option>
                          <option value="rapida">Rapida</option>
                        </select>
                      </div>
                      <div class="flex flex-col w-full sm:w-full mb-2">
                        <label for="dosis" class="block text-sm font-medium resize-none mt-2 mb-1 text-gray-900">Dosis en ml</label>
                        <input type="number" name="dosis" min="1" max="25" placeholder="1" value="1" class="bg-gray-50 border border-gray-300 p-1 text-gray-900 text-sm rounded-lg block">
                      </div>
                    </div>
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                      <label for="tipo_dosis" class="block mb-1 text-sm font-medium text-gray-900">Tipo de dosis</label>
                      <select name="tipo_dosis" id="" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        <option value="alimentos">Para Alimentos</option>
                        <option value="correccion">Corrección</option>
                        <option value="24_horas">24 Horas</option>
                      </select>
                    </div>
                  </div>

                  <div class="sm:w-1/2 border ml:2 mr:2 mb-5 sm:ml-5 sm:mb-10 shadow-lg shadow-gray-500/50 border-slate-400 rounded-xl">
                    <div class="ml-4 mr-4 mb-2 flex flex-col">
                      <label for="tipo_medicion" class="block mt-2 mb-1 text-sm font-medium text-gray-900">Tipo de medicion</label>
                      <select name="tipo_medicion" id="" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        <option value="prep_d">Prepandrial - Desayuno</option>
                        <option value="post_d">Postpandrial - Desayuno</option>
                        <option value="prep_co">Prepandrial - Comida</option>
                        <option value="post_co">Postpandrial - Comida</option>
                        <option value="prep_ce">Prepandrial - Cena</option>
                        <option value="post_ce">Postpandrial - Cena</option>
                        <option value="nocturna">Nocturna</option>
                      </select>
                    </div>
                    <div class="ml-4 mr-4 mb-2 flex flex-col">
                      <label for="vasos_agua" class="block mb-1 text-sm font-medium text-gray-900">Cantidad de agua consumida en vasos de 250ml</label>
                      <input type="number" name="vasos_agua" min="0" max="20" placeholder="0" value="0" class="bg-gray-50 border p-1 border-gray-300 text-gray-900 text-sm rounded-lg block">
                    </div>

                    <div>
                      <div class="flex flex-col">
                        <label for="vasos_agua" class="">Cantidad de agua consumida en vasos de 250ml</label>
                        <input type="number" name="vasos_agua" min="0" max="20" placeholder="0" value="0" class="border-2 border-black">
                      </div>

                      <div class="flex flex-col">
                        <label for="dia_atipico">Dia atipico</label>
                        <select name="dia_atipico" id="dia_atipico" class="border-2 border-black" onchange="ocultar()">
                          <option value="menstruacion">Menstruación</option>
                          <option value="vacuna">Vacuna</option>
                          <option value="enfermedad">Enfermedad</option>
                          <option value="examen">Examen</option>
                          <option value="otro" id="otro">Otro...</option>
                        </select>

                        <input type="text" id="especifique" placeholder="Especifique" class="hidden border-2 border-black resize-none ">

                        <!-- <textarea name=""  cols="30" rows="10" ></textarea> -->
                      </div>

                      <div class="flex flex-col">
                        <label for="observaciones">Observaciones</label>
                        <textarea name="observaciones" id="" cols="30" rows="10" class="border-2 border-black resize-none"></textarea>
                      </div>
                    </div>


                    <div>
                      <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                    </div>



              </form>
</body>
<script src="js/script.js"></script>

</html>