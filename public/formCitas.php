<form id="form" action="php/addCitas.php" method="post">

<div class="flex space-x-4 mb-5">
    <div class="w-1/2 mr-4">
        <label for="fecha_cita" class="block font-semibold">Fecha de la cita:</label>
        <input type="date" name="Fecha" id="Fecha" required
            class="border border-black rounded p-2 w-full">
    </div>
    <div class="w-1/2">
        <label for="hora_cita" class="block font-semibold">Hora de la cita:</label>
        <input type="time" name="Hora" id="Hora" required
            class="border border-black rounded p-2 w-full">
    </div>
</div>

<div class="w-full mb-5">
    <label for="tipo_cita" class="block font-semibold">Tipo de cita:</label>
    <input type="text" name="Tipo_Cita" id="Tipo_Cita" required
        class="border border-black rounded p-2 w-full">
</div>

<div class="w-full mb-5">
    <label for="lugar" class="block font-semibold">Lugar:</label>
    <input type="text" name="Lugar" id="Lugar" required class="border border-black rounded p-2 w-full">
</div>

<div class="w-full flex flex-col">
    <label for="Observaciones"
        class="block text-sm font-medium mb-1 text-gray-900">Observaciones</label>

    <textarea name="ObservacionesAgregar" id="ObservacionesAgregar"  cols="30" rows="10"
        class="bg-black-50 border border-black text-gray-900 text-sm rounded-md block resize-none"></textarea>
    <div name="Contador_caracteresAgregar" id="Contador_caracteresAgregar">Caracteres restantes: 600</div>

</div>
    <!-- Modal footer -->    
    <button data-modal-hide="formRegistrarCita" type="submit" class="bg-amarillo text-black p-2 rounded font-semibold">
        Guardar Cita
    </button>
    <button data-modal-hide="formRegistrarCita" type="button" class="modal-close bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Cerrar
    </button>                                    
</form>

<script>
var textarea = document.getElementById('ObservacionesAgregar');
var contadorCaracteres = document.getElementById('Contador_caracteresAgregar');
var maxLength = 600;
                                    
textarea.addEventListener('input', () => {
    let inputValue = textarea.value;
    var lineBreaks = (inputValue.match(/\n/g) || []).length;
    var totalCaracteres = inputValue.length + lineBreaks * 50;
    console.log("JJJJ");
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