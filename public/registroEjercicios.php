<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="build/styles.css" />
    <title>Techani</title>
  </head>
  <body class="">
    <h1 class="text-center font-size  mb-4 text-2xl text-white font-sans bg-azult">REGISTRO DE EJERCICIOS</h1>
    <div class="sm:flex sm:justify-center">
    <form action="php/addRegistro.php" method="post" class="sm:w-4/5 sm:flex sm:flex-col">
      <div class="sm:flex sm:flex-row sm:mb-4">
        <label for="" class="p-1 sm:mr-2">Fecha de Ejercicio</label>
        <input type="date" class="bg-gray-50 border border-gray-300 p-1 text-gray-900 text-sm rounded-lg block">
      </div>
      <div>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left border-black text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Actividad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tiempo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Distancia
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Set
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Repeticiones
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Peso
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                    </tr>
                    <tr class="bg-white border-b">
                    </tr>
                    <tr class="bg-white border-b">
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
    </form>
    </div>
    <div>
      <h1 class="text-center font-size mt-4 mb-4 text-2xl text-white font-sans bg-azult">REGISTROS ANTERIORES</h1>
      <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left border-black text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Actividad
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tiempo
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Distancia
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Set
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Repeticiones
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Peso
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b ">
                    </tr>
                    <tr class="bg-white border-b">
                    </tr>
                    <tr class="bg-white border-b">
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </body>
  <script src="js/script.js"></script>
</html>
