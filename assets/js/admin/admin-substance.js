$(document).on("submit", "#FormSubstance", function(e) {
    e.preventDefault();
    $.post("../admin/ControlAdminSubstance/InsertSubstance", $(this).serialize())
        .done(function(data) {
            console.log(data);
            // if (data.trim().length > 0) {
            //     $("#sent").text("Error");
            // } else {
            //     $("#sent").text("Success");
            // }
        });

    return false;
})