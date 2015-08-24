
$(document).ready(function() {
    $('#frmGenerateCertification').validate({
        rules: {
            name: {required: true},
            numberDocument: {required: true,number:true},
        }
    });
});

