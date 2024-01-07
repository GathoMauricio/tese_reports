require("./bootstrap");
import axios from "axios";

$(document).ready(function () {
    $("#form_update_alumno").submit((e) => {
        e.preventDefault();
        $(".texto_error").text("");
        axios
            .post(
                $("#form_update_alumno").prop("action"),
                $("#form_update_alumno").serialize()
            )
            .then((response) => {
                if (response.data.status == "OK") {
                    alertify.success(response.data.message);
                } else {
                    alertify.error(response.data.message);
                }
            })
            .catch(function (error) {
                $.each(error.response.data.errors, (index, item) => {
                    $("#texto_error_" + index).text(item[0]);
                });
            });
    });
});

window.editarSeccion = (seccion_id, fecha_inicio, fecha_fin) => {
    $("#txt_seccion_id").val(seccion_id);
    $("#txt_fecha_inicio").val(fecha_inicio);
    $("#txt_fecha_fin").val(fecha_fin);
    $("#edit_seccion").modal("show");
};

window.editarReporte = (reporte_id, nombre_reporte) => {
    $("#txt_reporte_id").val(reporte_id);
    $("#txt_nombre_reporte").val(nombre_reporte);
    $("#edit_reporte").modal("show");
};
