<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expediente</title>
    <link rel="stylesheet" href="build/styles.css" />
    </head>
<body class="bg-blue-100 font-fuenteTechani text-gray-800">

<div class="sm:w-full flex flex-col items-center">
    <div class="sm:w-11/12 border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl">
        <h1 class="text-3xl font-bold sm:m-7">Formulario de Expediente Clínico</h1>
    </div>

    <div class="flex flex-col sm:w-11/12 border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl">
        <div class="grid grid-cols-8 gap-4 justify-center items-center mt-5 ml-5 mr-5">
            <span id="n1" class="w-20 h-20 border-8 border-gray-300 rounded-full bg-blue-500 text-white text-lg justify-self-center text-center justify-center flex items-center">1</span>
            <span id="n2" class="w-20 h-20 border-8 border-gray-300 rounded-full  text-gray-400 text-lg justify-self-center text-center justify-center flex items-center">2</span>
            <span id="n3" class="w-20 h-20 border-8 border-gray-300 rounded-full  text-gray-400 text-lg justify-self-center text-center justify-center flex items-center">3</span>
            <span id="n4" class="w-20 h-20 border-8 border-gray-300 rounded-full  text-gray-400 text-lg justify-self-center text-center justify-center flex items-center">4</span>
            <span id="n5" class="w-20 h-20 border-8 border-gray-300 rounded-full  text-gray-400 text-lg justify-self-center text-center justify-center flex items-center">5</span>
            <span id="n6" class="w-20 h-20 border-8 border-gray-300 rounded-full  text-gray-400 text-lg justify-self-center text-center justify-center flex items-center">6</span>
            <span id="n7" class="w-20 h-20 border-8 border-gray-300 rounded-full  text-gray-400 text-lg justify-self-center text-center justify-center flex items-center">7</span>
            <span id="n8" class="w-20 h-20 border-8 border-gray-300 rounded-full  text-gray-400 text-lg justify-self-center text-center justify-center flex items-center">8</span>
        </div>

        <div class="grid grid-cols-8 gap-4 items-center mt-2 mr-5 ml-5 mb-5">
            <p id="c1" class="text-blue-500 text-center">Indicaciones</p>
            <p id="c2" class="text-center text-gray-400">Datos personales</p>
            <p id="c3" class="text-center text-gray-400">Diabetes Histórico</p>
            <p id="c4" class="text-center text-gray-400">Datos Clínicos</p>
            <p id="c5" class="text-center text-gray-400">Diabetes Actual</p>
            <p id="c6" class="text-center text-gray-400">Otros Padecimientos</p>
            <p id="c7" class="text-center text-gray-400">Antecedentes Heredo-Familiares</p>
            <p id="c8" class="text-center text-gray-400">Antecedentes Neonatales</p>
        </div>
    </div>



        <div id="Indicaciones" class="border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl sm:w-11/12">
            <h2 class="font-fuenteEslogan m-4 size">
                Realiza el cuestionario de manera correcta, cuando termines cada uno de los apartados presiona el boton de guardar <br> Podrás ver tu avance en la barra
            </h2>
        </div>
        
        <div class=" mb-5" id="botonS1">
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar1()">Siguiente</button>
        </div>

        <div id="card1" class="hidden border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl sm:w-11/12">
            <!-- <form action="php/endPointExpedienteDP.php" class="" method="post"> -->
                <div>
                    <h2 class="font-fuenteEslogan m-4 size">DATOS PERSONALES</h2>
                    <div class="mt-4 ml-4 mr-4 flex mb-2 flex-col">
                        <label class="block mb-1 text-sm font-medium text-gray-900">Nombre de la persona que participará en la investigación:</label>
                        <input type="text" name="nombre_paciente" required class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>

                    
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <label class="block text-sm font-semibold">En caso de ser menor de edad, nombre del padre o tutor que autoriza la participación en la investigación:</label>
                        <input type="text" name="nombre_padre_tutor" required class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>

                
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <label class="block text-sm font-semibold">Correo electrónico:</label>
                        <input type="email" name="correo" required class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>

                
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <label class="block text-sm font-semibold">Sexo biológico:</label>
                        <div class="flex flex-row items-center">
                            <input required class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="sexo" value="Masculino" class="mr-2"> Masculino
                            <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="sexo" value="Femenino" class="mr-2"> Femenino
                        </div>
                    </div>

                
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <label class="block text-sm font-semibold">¿Cuál es su fecha de nacimiento?</label>
                        <input type="date" name="fecha_nacimiento" required  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>

                
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <label class="block text-sm font-semibold">¿Cuál es su lugar de nacimiento?</label>
                        <input type="text" name="lugar_nacimiento" required class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>

                    
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <label class="block text-sm font-semibold">¿Cuál es su Estado de nacimiento?</label>
                        <input type="text" name="estado_nacimiento" required class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>
                
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <label class="block text-sm font-semibold">¿En qué Estado de la República radica actualmente?</label>
                        <input type="text" name="estado_residencia" required class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>
                </div>
                <div class="ml-4 mr-4 mb-4 flex flex-row justify-end">
                    <!-- <input type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar2()"> -->
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar2()"> Guardar</button>
                </div>
            <!-- </form> -->
        </div>


       <div id="card2" class="hidden border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl sm:w-11/12">
            <!-- <form action="php/endPointExpedienteDP.php" class="" method="post"> -->
            <h2 class="font-fuenteEslogan m-4 size">DIABETES HISTÓRICO</h2>
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Qué tipo de diabetes tiene?</label>
                    <select name="tipo_diabetes"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        <option value="1">Tipo 1</option>
                            <option value="2">Tipo 2</option>
                            <option value="ninguna">Ninguna</option>
                    </select>
                </div>

                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Desde qué fecha fue diagnosticado(a)?</label>
                    <input type="date" name="fecha_diagnostico" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Con qué cantidad de glucosa debutó?</label>
                    <input type="number" name="glucosa_debut" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Estuvo hospitalizado cuando debutó? Si es así, ¿cuál fue la causa?</label>
                    <div class="flex flex-row items-center">
                        <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="hospitalizado" value="Si" class="mr-2"> Sí
                        <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="hospitalizado" value="No" class="mr-2"> No
                    </div>
                </div>
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    Causas: <input type="text" name="causas_hospitalizacion" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                
                    
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuánto tiempo duró la luna de miel de su diabetes tipo 1?</label>
                    <input type="text" name="luna_de_miel" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál era el tratamiento que utilizaba inicialmente para su diabetes tipo 1 y en qué dosis?</label>
                    <div class="flex flex-col">
                        <div class="flex flex-row items-center">
                            <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="tratamiento_inicial" value="Insulina lenta" class="mr-2"> Insulina lenta
                            <div class="hidden ml-8">
                                <label>Favor de poner el nombre:</label>
                                <input type="text" name="nombre_insulina_lenta" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                                <label>Dosis en unidades y frecuencia:</label>
                                <input type="text" name="dosis_frecuencia_insulina_lenta" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                            </div>
                        </div>
                        <div class="flex flex-row items-center">
                            <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="tratamiento_inicial" value="Insulina rápida" class="mr-2"> Insulina rápida
                            <div class="hidden ml-8">
                                <label>Favor de poner el nombre:</label>
                                <input type="text" name="nombre_insulina_rapida" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                                <label>Dosis en unidades y frecuencia:</label>
                                <input type="text" name="dosis_frecuencia_insulina_rapida" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                            </div>
                        </div>
                        <div class="flex flex-row items-center">
                            <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="tratamiento_inicial" value="Metformina" class="mr-2"> Metformina
                            <div class="hidden ml-8">
                                <label>Favor de poner el nombre:</label>
                                <input type="text" name="nombre_insulina_metmorfina" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                                <label>Dosis y frecuencia:</label>
                                <input type="text" name="dosis_frecuencia_metformina" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                            </div>
                        </div>
                        <div class="flex flex-row items-center">
                            <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="tratamiento_inicial" value="Otro" class="mr-2"> Otro
                            <div class="hidden ml-8">
                                <label>Nombre:</label>
                                <input type="text" name="nombre_otro_tratamiento" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                                <label>Dosis y frecuencia:</label>
                                <input type="text" name="dosis_frecuencia_otro_tratamiento" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-4 mr-4 mb-4 flex flex-row justify-end">
                    <!-- <input type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar2()"> -->
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar3()"> Guardar</button>
                </div>

            <!-- </form> -->
        </div>


        <div id="card3" class="hidden border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl sm:w-11/12">
            <!-- <form action=""> -->
                <h2 class="font-fuenteEslogan m-4 size">DATOS CLÍNICOS</h2>
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Dónde sigue su tratamiento actualmente?</label>
                    <div class="flex flex-row items-center">            
                        <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="lugar_tratamiento" value="ISSSTE"> ISSSTE
                    </div>
                    <div class="flex flex-row items-center">
                        <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="lugar_tratamiento" value="IMSS"> IMSS
                    </div>
                    <div class="flex flex-row items-center">
                        <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="lugar_tratamiento" value="SSA"> SSA
                    </div>
                    <div class="flex flex-row items-center">
                        <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="lugar_tratamiento" value="Servicio médico de PEMEX"> Servicio médico de PEMEX
                    </div>
                    <div class="flex flex-row items-center">
                    <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="lugar_tratamiento" value="Servicio médico de la SEDENA"> Servicio médico de la SEDENA
                    </div>
                    <div class="flex flex-row items-center">
                        <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="lugar_tratamiento" value="Médico particular" class="mr-2"> Médico particular
                    </div>
                    <div class="flex flex-row items-center">
                        <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="lugar_tratamiento" value="Otro" class="mr-2"> Otro
                        <input type="text" name="nombre_otro_lugar_tratamiento" class="ml-4 hidden bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg">
                    </div>
                </div>

                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es su última Hemoglobina glicosilada y fecha en que se obtuvo?</label>
                    <input type="number" max="330" name="hemoglobina_glicosilada" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    <input type="date" name="fecha_hemoglobina_glicosilada" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block mt-2">
                </div>

                
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es su estado civil?</label>
                    <div class="flex flex-row items-center">
                        <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="estado_civil" value="Soltero(a)" class="mr-2"> Soltero(a)
                    </div>
                    <div class="flex flex-row items-center">            
                        <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="estado_civil" value="Casado(a)" class="mr-2"> Casado(a)
                    </div>
                </div>

                
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es su ocupación?</label>
                    <input type="text" name="ocupacion" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

            
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es su peso?</label>
                    <input type="number" name="peso" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

            
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es su talla?</label>
                    <input type="number" name="talla" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es su medición de presión arterial el día de hoy?</label>
                    <p class="block text-sm font-semibold">Ejemplo: 120/80</p>
                    <div class="flex flex-row content-center">
                        <p class="block text-sm font-semibold w-[45%]">Presión Sistólica</p>
                        <span class="block text-sm font-semibold w-[10%] text-center">/</span>
                        <p class="block text-sm font-semibold w-[45%]">Presión Diastólica</p>
                    </div>
                    <div class="flex flex-row">
                        <input type="text" name="presion_arterial_sist" class="w-[45%] bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        <span class="block text-sm font-semibold w-[10%] text-center">/</span>
                        <input type="text" name="presion_arterial_dias" class="w-[45%] bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>
                </div>

                
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es su medición de glucosa en ayunas el día de hoy?</label>
                    <input type="text" name="glucosa_ayunas" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál fue su última medición de colesterol y de qué fecha es?</label>
                    <input type="text" name="colesterol" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    <input type="date" name="fecha_colesterol" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block mt-2">
                </div>

                
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es su última medición de triglicéridos y de qué fecha es?</label>
                    <input type="text" name="trigliceridos" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    <input type="date" name="fecha_trigliceridos" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block mt-2">
                </div>

                
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es su última medición de ácido úrico y de qué fecha es?</label>
                    <input type="text" name="acido_urico" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    <input type="date" name="fecha_acido_urico" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block mt-2">
                </div>

            
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Tiene usted algún otro padecimiento, adicional a la diabetes tipo 1?</label>
                    <div class="flex flex-row items-center">
                        <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="otro_padecimiento" value="Si" class="mr-2"> Sí
                        <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="otro_padecimiento" value="No" class="mr-2"> No
                    </div>
                </div>

                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">En caso afirmativo, ¿cuál (es) son?</label>
                    <input type="text" name="otros_padecimientos" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>
                <div class="ml-4 mr-4 mb-4 flex flex-row justify-end">
                    <!-- <input type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar2()"> -->
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar4()"> Guardar</button>
                </div>
            <!-- </form> -->
        </div>


        
        <div id="card4" class="hidden border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl sm:w-11/12">
            <!-- <form action=""> -->
                <h2 class="font-fuenteEslogan m-4 size">DIABETES ACTUAL</h2>
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Qué tipo de tratamiento lleva para el control de la diabetes tipo 1 actualmente?</label>
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <div class="flex flex-row items-center">
                            <input type="radio" name="tratamiento_diabetes" value="Insulina lenta" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="tratamiento_diabetes">Insulina Lenta</label>
                        </div>
                        <div class="ml-6 flex flex-col hidden">
                            <label class="block text-sm font-semibold">Favor de poner el nombre:</label>
                            <input type="text" name="nombre_lenta_ac" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                            <label class="block text-sm font-semibold mt-2">Dosis en unidades y frecuencia:</label>
                            <input type="text" name="dosis_lenta_ac" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        </div>
                    </div>

    
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <div class="flex flex-row items-center">
                            <input type="radio" name="tratamiento_diabetes" value="Insulina rápida" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for=""> Insulina rápida</label>
                        </div>
                        <div class="hidden ml-6 flex flex-col">
                            <label class="block text-sm font-semibold">Favor de poner el nombre:</label>
                            <input type="text" name="nombre_rapida_ac" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                            <label class="block text-sm font-semibold mt-2">Dosis en unidades y frecuencia:</label>
                            <input type="text" name="dosis_rapida_ac" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        </div>
                    </div>

                    
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <div class="flex flex-row items-center">
                            <input type="radio" name="tratamiento_diabetes" value="Metformina" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="">Metformina</label>
                        </div>
                        <div class="hidden ml-6 flex flex-col">
                            <label class="block text-sm font-semibold">Favor de poner el nombre:</label>
                            <input type="text" name="nombre_metmorfina_ac" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                            <label class="block text-sm font-semibold">Dosis y frecuencia:</label>
                            <input type="text" name="dosis_metformina" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        </div>
                    </div>

                
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <div class="flex flex-row items-center">
                            <input type="radio" name="tratamiento_diabetes" value="Otro" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="">Otro</label>
                        </div>
                        <div class="hidden ml-6 flex flex-col">
                            <label class="block text-sm font-semibold">Nombre:</label>
                            <input type="text" name="nombre_otro_ac" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                            <label class="block text-sm font-semibold mt-2">Dosis y frecuencia:</label>
                            <input type="text" name="dosis_otro_ac" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        </div>
                    </div>
                </div>



                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Qué otros medicamentos utiliza para cualquier otro padecimiento?</label>
                    <div class="sm:grid sm:gap-4 sm:grid-cols-2 flex flex-col">
                        <div class="flex flex-col">
                            <label for=""> Padecimiento 1:</label>
                            <input type="text" name="padecimiento1" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        </div>
                        <div class="flex flex-col">
                            <label for="">Tratamiento 1:</label>
                            <input type="text" name="tratamiento1" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        </div>
                        <div class="flex flex-col">
                            <label for="">Padecimiento 2:</label>
                            <input type="text" name="padecimiento2" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        </div>
                        <div class="flex flex-col">
                            <label for="">Tratamiento 2:</label>
                            <input type="text" name="tratamiento2" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        </div>
                    </div>
                </div>

                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿En qué etapa de crecimiento se encuentra actualmente?</label>
        
                    <div class="mb-2">
                        <input type="radio" name="etapa_crecimiento" value="Primera Infancia (0 a 5 años)" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Primera Infancia (0 a 5 años)
                    </div>


                    <div class="mb-2">
                        <input type="radio" name="etapa_crecimiento" value="Infancia (6 a 11 años)" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Infancia (6 a 11 años)
                    </div>


                    <div class="mb-2">
                        <input type="radio" name="etapa_crecimiento" value="Pubertad o Adolescencia (12 a 18 años)" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Pubertad o Adolescencia (12 a 18 años)
                    </div>


                    <div class="mb-2">
                        <input type="radio" name="etapa_crecimiento" value="Juventud (18 a 26 años)" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Juventud (18 a 26 años)
                    </div>


                    <div class="mb-2">
                        <input type="radio" name="etapa_crecimiento" value="Adultez (27 a 59 años)" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Adultez (27 a 59 años)
                    </div>


                    <div class="mb-2">
                        <input type="radio" name="etapa_crecimiento" value="Adulto Mayor (60 y más)" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Adulto Mayor (60 y más)
                    </div>

                </div>

                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Tiene alguna observación en los pies, en este momento?</label>
                    <div class="flex flex-col sm:flex-row">
                        <div class="sm:w-1/2">
                        <label class="block text-sm font-semibold">Pie izquierdo</label>
                            <div class="mb-2">
                                <input type="radio" name="obs-izquierdo" value="Resequedad" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Resequedad
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-izquierdo" value="Uñas encarnadas" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Uñas encarnadas
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-izquierdo" value="Callos" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Callos
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-izquierdo" value="Ampollas" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ampollas
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-izquierdo" value="Inflamación" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Inflamación
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-izquierdo" value="Grietas" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Grietas
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-izquierdo" value="Heridas" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Heridas
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-izquierdo" value="Úlseras" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Úlseras
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-izquierdo" value="Pérdida de sensibilidad" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Pérdida de sensibilidad
                            </div>

                        </div>
                        <div class="sm:w-1/2">
                        <label class="block text-sm font-semibold">Pie derecho</label>
                        <div class="mb-2">
                                <input type="radio" name="obs-derecho" value="Resequedad" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Resequedad
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-derecho" value="Uñas encarnadas" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Uñas encarnadas
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-derecho" value="Callos" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Callos
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-derecho" value="Ampollas" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Ampollas
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-derecho" value="Inflamación" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Inflamación
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-derecho" value="Grietas" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Grietas
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-derecho" value="Heridas" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Heridas
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-derecho" value="Úlseras" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Úlseras
                            </div>

                            <div class="mb-2">
                                <input type="radio" name="obs-derecho" value="Pérdida de sensibilidad" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Pérdida de sensibilidad
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <div class="">
                        <label class="block text-sm font-semibold">¿Le han realizado algún examen de neuropatía o pérdida de sensibilidad en sus pies? </label>
                        <input type="radio" name="examen-neu-sensibilidad" value="Si" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> Sí
                        <input type="radio" name="examen-neu-sensibilidad" value="No" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> No
                    </div>
                    <div class="hidden flex flex-col">
                        <label for="" class="block text-sm font-semibold">Causas:</label>
                        <input type="text" name="causas_pies" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>
                </div>

                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es la meta de glucosa inferior establecida por su médico tratante?</label>
                    <input type="text" name="meta_I_glucosa" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cuál es la meta de glucosa superior establecida por su médico tratante?</label>
                    <input type="text" name="meta_S_glucosa" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Cómo lleva el control de alimentos?</label>
                    <select name="tipo_diabetes"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                        <option disabled selected value>--Seleccione una opción--</option>
                        <option value="Por raciones, establecidas por su médico">Por raciones, establecidas por su médico</option>
                        <option value="Por cuenta de carbohidratos">Por cuenta de carbohidratos</option>
                    </select>
                </div>
                
                <div>
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <label class="block text-sm font-semibold">¿Realiza ejercicio?</label>
                        <div class="flex flex-row items-center">
                            <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="ejercicio" value="Si" class="mr-2"> Sí
                            <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="ejercicio" value="No" class="mr-2"> No
                        </div>
                        <div class="hidden flex flex-col">
                            <label class="block text-sm font-semibold">Tipo de ejercicio:</label>
                            <input type="text" name="tipo_ejercicio" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                            <label class="block text-sm font-semibold">Duración en horas:</label>
                            <input type="text" name="duracion_ejercicio" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                            <label class="block text-sm font-semibold">Frecuencia:</label>
                            <select name="tipo_diabetes"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                                <option disabled selected value>--Seleccione una opción--</option>
                                <option value="Diario">Diario</option>
                                <option value="Tres días por semana">Tres días por semana</option>
                                <option value="Dos días por semana">Dos días por semana</option>
                            </select>
                            <label class="block text-sm font-semibold">Intensidad:</label>
                            <select name="tipo_diabetes"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                                <option disabled selected value>--Seleccione una opción--</option>
                                <option value="Intenso">Intenso</option>
                                <option value="Regular">Regular</option>
                                <option value="Bajo">Bajo</option>
                            </select>
                        </div>


                    </div>
                </div>

                <div>
                    <div class="ml-4 mr-4 flex mb-2 flex-col">
                        <label class="block text-sm font-semibold">Por lo regular, ¿cuánta agua consume al día en litros?</label>
                        <input type="text" name="litros_agua" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>
                </div>

                <div class="ml-4 mr-4 mb-4 flex flex-row justify-end">
                        <!-- <input type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar2()"> -->
                        <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar5()"> Guardar</button>
                </div>
            <!-- </form> -->
        </div>


        <div id="card5" class="hidden border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl sm:w-11/12">
            <h2 class="font-fuenteEslogan m-4 size">OTROS PADECIMIENTOS</h2>
            <div>
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Qué hace cuando tiene hiperglicemia?</label>
                    <input type="text" name="hiperglicemia" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>
            </div>

            <div>
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Qué hace cuando tiene hipoglicemia?</label>
                    <input type="text" name="hipoglicemia" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>
            </div>

            <div class="ml-4 mr-4 flex mb-2 flex-col">
                <label class="block text-sm font-semibold">¿Ha tenido o tiene algún trastorno?</label>
                <div class="flex flex-row items-center">            
                    <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="transtorno" value="Ansiedad"> Ansiedad
                </div>
                <div class="flex flex-row items-center">
                    <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="transtorno" value="Depresión"> Depresión
                </div>
                <div class="flex flex-row items-center">
                    <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="transtorno" value="TDAH"> TDAH
                </div>
                <div class="flex flex-row items-center">
                    <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="transtorno" value="Síndrome de Asperger"> Síndrome de Asperger
                </div>
                <div class="flex flex-row items-center">
                    <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="transtorno" value="Síndrome de espectro autista"> Síndrome de espectro autista
                </div>
                <div class="flex flex-row items-center">
                    <input type="radio" class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" name="transtorno" value="Otro" class="mr-2"> Otro
                </div>
                <div class="flex flex-col hidden">
                    <label class="ml-4 block text-sm font-semibold">Especifíque</label>
                    <input type="text" name="transtorno_otro" class="ml-4 bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg">
                </div>
            </div>

            <div>
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Sigue algún tratamiento para este trastorno?</label>
                    <div class="flex flex-row items-center">
                        <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="tratamiento_transtorno" value="Si" class="mr-2"> Sí
                        <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="tratamiento_transtorno" value="No" class="mr-2"> No
                    </div>
                    <div class="hidden flex flex-col">
                        <label class="block text-sm font-semibold"> ¿Cuál?</label>
                        <input type="text" name="tipo_tratamiento" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>
                </div>
            </div>

            <div>
                <div class="ml-4 mr-4 flex mb-2 flex-col">
                    <label class="block text-sm font-semibold">¿Consume alcohol?</label>
                    <div class="flex flex-row items-center">
                        <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="consumo_alcohol" value="Si" class="mr-2"> Sí
                        <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="consumo_alcohol" value="No" class="mr-2"> No
                    </div>
                    <div class="hidden flex flex-col">
                        <label class="block text-sm font-semibold">¿Cuál?</label>
                        <input type="text" name="tipo_alcohol" class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>
                </div>
            </div>

            <div>
                <div class="ml-4 mr-4 flex flex-col">
                    <label class="block text-sm font-semibold">¿Consume algún estupefaciente?</label>
                    <div class="flex flex-row items-center mb-4">
                        <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="consumo_estupefaciente" value="Si" class="mr-2"> Sí
                        <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="consumo_estupefaciente" value="No" class="mr-2"> No
                    </div>
                    <div class="hidden flex flex-col">
                        <label class="block text-sm font-semibold">¿Cuál?</label>
                        <input type="text" name="tipo_estupefaciente" class="bg-gray-50 border mb-4 border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                    </div>
                </div>
            </div>

            <div class="ml-4 mr-4 mb-4 flex flex-row justify-end">
                        <!-- <input type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar2()"> -->
                        <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar6()"> Guardar</button>
            </div>
        </div>


        <div id="card6" class="hidden border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl sm:w-11/12">
            <h2 class="font-fuenteEslogan m-4 size">ANTECEDENTES HEREDO-FAMILIARES</h2>
            <div class="ml-4 mr-4 flex flex-col">
                <label class="block text-sm font-semibold">¿Sus padres o abuelos padecen o padecieron?</label>
                <label class="block text-sm font-semibold">Diabetes tipo 1</label>
                <div class="flex flex-row items-center">
                    <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="heredo-diabetes" value="Si" class="mr-2"> Sí
                    <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="heredo-diabetes" value="No" class="mr-2"> No
                </div>
                <label class="block text-sm font-semibold">Diabetes tipo 2</label>
                <div class="flex flex-row items-center">
                    <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="heredo-diabetes2" value="Si" class="mr-2"> Sí
                    <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="heredo-diabetes2" value="No" class="mr-2"> No
                </div>
                <label class="block text-sm font-semibold">Hipertención</label>
                <div class="flex flex-row items-center">
                    <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="heredo-hipertencion" value="Si" class="mr-2"> Sí
                    <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="heredo-hipertencion" value="No" class="mr-2"> No
                </div>
                <label class="block text-sm font-semibold">Cáncer</label>
                <div class="flex flex-row items-center">
                    <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="heredo-cancer" value="Si" class="mr-2"> Sí
                    <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="heredo-cancer" value="No" class="mr-2"> No
                </div>
                <div class="flex flex-col">
                    <label for="" class="block text-sm font-semibold">¿Cual?:</label>
                    <input type="text" name="tipo-cancer" class="bg-gray-50 border mb-4 border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>
            </div>

            <div class="ml-4 mr-4 mb-4 flex flex-row justify-end">
                <!-- <input type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar2()"> -->
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar7()"> Guardar</button>
            </div>
        </div>

        <div id="card7" class="hidden border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl sm:w-11/12">
            <h2 class="font-fuenteEslogan m-4 size">ANTECEDENTES NEONATALES</h2>
            <div class="ml-4 mr-4 flex flex-col">

                <div class="flex flex-col">
                    <label class="block mb-1 text-sm font-medium text-gray-900">¿Cuánto peso usted al nacer?</label>
                    <input type="text" name="peso"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-1 text-sm font-medium text-gray-900">¿Cuál fue su talla al nacer?</label>
                    <input type="text" name="talla"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-1 text-sm font-medium text-gray-900">¿Cuál fue su calificación de Apgar al nacer?</label>
                    <input type="text" name="cal_Apgar"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <label class="block text-sm font-semibold">Nació por parto natural o cesárea</label>
                <div class="flex flex-row items-center">
                    <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="parto" value="Parto Natural" class="mr-2"> Parto Natural
                    <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="parto" value="Cesárea" class="mr-2"> Cesárea
                </div>

                <div class="flex flex-col">
                    <label class="block mb-1 text-sm font-medium text-gray-900">A las cuántas semanas nació</label>
                    <input type="text" name="semanas_n"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <label class="block text-sm font-semibold">¿Hubo algún contratiempo en el embarazo?</label>
                <div class="flex flex-row items-center">
                    <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="contratiempo_nacer" value="Si" class="mr-2"> Sí
                    <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="contratiempo_nacer" value="No" class="mr-2"> No
                </div>
                <div class="flex flex-col">
                    <label for="" class="block text-sm font-semibold">¿Cual?:</label>
                    <input type="text" name="contra-nacer" class="bg-gray-50 border mb-4 border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-1 text-sm font-medium text-gray-900">¿Cuál es su tipo de sangre?</label>
                    <input type="text" name="tipo-sangre"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <label class="block text-sm font-semibold">¿Ha tenido alguna cirugía?</label>
                <div class="flex flex-row items-center">
                    <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="cirugia" value="Si" class="mr-2"> Sí
                    <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="cirugia" value="No" class="mr-2"> No
                </div>
                <div class="flex flex-col">
                    <label for="" class="block text-sm font-semibold">¿Cual?</label>
                    <input type="text" name="tipo-cirugia" class="bg-gray-50 border mb-4 border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <label class="block text-sm font-semibold">¿Ha tenido alguna fractura?</label>
                <div class="flex flex-row items-center">
                    <input class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="fractura" value="Si" class="mr-2"> Sí
                    <input class="w-4 h-4 ml-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" type="radio" name="fractura" value="No" class="mr-2"> No
                </div>
                <div class="flex flex-col">
                    <label for="" class="block text-sm font-semibold">¿Cual?</label>
                    <input type="text" name="tipo-fractura" class="bg-gray-50 border mb-4 border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-1 text-sm font-medium text-gray-900">Presión actual</label>
                    <input type="text" name="presion"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-1 text-sm font-medium text-gray-900">Colesterol HDL</label>
                    <input type="text" name="colesterol"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-1 text-sm font-medium text-gray-900">Tiempo en rango</label>
                    <input type="text" name="tiempo_rango"  class="bg-gray-50 border border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>

                <div class="flex flex-col">
                    <label class="block mb-1 text-sm font-medium text-gray-900">Glucosa promedio</label>
                    <input type="text" name="glucosa_promedio"  class="bg-gray-50 border mb-4 border-gray-300 text-gray-900 p-1 text-sm rounded-lg block">
                </div>
                <div class="ml-4 mr-4 mb-4 flex flex-row justify-end">
                    <!-- <input type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar2()"> -->
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar8()"> Guardar</button>
                </div>
            </div>
        </div>


        <div id="card8" class="hidden border mb-5 sm:mt-10 shadow-lg bg-white shadow-gray-500/50 border-slate-400 rounded-xl sm:w-11/12">
            <div class="ml-4 mr-4 flex flex-col">
                <h2 class="font-fuenteEslogan m-4 size">Agradecemos su participación en el presente estudio, se le enviará a su correo electrónico la liga del archivo donde deberá realizar los registros diarios de control y seguimiento de su padecimiento.</h2>
            </div>
            <div class="ml-4 mr-4 mb-4 flex flex-row justify-end">
                <!-- <input type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" onclick="guardar2()"> -->
                <a class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 cursor-pointer" href="principal.php"> Guardar</a>
            </div>
        </div> 
    </div>
</div>

</body>
<script src="js/script.js"></script>
</html>