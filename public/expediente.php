<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expediente</title>
    <link rel="stylesheet" href="build/styles.css" />
    </head>
<body class="bg-blue-100 font-fuenteTechani text-gray-800">

<div class="max-w-2xl mx-auto p-4 bg-white rounded-lg shadow-lg mt-10">

    <form action="procesar_formulario.php" method="post">
        <h1 class="text-3xl font-bold mb-4">Formulario de Expediente Clínico</h1>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">Fecha de llenado del expediente clínico:</label>
            <input type="date" name="fecha_llenado" required class="w-full px-3 py-2 border rounded-lg">
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">Nombre de la persona que participará en la investigación:</label>
            <input type="text" name="nombre" required class="w-full px-3 py-2 border rounded-lg">
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">En caso de ser menor de edad, nombre del padre o tutor que autoriza la participación en la investigación:</label>
            <input type="text" name="nombre_padre_tutor" class="w-full px-3 py-2 border rounded-lg">
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">Correo electrónico:</label>
            <input type="email" name="correo" required class="w-full px-3 py-2 border rounded-lg">
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">Sexo biológico:</label>
            <input type="radio" name="sexo" value="Masculino" class="mr-2"> Masculino
            <input type="radio" name="sexo" value="Femenino" class="mr-2"> Femenino
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su fecha de nacimiento?</label>
            <input type="date" name="fecha_nacimiento" required class="w-full px-3 py-2 border rounded-lg">
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su lugar de nacimiento?</label>
            <input type="text" name="lugar_nacimiento" required class="w-full px-3 py-2 border rounded-lg">
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su Estado de nacimiento?</label>
            <input type="text" name="estado_nacimiento" required class="w-full px-3 py-2 border rounded-lg">
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿En qué Estado de la República radica actualmente?</label>
            <input type="text" name="estado_residencia" required class="w-full px-3 py-2 border rounded-lg">
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Qué tipo de diabetes tiene?</label>
            <select name="tipo_diabetes" required class="w-full px-3 py-2 border rounded-lg">
                <option value="1">Tipo 1</option>
                <option value="2">Tipo 2</option>
                <option value="ninguna">Ninguna</option>
            </select>
        </div>

        
       
       <div class="mb-4">
            <label class="block text-sm font-semibold">¿Desde qué fecha fue diagnosticado(a)?</label>
            <input type="date" name="fecha_diagnostico" class="w-full px-3 py-2 border rounded-lg">
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Con qué cantidad de glucosa debutó?</label>
            <input type="number" name="glucosa_debut" class="w-full px-3 py-2 border rounded-lg">
        </div>

    
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Estuvo hospitalizado cuando debutó? Si es así, ¿cuál fue la causa?</label>
            <input type="radio" name="hospitalizado" value="Si" class="mr-2"> Sí
            <input type="radio" name="hospitalizado" value="No" class="mr-2"> No
        </div>
        <div class="mb-4">
            Causas: <input type="text" name="causas_hospitalizacion" class="w-full px-3 py-2 border rounded-lg">
        </div>

       
        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuánto tiempo duró la luna de miel de su diabetes tipo 1?</label>
            <input type="text" name="luna_de_miel" class="w-full px-3 py-2 border rounded-lg">
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál era el tratamiento que utilizaba inicialmente para su diabetes tipo 1 y en qué dosis?</label>
            <input type="radio" name="tratamiento_inicial" value="Insulina lenta" class="mr-2"> Insulina lenta
            <div class="ml-8">
                <label>Favor de poner el nombre:</label>
                <input type="text" name="nombre_insulina_lenta" class="w-full px-3 py-2 border rounded-lg">
                <label>Dosis en unidades y frecuencia:</label>
                <input type="text" name="dosis_frecuencia_insulina_lenta" class="w-full px-3 py-2 border rounded-lg">
            </div>
            <input type="radio" name="tratamiento_inicial" value="Insulina rápida" class="mr-2"> Insulina rápida
            <div class="ml-8">
                <label>Favor de poner el nombre:</label>
                <input type="text" name="nombre_insulina_rapida" class="w-full px-3 py-2 border rounded-lg">
                <label>Dosis en unidades y frecuencia:</label>
                <input type="text" name="dosis_frecuencia_insulina_rapida" class="w-full px-3 py-2 border rounded-lg">
            </div>
            <input type="radio" name="tratamiento_inicial" value="Metformina" class="mr-2"> Metformina
            <div class="ml-8">
                <label>Dosis y frecuencia:</label>
                <input type="text" name="dosis_frecuencia_metformina" class="w-full px-3 py-2 border rounded-lg">
            </div>
            <input type="radio" name="tratamiento_inicial" value="Otro" class="mr-2"> Otro
            <div class="ml-8">
                <label>Nombre:</label>
                <input type="text" name="nombre_otro_tratamiento" class="w-full px-3 py-2 border rounded-lg">
                <label>Dosis y frecuencia:</label>
                <input type="text" name="dosis_frecuencia_otro_tratamiento" class="w-full px-3 py-2 border rounded-lg">
            </div>
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Dónde sigue su tratamiento actualmente?</label>
            <input type="radio" name="lugar_tratamiento" value="ISSSTE" class="mr-2"> ISSSTE
            <input type="radio" name="lugar_tratamiento" value="IMSS" class="mr-2"> IMSS
            <input type="radio" name="lugar_tratamiento" value="SSA" class="mr-2"> SSA
            <input type="radio" name="lugar_tratamiento" value="Servicio médico de PEMEX" class="mr-2"> Servicio médico de PEMEX
            <input type="radio" name="lugar_tratamiento" value="Servicio médico de la SEDENA" class="mr-2"> Servicio médico de la SEDENA
            <input type="radio" name="lugar_tratamiento" value="Médico particular" class="mr-2"> Médico particular
            <input type="radio" name="lugar_tratamiento" value="Otro" class="mr-2"> Otro
            <input type="text" name="nombre_otro_lugar_tratamiento" class="w-full px-3 py-2 border rounded-lg">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su última Hemoglobina glicosilada y fecha en que se obtuvo?</label>
            <input type="text" name="hemoglobina_glicosilada" class="w-full px-3 py-2 border rounded-lg">
            <input type="date" name="fecha_hemoglobina_glicosilada" class="w-full px-3 py-2 border rounded-lg mt-2">
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su estado civil?</label>
            <input type="radio" name="estado_civil" value="Soltero(a)" class="mr-2"> Soltero(a)
            <input type="radio" name="estado_civil" value="Casado(a)" class="mr-2"> Casado(a)
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su ocupación?</label>
            <input type="text" name="ocupacion" class="w-full px-3 py-2 border rounded-lg">
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su peso?</label>
            <input type="number" name="peso" class="w-full px-3 py-2 border rounded-lg">
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su talla?</label>
            <input type="number" name="talla" class="w-full px-3 py-2 border rounded-lg">
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su medición de presión arterial el día de hoy?</label>
            <input type="text" name="presion_arterial" class="w-full px-3 py-2 border rounded-lg">
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su medición de glucosa en ayunas el día de hoy?</label>
            <input type="text" name="glucosa_ayunas" class="w-full px-3 py-2 border rounded-lg">
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál fue su última medición de colesterol y de qué fecha es?</label>
            <input type="text" name="colesterol" class="w-full px-3 py-2 border rounded-lg">
            <input type="date" name="fecha_colesterol" class="w-full px-3 py-2 border rounded-lg mt-2">
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su última medición de triglicéridos y de qué fecha es?</label>
            <input type="text" name="trigliceridos" class="w-full px-3 py-2 border rounded-lg">
            <input type="date" name="fecha_trigliceridos" class="w-full px-3 py-2 border rounded-lg mt-2">
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Cuál es su última medición de ácido úrico y de qué fecha es?</label>
            <input type="text" name="acido_urico" class="w-full px-3 py-2 border rounded-lg">
            <input type="date" name="fecha_acido_urico" class="w-full px-3 py-2 border rounded-lg mt-2">
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Tiene usted algún otro padecimiento, adicional a la diabetes tipo 1?</label>
            <input type="radio" name="otro_padecimiento" value="Si" class="mr-2"> Sí
            <input type="radio" name="otro_padecimiento" value="No" class="mr-2"> No
        </div>

        
        <div class="mb-4">
            <label class="block text-sm font-semibold">En caso afirmativo, ¿cuál (es) son?</label>
            <input type="text" name="otros_padecimientos" class="w-full px-3 py-2 border rounded-lg">
        </div>

        <div class="mb-4">
    <label class="block text-sm font-semibold">¿Qué tipo de tratamiento lleva para el control de la diabetes tipo 1 actualmente?</label>

   
    <div class="mb-2">
        <input type="radio" name="tratamiento_diabetes" value="Insulina lenta" class="mr-2"> Insulina lenta
        <div class="ml-6">
            <label class="block text-sm font-semibold">Favor de poner el nombre:</label>
            <input type="text" name="nombre_insulina_lenta" class="w-full px-3 py-2 border rounded-lg">
            <label class="block text-sm font-semibold mt-2">Dosis en unidades y frecuencia:</label>
            <input type="text" name="dosis_insulina_lenta" class="w-full px-3 py-2 border rounded-lg">
        </div>
    </div>

   
    <div class="mb-2">
        <input type="radio" name="tratamiento_diabetes" value="Insulina rápida" class="mr-2"> Insulina rápida
        <div class="ml-6">
            <label class="block text-sm font-semibold">Favor de poner el nombre:</label>
            <input type="text" name="nombre_insulina_rapida" class="w-full px-3 py-2 border rounded-lg">
            <label class="block text-sm font-semibold mt-2">Dosis en unidades y frecuencia:</label>
            <input type="text" name="dosis_insulina_rapida" class="w-full px-3 py-2 border rounded-lg">
        </div>
    </div>

    
    <div class="mb-2">
        <input type="radio" name="tratamiento_diabetes" value="Metformina" class="mr-2"> Metformina
        <div class="ml-6">
            <label class="block text-sm font-semibold">Dosis y frecuencia:</label>
            <input type="text" name="dosis_metformina" class="w-full px-3 py-2 border rounded-lg">
        </div>
    </div>

    
    <div class="mb-2">
        <input type="radio" name="tratamiento_diabetes" value="Otro" class="mr-2"> Otro
        <div class="ml-6">
            <label class="block text-sm font-semibold">Nombre:</label>
            <input type="text" name="nombre_otro_tratamiento" class="w-full px-3 py-2 border rounded-lg">
            <label class="block text-sm font-semibold mt-2">Dosis y frecuencia:</label>
            <input type="text" name="dosis_otro_tratamiento" class="w-full px-3 py-2 border rounded-lg">
        </div>
    </div>
</div>



        <div class="mb-4">
            <label class="block text-sm font-semibold">¿Qué otros medicamentos utiliza para cualquier otro padecimiento?</label>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    Padecimiento1: <input type="text" name="padecimiento1" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div>
                    Tratamiento1: <input type="text" name="tratamiento1" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div>
                    Padecimiento2: <input type="text" name="padecimiento2" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div>
                    Tratamiento2: <input type="text" name="tratamiento2" class="w-full px-3 py-2 border rounded-lg">
                </div>
            </div>
        </div>

        
        <div class="mt-6">
            <input type="submit" value="Enviar" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer">
        </div>
    </form>
</div>

</body>
</html>