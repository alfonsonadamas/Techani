jQuery(document).on("change", "#tipo_alimento", function (event) {
  const tipoAlimento = $("#tipo_alimento option:selected").text();
  if (tipoAlimento != "--Selecciona una opcion--") {
    $("#comida").prop("disabled", false);
  } else {
    $("#comida").prop("disabled", true);
  }
  switch (tipoAlimento) {
    case "Proteina":
      $.ajax({
        url: "../public/php/endPointBuscarAlimentoProteina.php",
        dataType: "json",
        success: function (data) {
          var select = $("#comida");
          select.empty();
          $.each(data, function (key, value) {
            select.append(
              "<option selected>--Selecciona una opcion--</option>"
            );
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
          var select = $("#comida");
          select.empty();
          $.each(data, function (key, value) {
            select.append(
              "<option selected>--Selecciona una opcion--</option>"
            );
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
          var select = $("#comida");
          select.empty();
          $.each(data, function (key, value) {
            select.append(
              "<option selected>--Selecciona una opcion--</option>"
            );
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
      var select = $("#comida");
      select.empty();
      select.append("<option selected>--Selecciona una opcion--</option>");
      break;
  }
});

jQuery(document).on("change", "#comida", function (event) {
  const tipoAlimento = $("#commida option:selected").text();
  if (tipoAlimento != "--Selecciona una opcion--") {
    $("#porcion").prop("disabled", false);
  }
});
