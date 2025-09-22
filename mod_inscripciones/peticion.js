$("#preForm").on("submit", function (e) {
  e.preventDefault();

  var formData = new FormData(this);

  $.ajax({
    url: "mod_inscripciones/guardar_preinscripcion.php",
    method: "POST",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "json",
    success: function (res) {
      if (res.status === "success") {
        Swal.fire("¡Éxito!", res.message, "success");
        $("#preForm")[0].reset();
        $("#okMsg").removeClass("d-none");
      } else {
        Swal.fire("Error", res.message, "error");
      }
    },
    error: function (xhr, status, error) {
      console.error("XHR:", xhr.responseText);
      Swal.fire("Error", "No se pudo conectar con el servidor: " + error, "error");
    },
  });
});
