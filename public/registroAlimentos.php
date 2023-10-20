<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techani</title>
</head>

<body>

    <h1>Registro Alimentos</h1>
    <form action="">
        <div class="flex flex-col">
            <label for="Tipo">Tipo de alimento</label>
            <select name="tipo_alimento" id="tipo_alimento" class="border-2 border-black" onchange="ocultar()">
                <option value="Fruta">Fruta</option>
                <option value="Leguminosa">Leguminosa</option>
                <option value="Celeral">Celeral</option>
                <option value="Lacteo">Lacteo</option>
                <option value="Proteína">Proteína</option>
                <option value="Grasa">Grasa</option>
                <option value="Azucares">Azucares</option>
            </select>


        </div>

        <div class="flex flex-col">
            <label for="Descripción alimento">Descripción del alimento</label>
            <textarea name="Descripción alimento" id="" cols="30" rows="10"
                class="border-2 border-black resize-none"></textarea>
        </div>

        <label for="Tipo">Unidad de medida</label>
        <select name="unidad_medida" id="unidad_medida" class="border-2 border-black" onchange="ocultar()">
            <option value="Pieza">Pieza</option>
            <option value="Gramos">Gramos</option>
            <option value="Caja">Caja</option>
            <option value="Vaso">Vaso</option>
        </select>

        <div class="flex flex-col mb-2">
            <label for="Cantidad porcion" class="block mb-1 text-sm font-medium text-gray-900">Cantidad por
                porción</label>
            <input type="number" name="Cantidad porcion" min="1" max="100" placeholder="1" value="1"
                class="border-2 border-black p-1.5">
        </div>
        <div class="flex flex-col mb-2">
            <label for="Carbohidratos porcion" class="block mb-1 text-sm font-medium text-gray-900">Carbohidratos por
                porción</label>
            <input type="number" name="Carbohidratos porcion" min="1" max="100" placeholder="1" value="1"
                class="border-2 border-black p-1.5">
        </div>

        <div>
            <input type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
        </div>
    </form>

</body>

</html>