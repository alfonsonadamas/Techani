<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="build/styles.css" />
    <title>Techani</title>
  </head>
  <body>
    <h1>Registro diario</h1>
    <form action="php/addRegistro.php" method="post">

      <div class="flex flex-col">
        <label for="tipo_insulina">Tipo de Insulina</label>
        <select name="tipo_insulina" id="" class="border-2 border-black">
          <option value="lenta">Lenta</option>
          <option value="rapida">Rapida</option>
        </select>
      </div>

      <div class="flex flex-col">
        <label for="dosis">Dosis en ml</label>
        <input type="number" name="dosis" min="1" max="25" placeholder="1" value="1" class="border-2 border-black">
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

      <div class="flex flex-col" >
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

        <textarea name="" id="especifique" cols="30" rows="10" placeholder="Especifique" class="hidden border-2 border-black resize-none "></textarea>
      </div>

      <div class="flex flex-col">
        <label for="observaciones">Observaciones</label>
        <textarea name="observaciones" id="" cols="30" rows="10"  class="border-2 border-black resize-none"></textarea>
      </div>

      <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer" >
    </form>
  </body>
  <script src="js/script.js"></script>
</html>
