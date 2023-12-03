jQuery(function () {
  var filaCount = 0;
  $("#agregar").on("click", function (event) {
    event.preventDefault();
    filaCount++;
    var filaid = "alimento" + filaCount;
    var comidaid = "comida" + filaCount;
    var porcionid = "porcion" + filaCount;
    var html = `<tr><td><select name="alimento[]" id="${filaid}"><option value="" selected>--Selecciona una opcion--</option><option value="proteina">Proteina</option><option value="grasa_proteina">Grasa c/ Proteina</option><option value="lacteo">Lacteo</option></select></td><td><select name="comida[]" id="${comidaid}" disabled><option value="" selected>--Selecciona una opcion--</option></select></td><td><input type="number" id="${porcionid}" disabled></td></tr>`;
    $("#tablaPrueba tbody").append(html);

    $("#" + filaid).on("change", function () {
      const tipoAlimento = $(`#${filaid} option:selected`).text();
      if (tipoAlimento != "--Selecciona una opcion--") {
        $(`#${comidaid}`).prop("disabled", false);
      } else {
        $(`#${comidaid}`).prop("disabled", true);
      }
      switch (tipoAlimento) {
        case "Proteina":
          $.ajax({
            url: "../public/php/endPointBuscarAlimentoProteina.php",
            dataType: "json",
            success: function (data) {
              var select = $(`#${comidaid}`);
              select.empty();
              $.each(data, function (key, value) {
                select.append(
                  '<option value="' +
                    value.Clave_alimento +
                    '">' +
                    value.Nombre_alimento +
                    "</option>"
                );
              });
            },
          });
          break;
        case "Grasa c/ Proteina":
          $.ajax({
            url: "../public/php/endPointBuscarAlimentoGrasa.php",
            dataType: "json",
            success: function (data) {
              var select = $(`#${comidaid}`);
              select.empty();
              $.each(data, function (key, value) {
                select.append(
                  '<option value="' +
                    value.Clave_alimento +
                    '">' +
                    value.Nombre_alimento +
                    "</option>"
                );
              });
            },
          });
          break;
        case "Lacteo":
          $.ajax({
            url: "../public/php/endPointBuscarAlimentoLacteo.php",
            dataType: "json",
            success: function (data) {
              var select = $(`#${comidaid}`);
              select.empty();
              $.each(data, function (key, value) {
                select.append(
                  '<option value="' +
                    value.Clave_alimento +
                    '">' +
                    value.Nombre_alimento +
                    "</option>"
                );
              });
            },
          });
          break;

        default:
          var select = $(`#${comidaid}`);
          select.empty();
          select.append("<option selected>--Selecciona una opcion--</option>");
          break;
      }
    });

    $(`#${filaid}`).on("change", function () {
      const tipoAlimento = $(`#${filaid} option:selected`).text();
      if (tipoAlimento == "--Selecciona una opcion--") {
        $(`#${porcionid}`).prop("disabled", true);
      } else {
        $(`#${porcionid}`).prop("disabled", false);
      }
    });
  });
});

jQuery(document).on("submit", "#formAlimentos", function (event) {
  event.preventDefault();
  jQuery
    .ajax({
      url: "../public/php/endPointAñadirAlimento.php",
      type: "POST",
      dataType: "json",
      data: $(this).serialize(),
    })
    .done(function (respuesta) {
      console.log(respuesta);
    })
    .fail(function (resp) {
      console.log(resp.responseText);
    })
    .always(function () {
      console.log("complete");
    });
});

jQuery(document).on("submit", "#login", function (event) {
  event.preventDefault();
  $("#login_enviar").prop("disabled", true);
  jQuery
    .ajax({
      url: "../public/php/endPointLogin.php",
      type: "POST",
      dataType: "json",
      data: $(this).serialize(),
    })
    .done(function (response) {
      console.log(response);
      if (response.success) {
        window.location.href = response.redirect_url;
      } else {
        $("#login_enviar").prop("disabled", false);
        $("#alerta").addClass("block");
        $("#alerta").removeClass("hidden");
      }
    })
    .fail(function (resp) {
      console.log(resp.responseText);
    })
    .always(function (param) {
      console.log("complete");
    });
});

jQuery(document).on("click", "#panel", function () {
  if ($("#panel").hasClass("hidden")) {
    $("#panel").removeClass("hidden");
  }
});

var comprobacionCorreo = false;
var comprobacionContra = false;
var comprobacionUsuario = false;
var comprobacionContraConf = false;
var nombre = false;
var apellidoP = false;
var apellidoM = false;
var celular = false;
var terminos = $("#terminos").prop("checked");

jQuery(document).on("input", "#correo", function () {
  const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const correo = $("#correo").val().trim();
  const mensaje = $("#mensajeCorreo").html();
  $("#correoVerif").removeClass("hidden");
  if (regex.test(correo)) {
    comprobacionCorreo = true;
    $("#mensajeCorreo").html("Correo Valido");
    $("#contraseñasig").prop("disabled", false);
    $("#correoConf").removeClass("text-red-600");
    $("#correoConf").addClass("text-green-600");
  } else {
    comprobacionCorreo = false;
    $("#mensajeCorreo").text("Correo no valido. Ejemplo: example@example.com");
    $("#contraseñasig").prop("disabled", true);
    $("#correoConf").addClass("text-red-600");
    $("#correoConf").removeClass("text-green-600");
  }

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true &&
    nombre == true &&
    apellidoP == true &&
    apellidoM == true &&
    celular == true &&
    $("#terminos").prop("checked") == true
  ) {
    $("#enviar").prop("disabled", false);
  } else {
    $("#enviar").prop("disabled", true);
  }
});

jQuery(document).on("input", "#contraseña", function () {
  const regex = /^.{8,}$/;
  const regexMays = /.*[A-Z].*/;
  const regexEsp = /.*[\W].*/;
  const password = $("#contraseña").val().trim();
  $("#mensajeContraseña").addClass("block");
  $("#mensajeContraseña").removeClass("hidden");
  if (regex.test(password)) {
    $("#caracteres").addClass("text-green-600");
    $("#caracteres").removeClass("text-red-600");
  } else {
    $("#caracteres").removeClass("text-green-600");
    $("#caracteres").addClass("text-red-600");
  }
  if (regexMays.test(password)) {
    $("#mayus").addClass("text-green-600");
    $("#mayus").removeClass("text-red-600");
  } else {
    $("#mayus").removeClass("text-green-600");
    $("#mayus").addClass("text-red-600");
  }
  if (regexEsp.test(password)) {
    $("#caracEsp").addClass("text-green-600");
    $("#caracEsp").removeClass("text-red-600");
  } else {
    $("#caracEsp").removeClass("text-green-600");
    $("#caracEsp").addClass("text-red-600");
  }

  if (
    regex.test(password) &&
    regexMays.test(password) &&
    regexEsp.test(password)
  ) {
    $("#errorMsg").html("Contraseña Valida");
    comprobacionContra = true;
  } else {
    $("#errorMsg").html("Contraseña no Valida");
    comprobacionContra = false;
  }

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true &&
    nombre == true &&
    apellidoP == true &&
    apellidoM == true &&
    celular == true &&
    $("#terminos").prop("checked") == true
  ) {
    $("#enviar").prop("disabled", false);
  } else {
    $("#enviar").prop("disabled", true);
  }
});

jQuery(document).on("input", "#confContraseña", function () {
  const password = $("#contraseña").val().trim();
  const confPass = $("#confContraseña").val().trim();

  if (confPass == password) {
    $("#confMsg").removeClass("hidden");
    $("#passwordConf").removeClass("text-red-600");
    $("#passwordConf").addClass("text-green-600");
    $("#passwordMSg").html("Las contraseñas coinciden");
    comprobacionContraConf = true;
    $("#siguienteNom").prop("disabled", false);
  } else {
    $("#confMsg").removeClass("hidden");
    $("#passwordConf").addClass("text-red-600");
    $("#passwordConf").removeClass("text-green-600");
    $("#passwordMSg").html("Las contraseñas no coinciden");
    $("#siguienteNom").prop("disabled", true);
    comprobacionContraConf = false;
  }

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true &&
    nombre == true &&
    apellidoP == true &&
    apellidoM == true &&
    celular == true &&
    $("#terminos").prop("checked") == true
  ) {
    $("#enviar").prop("disabled", false);
  } else {
    $("#enviar").prop("disabled", true);
  }
});

jQuery(document).on("input", "#usuario", function () {
  const regex = /^.{8,}$/;
  const user = $("#usuario").val().trim();
  $("#mensajeUsuario").removeClass("hidden");
  if (regex.test(user)) {
    $("#caracUsuario").removeClass("text-red-600");
    $("#caracUsuario").addClass("text-green-600");
    $("#siguiente").prop("disabled", false);
    comprobacionUsuario = true;
  } else {
    $("#caracUsuario").addClass("text-red-600");
    $("#caracUsuario").removeClass("text-green-600");
    $("#siguiente").prop("disabled", true);
    comprobacionUsuario = false;
  }

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true &&
    nombre == true &&
    apellidoP == true &&
    apellidoM == true &&
    celular == true &&
    $("#terminos").prop("checked") == true
  ) {
    $("#enviar").prop("disabled", false);
  } else {
    $("#enviar").prop("disabled", true);
  }
});

$("#nombrePaciente").on("input", function () {
  const nombreP = $("#nombrePaciente").val().trim();

  if (nombreP.length > 0) {
    nombre = true;
  } else {
    nombre = false;
  }

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true &&
    nombre == true &&
    apellidoP == true &&
    apellidoM == true &&
    celular == true &&
    $("#terminos").prop("checked") == true
  ) {
    $("#enviar").prop("disabled", false);
  } else {
    $("#enviar").prop("disabled", true);
  }
});

$("#apellidoP_Paciente").on("input", function () {
  const apellidoP_Paciente = $("#apellidoP_Paciente").val().trim();

  if (apellidoP_Paciente.length > 0) {
    apellidoP = true;
  } else {
    apellidoP = false;
  }

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true &&
    nombre == true &&
    apellidoP == true &&
    apellidoM == true &&
    celular == true &&
    $("#terminos").prop("checked") == true
  ) {
    $("#enviar").prop("disabled", false);
  } else {
    $("#enviar").prop("disabled", true);
  }
});

$("#apellidoM_Paciente").on("input", function () {
  const apellidoM_Paciente = $("#apellidoM_Paciente").val().trim();

  if (apellidoM_Paciente.length > 0) {
    apellidoM = true;
  } else {
    apellidoM = false;
  }

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true &&
    nombre == true &&
    apellidoP == true &&
    apellidoM == true &&
    celular == true &&
    $("#terminos").prop("checked") == true
  ) {
    $("#enviar").prop("disabled", false);
  } else {
    $("#enviar").prop("disabled", true);
  }
});

$("#celular").on("input", function () {
  const regex = /^[0-9]{10}$/;
  const celularPasc = $("#celular").val().trim();
  $("#confCel").removeClass("hidden");
  if (regex.test(celularPasc)) {
    $("#celConf").removeClass("text-red-600");
    $("#celConf").addClass("text-green-600");
    $("#celMSG").html("Numero Valido");
    celular = true;
  } else {
    $("#celConf").addClass("text-red-600");
    $("#celConf").removeClass("text-green-600");
    $("#celMSG").html("Numero no Valido");
    celular = false;
  }

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true &&
    nombre == true &&
    apellidoP == true &&
    apellidoM == true &&
    celular == true &&
    $("#terminos").prop("checked") == true
  ) {
    $("#enviar").prop("disabled", false);
  } else {
    $("#enviar").prop("disabled", true);
  }
});

jQuery(document).on("submit", "#registroCorreo", function (event) {
  event.preventDefault();
  $("#enviar").prop("disabled", true);
  jQuery
    .ajax({
      url: "../public/php/endPointRegistroCorreo.php",
      type: "POST",
      dataType: "json",
      data: $(this).serialize(),
    })
    .done(function (response) {
      console.log(response);
      if (response.success) {
        window.location.href = response.redirect_url;
      } else if (response.failed) {
        $("#error_registro").html(response.message);
      }
    })
    .fail(function (resp) {
      console.log("error");
    })
    .always(function (param) {
      console.log("complete");
    });
});

jQuery(document).on("click", "#agregar", function () {
  if ($("#form").hasClass("hidden")) {
    $("#form").removeClass("hidden");
    $("#form").addClass("block");
  } else {
    $("#form").addClass("hidden");
    $("#form").removeClass("block");
  }
});

$("#terminos").on("click", function () {
  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true &&
    nombre == true &&
    apellidoP == true &&
    apellidoM == true &&
    celular == true &&
    $("#terminos").prop("checked") == true
  ) {
    $("#enviar").prop("disabled", false);
  } else {
    $("#enviar").prop("disabled", true);
  }
});
