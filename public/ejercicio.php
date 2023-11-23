<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css" />
    <title>Techani</title>
</head>

<body>

    <h1>Registro de Ejercicio</h1>
    <div class="flex flex-col mb-2">
        <label for="Medición de glucosa" class="block mb-1 text-sm font-medium text-gray-900">Medición de glucosa antes
            ejercicio</label>
        <input type="number" name="Medición de glucosa" min="1" max="200" placeholder="1" value="1"
            class="border-2 border-black p-1.5">
    </div>

    <div class="flex flex-col">
        <label for="Tipo">Tipo de insulina antes de ejercicio</label>
        <select name="Tipo_de_insulina_antes_ejercicio" id="Tipo_de_insulina_antes_ejercicio"
            class="border-2 border-black" onchange="ocultar()">
            <option value="Acción Rápida">Acción Rápida</option>
            <option value="Acción Rápida Analógica">Acción Rápida Analógica</option>
            <option value="Acción Intermedia">Acción Intermedia</option>
            <option value="Acción Prolongada">Acción Prolongada</option>
            <option value="Premix">Premix</option>
            <option value="Ultra-Rápida">Ultra-Rápida</option>
            <option value="Inhalada">Inhalada</option>
            <option value="otro" id="otro">Otro...</option>
        </select>

        <input type="text" id="especifique" placeholder="Especifique" class="hidden border-2 border-black resize-none ">


    </div>

    <div class="flex flex-col mb-2">
        <label for="dosis" class="block mb-1 text-sm font-medium text-gray-900">Dosis de insulina en unidades</label>
        <input type="number" name="dosis" min="1" max="100" placeholder="1" value="1"
            class="border-2 border-black p-1.5">
    </div>

    <div class="flex flex-col">
        <label for="Tipo">Alimento antes del ejercicio</label>
        <select name="Alimento_antes_del_ejercicio" id="Alimento_antes_del_ejercicio" class="border-2 border-black"
            onchange="ocultar()">
            <option value="Fruta">Fruta</option>
            <option value="Leguminosa">Leguminosa</option>
            <option value="Celeral">Celeral</option>
            <option value="Lacteo">Lacteo</option>
            <option value="Proteína">Proteína</option>
            <option value="Grasa">Grasa</option>
            <option value="Azucares">Azucares</option>
        </select>

    </div>

    <div class="flex flex-col mb-2">
        <label for="Cantidad de carbohidratos antes del ejercicio"
            class="block mb-1 text-sm font-medium text-gray-900">Cantidad de carbohidratos antes del ejercicio</label>
        <input type="number" name="Cantidad de carbohidratos antes del ejercicio" min="1" max="100" placeholder="1"
            value="1" class="border-2 border-black p-1.5">
    </div>

    <div class="flex flex-col mb-2">
        <label for="Tipo de ejercicio" class="block mb-1 text-sm font-medium text-gray-900">Tipo de ejercicio</label>


    </div>
    <div class="flex flex-col">
        <label for="Tipo">Intensidad del ejercicio en frecuencia cardíaca max</label>
        <select name="intencidad_del_ejercicio" id="intencidad_del_ejercicio" class="border-2 border-black"
            onchange="ocultar()">
            <option value="Baja Intensidad">Baja Intensidad: 50-60% de tu FCM</option>
            <option value="Moderada Intensidad">Moderada Intensidad: 60-70% de tu FCM</option>
            <option value="Alta Intensidad">Alta Intensidad: 70-85% de tu FCM</option>
            <option value="Máxima Intensidad">Máxima Intensidad: Más del 85% de tu FCM</option>
        </select>
    </div>
    <div class="flex flex-col">
        <label for="Tipo">Tiempo de ejercicio</label>
        <select name="tiempo_de_ejercicio" id="tiempo_de_ejercicio" class="border-2 border-black" onchange="ocultar()">
            <option value="tiempobajo">Tiempo bajo de 10 a 30 minutos</option>
            <option value="tiempomedio">Tiempo medio de 30 a 60 minutos</option>
            <option value="tiempoalto">Tiempo alto de 60 a 120 minutos</option>

        </select>
    </div>

        <div>
        <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer" >
      </div>


      
      </form>
</body>
<script src="js/script.js"></script>

</html>