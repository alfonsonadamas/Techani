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
      console.log("error");
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

jQuery(document).on("input", "#correo", function () {
  const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const correo = $("#correo").val().trim();
  const mensaje = $("#mensajeCorreo").html();
  $("#correoVerif").removeClass("hidden");
  if (regex.test(correo)) {
    comprobacionCorreo = true;
    $("#mensajeCorreo").html("Correo Valido");
    $("#siguienteCont").prop("disabled", false);
    $("#correoConf").removeClass("text-red-600");
    $("#correoConf").addClass("text-green-600");
  } else {
    comprobacionCorreo = false;
    $("#mensajeCorreo").text("Correo no valido. Ejemplo: example@example.com");
    $("#siguienteCont").prop("disabled", true);
    $("#correoConf").addClass("text-red-600");
    $("#correoConf").removeClass("text-green-600");
  }

  console.log(comprobacionContra);
  console.log(comprobacionCorreo);
  console.log(comprobacionUsuario);
  console.log(comprobacionContraConf);

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true
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

  console.log(comprobacionContra);
  console.log(comprobacionCorreo);
  console.log(comprobacionUsuario);
  console.log(comprobacionContraConf);

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true
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
  } else {
    $("#confMsg").removeClass("hidden");
    $("#passwordConf").addClass("text-red-600");
    $("#passwordConf").removeClass("text-green-600");
    $("#passwordMSg").html("Las contraseñas no coinciden");
    comprobacionContraConf = false;
  }

  console.log(comprobacionContra);
  console.log(comprobacionCorreo);
  console.log(comprobacionUsuario);
  console.log(comprobacionContraConf);

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true
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

  console.log(comprobacionContra);
  console.log(comprobacionCorreo);
  console.log(comprobacionUsuario);
  console.log(comprobacionContraConf);

  if (
    comprobacionContra == true &&
    comprobacionCorreo == true &&
    comprobacionUsuario == true &&
    comprobacionContraConf == true
  ) {
    $("#enviar").prop("disabled", false);
  } else {
    $("#enviar").prop("disabled", true);
  }
});

$("#siguiente").on("click", function (event) {
  event.preventDefault();
  $("#correo").removeClass("hidden");
  $("#usuario").addClass("hidden");
  $("#msgUsuario").addClass("hidden");
  $("#siguiente").addClass("hidden");
  $("#siguienteCont").removeClass("hidden");
  $("#login").addClass("hidden");
});

$("#siguienteCont").on("click", function (event) {
  event.preventDefault();
  $("#correo").addClass("hidden");
  $("#contraseña").removeClass("hidden");
  $("#confContraseña").removeClass("hidden");
  $("#mensajeCorreo").addClass("hidden");
  $("#mensajeCorreoValido").addClass("hidden");
  $("#enviar").removeClass("hidden");
  $("#siguienteCont").addClass("hidden");
  $("#correoVerif").addClass("hidden");
});

jQuery(document).on("submit", "#registro", function (event) {
  event.preventDefault();
  jQuery
    .ajax({
      url: "../public/php/endPointRegistroCorreo.php",
      type: "POST",
      dataType: "json",
      data: $(this).serialize(),
    })
    .done(function (response) {
      console.log(response);
    })
    .fail(function (resp) {
      console.log("error");
    })
    .always(function (param) {
      console.log("complete");
    });
});

$("#siguiente").on("click", function (event) {
  event.preventDefault();
  $("#correo").removeClass("hidden");
  $("#usuario").addClass("hidden");
  $("#msgUsuario").addClass("hidden");
  $("#siguiente").addClass("hidden");
  $("#siguienteCont").removeClass("hidden");
  $("#login").addClass("hidden");
});

$("#siguienteCont").on("click", function (event) {
  event.preventDefault();
  $("#correo").addClass("hidden");
  $("#contraseña").removeClass("hidden");
  $("#confContraseña").removeClass("hidden");
  $("#mensajeCorreo").addClass("hidden");
  $("#mensajeCorreoValido").addClass("hidden");
  $("#enviar").removeClass("hidden");
  $("#siguienteCont").addClass("hidden");
  $("#correoVerif").addClass("hidden");
});

jQuery(document).on("submit", "#registro", function (event) {
  event.preventDefault();
  jQuery
    .ajax({
      url: "../public/php/endPointRegistroCorreo.php",
      type: "POST",
      dataType: "json",
      data: $(this).serialize(),
    })
    .done(function (response) {
      console.log(response);
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

jQuery(document).on("click", "#btnsubir", function () {
  $("#doc").trigger("click");
});
