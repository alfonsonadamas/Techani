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

    $(`#${comidaid}`).on("change", function () {
      const tipoAlimento = $(`#${comidaid} option:selected`).text();
      if (tipoAlimento != "--Selecciona una opcion--") {
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
