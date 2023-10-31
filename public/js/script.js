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


function mostrar(){

  const btn = document.getElementById('btn');
  const form=document.getElementById('form');

  btn.addEventListener('click',()=>{

    if(form.classList.contains('hidden')){

        form.classList.remove('hidden');

    } else{

      form.classList.add('hidden');
    }
  });
}

mostrar();
