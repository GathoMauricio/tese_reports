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
