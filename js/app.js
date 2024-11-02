jQuery(document).ready(function ($) {
    // CÓDIGO PARA ATIVAR BARRA FIXA APÓS O FORM

    setTimeout(function () {

        var tela = window.innerWidth;

        if (tela >= 1280 && tela <= 1366) {

        } else if (tela >= 1024 && tela <= 1279) {

        } else if (tela >= 768 && tela <= 1023) {

        } else if (tela <= 767) {

            $(window).scroll(function () {
                if ($(window).scrollTop() > 600) {
                    $(".barra-fixa").fadeIn("fast");
                }
                else {
                    $(".barra-fixa").fadeOut("fast");
                }
            });

        } else {

        }

    }, 1000);

    // GALERIAS
    $('.galeria-dep').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        focusOnSelect: true,
        prevArrow: '<a class="slide-arrow prev-arrow"><img src="icones/left-arrow.svg"/></a>',
        nextArrow: '<a class="slide-arrow next-arrow"><img src="icones/right-arrow.svg"/></a>',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    $('.galeria').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        focusOnSelect: true,
        prevArrow: '<a class="slide-arrow prev-arrow"><img src="icones/left.svg"/></a>',
        nextArrow: '<a class="slide-arrow next-arrow"><img src="icones/right.svg"/></a>',
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
        ]
    });
});

// FUNÇÃO YOUTUBE
(function () {

    var youtube = document.querySelectorAll(".youtube");

    for (var i = 0; i < youtube.length; i++) {

        //var source = "https://img.youtube.com/vi/" + youtube[i].dataset.embed + "/sddefault.jpg";
        var source = "img/thumb-video.jpg";

        var image = new Image();
        image.src = source;
        image.addEventListener("load", function () {
            youtube[i].appendChild(image);
        }(i));

        youtube[i].addEventListener("click", function () {

            var iframe = document.createElement("iframe");

            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allowfullscreen", "");
            iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.embed + "?rel=0&showinfo=0&autoplay=1");

            this.innerHTML = "";
            this.appendChild(iframe);
        });
    };

})();

// iMasterDesgin
jQuery(document).ready(function ($) {

    $("#form").submit(function () {
        // $('.btn-form').prop('disabled', true);
    });

    $("#TELEFONE").on({
        keydown: function (e) {
            if (e.which === 32)
                return false;
        }, change: function () {
            this.value = this.value.replace(/\s/g, "");
        }
    });

    var behavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '+55(00) 00000-0000' : '+55(00) 00000-0000';
    }, options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(behavior.apply({}, arguments), options);
        }
    };

    $("#TELEFONE").mask(behavior, options);

    document.getElementById("btn-form").disabled = true;
    let botaoForm = document.getElementById('btn-form');
    botaoForm.style.cssText =
        'color: #fff;' +
        'background-color: #008f37;';

    document.getElementById("TELEFONE").addEventListener("input", function (event) {
        var telefoneDD = document.querySelector("#TELEFONE").value;
        if (telefoneDD.length >= 18) {
            botaoForm.style.cssText =
                'color: #fff;' +
                'background-color: #008f37;';
            document.getElementById("btn-form").disabled = false;
            if (telefoneDD.length <= 16) {
                alert("Telefone Inválido");
                return false;
            }
        } else {
            botaoForm.style.cssText =
                'color: #fff;' +
                'background-color: #008f37;';
            document.getElementById("btn-form").disabled = true;
        }
    });

    var searchParams = new URLSearchParams(window.location.search);
    var getUTMmedium = searchParams.get('utm_medium');
    var getUTMcampaign = searchParams.get('utm_campaign');
    var getUTMcontent = searchParams.get('utm_content');

    if (getUTMmedium === null) {
        var getUTMmedium = "Orgânico";
    }

    if (getUTMcampaign === null) {
        var getUTMcampaign = "Nenhum";
    }

    if (getUTMcontent === null) {
        var getUTMcontent = "Nenhum";
    }

    $(".utmmedium").val(getUTMmedium);
    $(".utmcampaign").val(getUTMcampaign);
    $(".utmcontent").val(getUTMcontent);

    var utmcrm = 'utm_medium: ' + getUTMmedium + ' # ' + 'utm_campaign: ' + getUTMcampaign + ' # ' + 'utm_content: ' + getUTMcontent;

    $(".utmcrm").val(utmcrm);
});

/*
// SCRIPTS PARA FORM (MASCARA TELEFONE E TRAVA BOTÃO DO FORM)
jQuery(document).ready(function ($) {

    $("#form").submit(function () {
        $('.btn-form').prop('disabled', true);
    });

    $("#telefone").on({
        keydown: function (e) {
            if (e.which === 32)
                return false;
        },
        change: function () {
            this.value = this.value.replace(/\s/g, "");
        }
    });

    var behavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '+55(00) 00000-0000' : '+55(00) 00000-0000';
    },
        options = {
            onKeyPress: function (val, e, field, options) {
                field.mask(behavior.apply({}, arguments), options);
            }
        };

    $("#telefone").mask(behavior, options);

    // $("#telefone").blur(function () {
    //     var telefoneDD = document.querySelector("#telefone").value;
    //     if (telefoneDD.length <= 16) {
    //         alert("Telefone Inválido");
    //         return false;
    //     }
    // });

    // VALIDAÇÃO SE TELEFONE ESTÁ ESCRITO CORRETO
    //desabilita o botão no início
    document.getElementById("btn-form").disabled = true;
    let botaoForm = document.getElementById('btn-form');
    // Altera a cor para desabilitado do botão
    botaoForm.style.cssText =
        'color: #fff;' +
        'background-color: #008f37;';

    //cria um event listener que escuta mudanças no input
    document.getElementById("telefone").addEventListener("input", function (event) {
        //busca conteúdo do input
        var telefoneDD = document.querySelector("#telefone").value;
        //valida conteudo do input 
        if (telefoneDD.length >= 18) {
            //habilita o botão
            // Altera a cor para habilitado do botão
            botaoForm.style.cssText =
                'color: #fff;' +
                'background-color: #008f37;';
            document.getElementById("btn-form").disabled = false;
            if (telefoneDD.length <= 16) {
                alert("Telefone Inválido");
                return false;
            }
        } else {
            //desabilita o botão se conteúdo alterado para inválido
            // Altera a cor para desabilitado do botão
            botaoForm.style.cssText =
                'color: #fff;' +
                'background-color: #008f37;';
            document.getElementById("btn-form").disabled = true;
        }
    });

    var searchParams = new URLSearchParams(window.location.search);
    var getUTMmedium = searchParams.get('utm_medium');
    var getUTMcampaign = searchParams.get('utm_campaign');
    var getUTMcontent = searchParams.get('utm_content');

    if (getUTMmedium === null) {
        var getUTMmedium = "Orgânico";
    }

    if (getUTMcampaign === null) {
        var getUTMcampaign = "Nenhum";
    }

    if (getUTMcontent === null) {
        var getUTMcontent = "Nenhum";
    }

    $(".utmmedium").val(getUTMmedium);
    $(".utmcampaign").val(getUTMcampaign);
    $(".utmcontent").val(getUTMcontent);

    var utmcrm = 'utm_medium: ' + getUTMmedium + ' # ' + 'utm_campaign: ' + getUTMcampaign + ' # ' + 'utm_content: ' + getUTMcontent;

    $(".utmcrm").val(utmcrm);

});
*/

// ALTERA ANO AUTOMÁTICO
// const ano = document.getElementById("ano");
// const anoAtual = new Date();
// ano.innerHTML = anoAtual.getFullYear();
