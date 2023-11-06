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

function mostrar() {
  const btn = document.getElementById("btn");
  const form = document.getElementById("form");

  btn.addEventListener("click", () => {
    if (form.classList.contains("hidden")) {
      form.classList.remove("hidden");
    } else {
      form.classList.add("hidden");
    }
  });
}

mostrar();

function ocultarCard1() {
  const myDiv = document.getElementById("card1");
  const myDiv2 = document.getElementById("card11");
  myDiv.classList.add("hidden");
  myDiv2.classList.remove("hidden");

  event.preventDefault();
}

function ocultarCard2() {
  const myDiv = document.getElementById("card2");
  const myDiv2 = document.getElementById("card21");
  myDiv.classList.add("hidden");
  myDiv2.classList.remove("hidden");
  event.preventDefault();
}

function ocultarCard3() {
  const myDiv = document.getElementById("card3");
  const myDiv2 = document.getElementById("card31");
  myDiv.classList.add("hidden");
  myDiv2.classList.remove("hidden");
  event.preventDefault();
}

function ocultarCard4() {
  const myDiv = document.getElementById("card4");
  const myDiv2 = document.getElementById("card41");
  myDiv.classList.add("hidden");
  myDiv2.classList.remove("hidden");
  event.preventDefault();
}

function ocultarCard5() {
  const myDiv = document.getElementById("card5");
  const myDiv2 = document.getElementById("card51");
  myDiv.classList.add("hidden");
  myDiv2.classList.remove("hidden");
  event.preventDefault();
}

function ocultarCard6() {
  const myDiv = document.getElementById("card6");
  const myDiv2 = document.getElementById("card61");
  myDiv.classList.add("hidden");
  myDiv2.classList.remove("hidden");
  event.preventDefault();
}

function ocultarCard7() {
  const myDiv = document.getElementById("card7");
  const myDiv2 = document.getElementById("card71");
  myDiv.classList.add("hidden");
  myDiv2.classList.remove("hidden");
  event.preventDefault();
}
