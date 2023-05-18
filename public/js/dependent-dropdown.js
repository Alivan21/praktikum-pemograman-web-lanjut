$(document).ready(function () {
  function onChangeSelect(url, id, name) {
    $.ajax({
      url: url + id,
      type: "GET",
      success: function (data) {
        const target = $("#" + name);
        target.attr("disabled", false);
        target.empty();
        target.attr("placeholder", target.data("placeholder"));
        target.append("<option>" + target.data("placeholder") + "</option>");
        $.each(data, function (key, value) {
          target.append(`<option value="${key}">${value}</option>`);
        });
      },
    });
  }

  $(".single-select-field").select2({
    theme: "classic",
    placeholder: $(this).data("placeholder"),
  });

  // on change select jurusan
  $("#jurusan").on("change", function () {
    const id = $(this).val();
    const url = "/kelas/getKelasList/";
    if (id !== "Pilih Jurusan" || id !== "") {
      $("#kelas").empty().prop("disabled", false);
      onChangeSelect(url, id, "kelas");
      console.log(id);
    }
    $("#kelas").prop("disabled", true);
  });
});
