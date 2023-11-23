<form id="form" action="php/endPointEditarCitas.php" method="post">

<div class="flex space-x-4 mb-5">
    <div class="w-1/2 mr-4">
        <label for="fecha_cita" class="block font-semibold">Fecha de la cita:</label>
        <input value="<?php echo $row["Fecha"] ?>" type="date" name="Fecha" id="Fecha" required
            class="border border-black rounded p-2 w-full">
    </div>
    <div class="w-1/2">
        <label for="hora_cita" class="block font-semibold">Hora de la cita:</label>
        <input value="<?php echo $row["Hora"] ?>" type="time" name="Hora" id="Hora" required
            class="border border-black rounded p-2 w-full">
    </div>
</div>

<div class="w-full mb-5">
    <label for="tipo_cita" class="block font-semibold">Tipo de cita:</label>
    <input value="<?php echo $row["Tipo_Cita"] ?>" type="text" name="Tipo_Cita" id="Tipo_Cita" required
        class="border border-black rounded p-2 w-full">
</div>

<div class="w-full mb-5">
    <label for="lugar" class="block font-semibold">Lugar:</label>
    <input value="<?php echo $row["Lugar"] ?>" 
    type="text" name="Lugar" id="Lugar" required class="border border-black rounded p-2 w-full">
</div>

<div class="w-full flex flex-col">
    <label for="observaciones"
        class="block text-sm font-medium mb-1 text-gray-900">Observaciones</label>
    <textarea
    name="ObservacionesEditar<?php echo $row["idCitas"] ?>" id="ObservacionesEditar<?php echo $row["idCitas"] ?>" cols="30" rows="10"
    class="bg-black-50 border border-black text-gray-900 text-sm rounded-md block resize-none"><?php echo $row["Observaciones"] ?></textarea>
    <div name="Contador_caracteresEditar<?php echo $row["idCitas"] ?>" id="Contador_caracteresEditar<?php echo $row["idCitas"] ?>">Caracteres restantes: 600</div>
    
</div>

<div class="hidden" >
    <input  id="idCitas" name="idCitas" type="text" value="<?php echo $row["idCitas"] ?>">
</div>


    <!-- Modal footer -->    
    <button data-modal-hide="formEditarCita<?php echo $row["idCitas"] ?>" type="submit" class="bg-amarillo text-black p-2 rounded font-semibold">
        Editar Cita
    </button>
    <button data-modal-hide="formEditarCita<?php echo $row["idCitas"] ?>" type="button" class="modal-close bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Cerrar
    </button>                                    
</form>

<script>
var textarea = document.getElementById('ObservacionesEditar<?php echo $row["idCitas"] ?>');
var contadorCaracteres = document.getElementById('Contador_caracteresEditar<?php echo $row["idCitas"] ?>');
var maxLength = 600;
                                    
                                    textarea.addEventListener('input', () => {
                                        let inputValue = textarea.value;
                                        var lineBreaks = (inputValue.match(/\n/g) || []).length;
                                        var totalCaracteres = inputValue.length + lineBreaks * 50;
                                        console.log("HUUH<?php echo $row["idCitas"] ?>");
                                        if (totalCaracteres > maxLength || totalCaracteres + 50 > maxLength) {
                                            var maxTextLength = maxLength - lineBreaks * 50;
                                            inputValue = inputValue.substring(0, maxTextLength);
                                            textarea.value = inputValue;
                                        }

                                        var caracteresRestantes = maxLength - totalCaracteres;
                                        console.log(caracteresRestantes);
                                        contadorCaracteres.textContent = `Caracteres restantes: ${
                                                Math.max(0, caracteresRestantes)
                                            }`;
                                    });

                                    textarea.addEventListener('keydown', (event) => {
                                        if (event.key === 'Enter') {
                                            const caracteresRestantes = maxLength - (textarea.value.length + (
                                                textarea.value.match(/\n/g) || []).length * 50);
                                            if (caracteresRestantes <= 50) {
                                                event.preventDefault();
                                            }
                                        }
                                    });
                                    </script>