function ocultar() {
  const select = document.getElementById("dia_atipico");
  const textarea = document.getElementById("especifique");
  if (select.value === "otro") {
    textarea.classList.remove("hidden");
    textarea.classList.add("block");
    select.name = "";
    textarea.name = "dia_atipico";
  } else {
    select.name = "dia_atipico";
    textarea.name = "";
    textarea.classList.remove("block");
    textarea.classList.add("hidden");
  }
}

const fechaFiltroInput = document.getElementById("FechaFiltro");
const filtrarButton = document.getElementById("filtrar");
const registros = document.querySelectorAll(".registro");
const sinRegistrosMessage = document.getElementById("sinRegistros");

filtrarButton.addEventListener("click", () => {
  const fechaFiltro = fechaFiltroInput.value;
  let registrosMostrados = 0;
  
  registros.forEach(registro => {
    const fechaRegistro = registro.querySelector("label").textContent;

    if (fechaFiltro === "" || fechaRegistro === fechaFiltro) {
      registro.style.display = "block"; // Mostrar registros que coinciden con la fecha
      registrosMostrados++;
    } else {
      registro.style.display = "none"; // Ocultar registros que no coinciden con la fecha
    }

    if (registrosMostrados === 0) {
      sinRegistrosMessage.style.display = "block";
    } else {
      sinRegistrosMessage.style.display = "none";
    }
  });
});

const textarea = document.getElementById('observaciones');
const contadorCaracteres = document.getElementById('contador-caracteres');
const maxLength = 300;

textarea.addEventListener('input', () => {
    let inputValue = textarea.value;
    const lineBreaks = (inputValue.match(/\n/g) || []).length;
    const totalCaracteres = inputValue.length + lineBreaks * 30;

    if (totalCaracteres > maxLength || totalCaracteres + 30 > maxLength) {
        const maxTextLength = maxLength - lineBreaks * 30;
        inputValue = inputValue.substring(0, maxTextLength);
        textarea.value = inputValue;
    }

    const caracteresRestantes = maxLength - totalCaracteres;
    contadorCaracteres.textContent = `Caracteres restantes: ${
        Math.max(0, caracteresRestantes)
    }`;
});

textarea.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        const caracteresRestantes = maxLength - (textarea.value.length + (
            textarea.value.match(/\n/g) || []).length * 30);
        if (caracteresRestantes <= 30) {
            event.preventDefault();
        }
    }
});