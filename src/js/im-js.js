$(document).ready(function(){

    $(".masked-phone1").inputmask("+7 (999) 999-99-99",{
        "oncomplete": function(){ phonemaskOk = 1; },
        "onincomplete": function(){ phonemaskOk = 0; },
        "oncleared": function(){ phonemaskOk = 0; }
    });

    $(".ProcessingPersonalDataText").fancybox({
        maxWidth : 700
    });

    validateForm({
        formId: 'form10'
    });
});