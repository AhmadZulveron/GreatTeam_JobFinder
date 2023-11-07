$(document).ready(function() {
    $('#jenis_pekerjaan').select2({
        placeholder: "Pilih jenis pekerjaan",
        allowClear: true,
    });

    $(".step").not(".step-1").hide();

    $(".next").click(function() {
        var currentStep = $(this).closest('.step');
        currentStep.hide().next().show();
        updateButtons(currentStep);
    });

    $(".prev").click(function() {
        var currentStep = $(this).closest('.step');
        currentStep.hide().prev().show();
        updateButtons(currentStep);
    });

    function updateButtons(currentStep) {
        if (currentStep.is('.step-1')) {
            currentStep.find('.prev').prop('disabled', true);
        } else {
            currentStep.find('.prev').prop('disabled', false);
        }

        if (currentStep.is('.step-3')) {
            $('#submit-button').prop('disabled', false);
        } else {
            $('#submit-button').prop('disabled', true);
        }
    }
});