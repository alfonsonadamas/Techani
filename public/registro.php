<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="build/styles.css" />
    <title>Techani</title>
</head>

<body class="flex font-['Noto Sans']">
    <!-- barra_lateral -->
    <div class="w-[300px] h-[1747px] bg-sky-600">
        <div class="p-10 font-semibold">
            <div class="pl-2 flex text-sm mb-5 w-[200px] h-[50px] bg-amber-200 rounded-[10px] items-center justify-start">
                <img class="w-[30px] h-[30px]" src="img/barra_lateral/Diario.png" alt="diario">
                <a class="ml-2" href="registro.php">Registro Diario</a>
            </div>
            <div class="pl-2 flex text-sm mb-5 w-[200px] h-[50px] bg-slate-200 rounded-[10px] items-center justify-start">
                <img class="w-[30px] h-[30px]" src="img/barra_lateral/Alimentos.png" alt="diario">
                <a class="ml-2" href="alimentos.php">Registro de Alimentos</a>
            </div>
            <div class="pl-2 flex text-sm mb-5 w-[200px] h-[50px] bg-slate-200 rounded-[10px] items-center justify-start">
                <img class="w-[30px] h-[30px]" src="img/barra_lateral/Ejercicio.png" alt="diario">
                <a class="ml-2" href="ejercicio.php">Registro de Ejercicio</a>
            </div>
            <div class="pl-2 flex text-sm mb-5 w-[200px] h-[50px] bg-slate-200 rounded-[10px] items-center justify-start">
                <img class="w-[30px] h-[30px]" src="img/barra_lateral/Animo.png" alt="diario">
                <a class="ml-2" href="">Estado de Animo</a>
            </div>
            <div class="pl-2 flex text-sm mb-5 w-[200px] h-[50px] bg-slate-200 rounded-[10px] items-center justify-start">
                <img class="w-[30px] h-[30px]" src="img/barra_lateral/Registros.png" alt="diario">
                <a class="ml-2" class="ml-2" href="">Registros</a>
            </div>
            <div class="pl-2 flex text-sm mb-5 w-[200px] h-[50px] bg-slate-200 rounded-[10px] items-center justify-start">
                <img class="w-[30px] h-[30px]" src="img/barra_lateral/Alarmas.png" alt="diario">
                <a class="ml-2" href="">Alarmas</a>
            </div>
            <div class="pl-2 flex text-sm mb-5 w-[200px] h-[50px] bg-slate-200 rounded-[10px] items-center justify-start">
                <img class="w-[30px] h-[30px]" src="img/barra_lateral/Citas.png" alt="diario">
                <a class="ml-2" href="">Citas Médicas</a>
            </div>
        </div>
    </div>
    <h1 class=" w-[1447px] h-[87px] bg-sky-400 text-white text-2xl font-semibold text-center">Registro diario</h1>
    <form action="php/addRegistro.php" method="post" class="sm:flex sm:flex-row">
        <div>
            <div class="flex flex-col items-center mb-2 ">
                <label for="tipo_insulina" class="block mb-1 text-sm font-medium text-gray-900 ">Tipo de
                    Insulina</label>
                <select name="tipo_insulina" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block p-1.5 w-1/2">
                    <option value="lenta" class="">Lenta</option>
                    <option value="rapida">Rapida</option>
                </select>

            </div>

            <div class="flex flex-col mb-2">
                <label for="dosis" class="block mb-1 text-sm font-medium text-gray-900">Dosis en ml</label>
                <input type="number" name="dosis" min="1" max="25" placeholder="1" value="1" class="border-2 border-black p-1.5">
            </div>

            <div class="flex flex-col">
                <label for="tipo_dosis" class="">Tipo de dosis</label>
                <select name="tipo_dosis" id="" class="border-2 border-black">
                    <option value="alimentos">Para Alimentos</option>
                    <option value="correccion">Corrección</option>
                    <option value="24_horas">24 Horas</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="tipo_medicion" class="">Tipo de medicion</label>
                <select name="tipo_medicion" id="" class="border-2 border-black">
                    <option value="prep_d">Prepandrial - Desayuno</option>
                    <option value="post_d">Postpandrial - Desayuno</option>
                    <option value="prep_co">Prepandrial - Comida</option>
                    <option value="post_co">Postpandrial - Comida</option>
                    <option value="prep_ce">Prepandrial - Cena</option>
                    <option value="post_ce">Postpandrial - Cena</option>
                    <option value="nocturna">Nocturna</option>
                </select>
            </div>
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