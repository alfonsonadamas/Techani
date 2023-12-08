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

function guardar1() {
  const myDiv = document.getElementById("Indicaciones");
  const myDivB = document.getElementById("botonS1");
  const divS = document.getElementById("card1");
  const btS = document.getElementById("buttonC1");
  const n1 = document.getElementById("n1");
  const c1 = document.getElementById("c1");
  const n2 = document.getElementById("n2");
  const c2 = document.getElementById("c2");
  n1.classList.add("text-gray-400");
  n1.classList.remove("bg-blue-500");
  c1.classList.remove("text-blue-500");
  c1.classList.add("text-gray-400");
  n2.classList.remove("text-gray-400");
  n2.classList.add("text-white");
  n2.classList.add("bg-blue-500");
  c2.classList.add("text-blue-500");
  c2.classList.remove("text-gray-400");
  myDiv.classList.add("hidden");
  myDivB.classList.add("hidden");
  divS.classList.remove("hidden");
  btS.classList.remove("hidden");
  n1.classList.add("text-gray-400");

  event.preventDefault();
  window.scrollTo(0, 0);
}

function guardar2() {
  const myDiv = document.getElementById("card1");
  const divS = document.getElementById("card2");
  const n2 = document.getElementById("n2");
  const c2 = document.getElementById("c2");
  const n3 = document.getElementById("n3");
  const c3 = document.getElementById("c3");
  n2.classList.add("text-gray-400");
  n2.classList.remove("bg-blue-500");
  c2.classList.remove("text-blue-500");
  c2.classList.add("text-gray-400");
  n3.classList.remove("text-gray-400");
  n3.classList.add("text-white");
  n3.classList.add("bg-blue-500");
  c3.classList.add("text-blue-500");
  c3.classList.remove("text-gray-400");
  myDiv.classList.add("hidden");
  divS.classList.remove("hidden");
  n2.classList.add("text-gray-400");

  event.preventDefault();
  window.scrollTo(0, 0);
}

function guardar3() {
  const myDiv = document.getElementById("card2");
  const divS = document.getElementById("card3");
  const n3 = document.getElementById("n3");
  const c3 = document.getElementById("c3");
  const n4 = document.getElementById("n4");
  const c4 = document.getElementById("c4");
  n3.classList.add("text-gray-400");
  n3.classList.remove("bg-blue-500");
  c3.classList.remove("text-blue-500");
  c3.classList.add("text-gray-400");
  n4.classList.remove("text-gray-400");
  n4.classList.add("text-white");
  n4.classList.add("bg-blue-500");
  c4.classList.add("text-blue-500");
  c4.classList.remove("text-gray-400");
  myDiv.classList.add("hidden");
  divS.classList.remove("hidden");
  n3.classList.add("text-gray-400");

  event.preventDefault();
  window.scrollTo(0, 0);
}

function guardar4() {
  const myDiv = document.getElementById("card3");
  const divS = document.getElementById("card4");
  const n4 = document.getElementById("n4");
  const c4 = document.getElementById("c4");
  const n5 = document.getElementById("n5");
  const c5 = document.getElementById("c5");
  n4.classList.add("text-gray-400");
  n4.classList.remove("bg-blue-500");
  c4.classList.remove("text-blue-500");
  c4.classList.add("text-gray-400");
  n5.classList.remove("text-gray-400");
  n5.classList.add("text-white");
  n5.classList.add("bg-blue-500");
  c5.classList.add("text-blue-500");
  c5.classList.remove("text-gray-400");
  myDiv.classList.add("hidden");
  divS.classList.remove("hidden");
  n3.classList.add("text-gray-400");
  event.preventDefault();
  window.scrollTo(0, 0);
}

function guardar5() {
  const myDiv = document.getElementById("card4");
  const divS = document.getElementById("card5");
  const n5 = document.getElementById("n5");
  const c5 = document.getElementById("c5");
  const n6 = document.getElementById("n6");
  const c6 = document.getElementById("c6");
  n5.classList.add("text-gray-400");
  n5.classList.remove("bg-blue-500");
  c5.classList.remove("text-blue-500");
  c5.classList.add("text-gray-400");
  n6.classList.remove("text-gray-400");
  n6.classList.add("text-white");
  n6.classList.add("bg-blue-500");
  c6.classList.add("text-blue-500");
  c6.classList.remove("text-gray-400");
  myDiv.classList.add("hidden");
  divS.classList.remove("hidden");
  event.preventDefault();
  window.scrollTo(0, 0);
}

function guardar6() {
  const myDiv = document.getElementById("card5");
  const divS = document.getElementById("card6");
  const n6 = document.getElementById("n6");
  const c6 = document.getElementById("c6");
  const n7 = document.getElementById("n7");
  const c7 = document.getElementById("c7");
  n6.classList.add("text-gray-400");
  n6.classList.remove("bg-blue-500");
  c6.classList.remove("text-blue-500");
  c6.classList.add("text-gray-400");
  n7.classList.remove("text-gray-400");
  n7.classList.add("text-white");
  n7.classList.add("bg-blue-500");
  c7.classList.add("text-blue-500");
  c7.classList.remove("text-gray-400");
  myDiv.classList.add("hidden");
  divS.classList.remove("hidden");
  n3.classList.add("text-gray-400");
  event.preventDefault();
  window.scrollTo(0, 0);
}

function guardar7() {
  const myDiv = document.getElementById("card6");
  const divS = document.getElementById("card7");
  const n7 = document.getElementById("n7");
  const c7 = document.getElementById("c7");
  const n8 = document.getElementById("n8");
  const c8 = document.getElementById("c8");
  n7.classList.add("text-gray-400");
  n7.classList.remove("bg-blue-500");
  c7.classList.remove("text-blue-500");
  c7.classList.add("text-gray-400");
  n8.classList.remove("text-gray-400");
  n8.classList.add("text-white");
  n8.classList.add("bg-blue-500");
  c8.classList.add("text-blue-500");
  c8.classList.remove("text-gray-400");
  myDiv.classList.add("hidden");
  divS.classList.remove("hidden");

  event.preventDefault();
  window.scrollTo(0, 0);
}

function guardar8() {
  const myDiv = document.getElementById("card7");
  const divS = document.getElementById("card8");
  const n8 = document.getElementById("n8");
  const c8 = document.getElementById("c8");

  n8.classList.add("text-gray-400");
  n8.classList.remove("bg-blue-500");
  c8.classList.remove("text-blue-500");
  c8.classList.add("text-gray-400");

  myDiv.classList.add("hidden");
  divS.classList.remove("hidden");
  n3.classList.add("text-gray-400");
  event.preventDefault();
  window.scrollTo(0, 0);
}

function caracteresRestantes() {
  const textarea = document.getElementById("observaciones");
  const maxLength = 300;
  const contadorCaracteres = document.getElementById("contador-caracteres");

  let inputValue = textarea.value;
  const lineBreaks = (inputValue.match(/\n/g) || []).length;
  const totalCaracteres = inputValue.length + lineBreaks * 30;

  if (totalCaracteres > maxLength || totalCaracteres + 30 > maxLength) {
    const maxTextLength = maxLength - lineBreaks * 30;
    inputValue = inputValue.substring(0, maxTextLength);
    textarea.value = inputValue;
  }

  const caracteresRestantes = maxLength - totalCaracteres;
  contadorCaracteres.textContent = `Caracteres restantes: ${Math.max(
    0,
    caracteresRestantes
  )}`;
}

// textarea.addEventListener("keydown", (event) => {});

function Enter(event) {
  const textarea = document.getElementById("observaciones");
  const maxLength = 300;
  if (event.key === "Enter") {
    const caracteresRestantes =
      maxLength -
      (textarea.value.length + (textarea.value.match(/\n/g) || []).length * 30);
    if (caracteresRestantes <= 30) {
      event.preventDefault();
    }
  }
}
