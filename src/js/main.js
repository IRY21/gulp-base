/*//=require components/example.js*/

//=require components/**.*


$(document).ready(function(){

    var phonemaskOk = 0;

    $(".MaskedPhone").inputmask("8 (999) 999-99-99",{
        "oncomplete": function(){ phonemaskOk = 1; },
        "onincomplete": function(){ phonemaskOk = 0; },
        "oncleared": function(){ phonemaskOk = 0; }
    });

    $('input').keypress(function(e){
        if(e.keyCode==13)
        {
            e.preventDefault();
            var qid = $(this).parents('form').attr('alt');
            var qreachgoal = $(this).parents('form').attr('data-reachgoal');
            formcheck(qid, qreachgoal);
        }
    });

    $(".FancyBtn").fancybox({
        maxWidth : 700,
        padding: 0
    });

    $(".FancyMedia").fancybox({
        padding: 0
    });

    $(".ProcessingPersonalDataText-Link, .ImPolitic").fancybox({
        maxWidth : 700
    });

    $('.FormSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        dots: false,
        prevArrow: '',
        nextArrow: '<button type="button" class="FormSlider-Arrow FormSlider-Next Btn">' +
        'Продолжить <img src="/img/SliderArrow.png" alt="">' +
        '</button>'
    });

    var myDefMenu = new DefMenu({
        btn : ".DefmenuBtn"
        //menu : ".mydefmenu",
        //build : true,
        //links: "auto"
    });

    $('.Accordion-Title').on('click', function () {
        $(this).parent().toggleClass('Accordion-Item_open');
    });

    function animatedAnchorScroll(self) {
        var target = $(self).attr('href');
        $('html, body').animate({ scrollTop: $(target).offset().top-80}, 500);
    }
    $('a[href^="#"]').click(function () {
        animatedAnchorScroll(this);
        myDefMenu.close();
        return false;
    });

    validateForm({
        formId: 'form1'
        //formValidClass: 'Form_valid',
        //formInvalidClass: 'Form_invalid',
        //inputErrorClass: 'Input_error'
    });
    validateForm({
        formId: 'form2'
        //formValidClass: 'Form_valid',
        //formInvalidClass: 'Form_invalid',
        //inputErrorClass: 'Input_error'
    });

    var center = [54.728243, 55.955951];
    var iconCoord = [54.728243, 55.955951];
    mapInit(center, iconCoord);
});

