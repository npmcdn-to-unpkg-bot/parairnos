var searchVisible = 0;
var transparent = true;

var transparentDemo = true;
var fixedTop = false;

var navbar_initialized = false;

$(document).ready(function(){

    window_width = $(window).width();
    burger_menu = $('nav[role="navigation"]').hasClass('navbar-burger') ? true : false;

    $('.product-chooser').not('.disabled').find('.product-chooser-item').on('click', function() {
        $(this).parent().parent().find('.product-chooser-item').removeClass('selected');
        $(this).addClass('selected');
        $(this).find('input[type="radio"]').prop("checked", true);
    });

    // Activando Morphing Buttons 
    $('[data-toggle="morphing"]').each(function() {
        $(this).morphingButton();
    });

    //  Activando tooltips   
    $('[rel="tooltip"]').tooltip();

    //    Activando bootstrap-select
    if ($(".selectpicker").length != 0) {
        $(".selectpicker").selectpicker();
    }

    if ($("#parairnos-wizard").length != 0) {

        // WIZARD
        // =================================================================
        $('#parairnos-wizard').bootstrapWizard({
            tabClass: 'wz-steps',
            nextSelector: '.next',
            previousSelector: '.previous',
            // onTabClick: function(tab, navigation, index) {
            //     return false;
            // },
            onInit: function() {
                $('#parairnos-wizard').find('.finish').hide().prop('disabled', true);
            },
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $pasos = $total - 1;
                var $current = index + 1;
                var $percent = (index / $pasos) * 100;
                var wdt = 100 / $total;
                var lft = wdt * index;
                var margin = (100 / $total) / 2;

                $('#parairnos-wizard').find('.progress-bar').css({
                    width: $percent + '%',
                    'margin': 0 + 'px '
                });

                //$('#parairnos-wizard').find('.progress-bar').css({width:$percent+'%', 'margin': 0 + 'px ' + margin + '%'});

                if ($current == 2) {
                    google.maps.event.trigger(map, 'resize');
                }

                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $('#parairnos-wizard').find('.next').hide();
                    $('#parairnos-wizard').find('.previous').hide();
                    $('#parairnos-wizard').find('.finish').show();
                    $('#parairnos-wizard').find('.second-footer').show();
                    $('#parairnos-wizard').find('.first-footer').hide();
                    $('#parairnos-wizard').find('.finish').prop('disabled', false);
                } else {
                    $('#parairnos-wizard').find('.first-footer').show();
                    $('#parairnos-wizard').find('.second-footer').hide();
                    $('#parairnos-wizard').find('.next').show();
                    $('#parairnos-wizard').find('.finish').hide().prop('disabled', true);
                }
            }
        });

        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            google.maps.event.trigger(document.getElementById("map"), 'resize');

        });

        $('a[href="#tab2"]').on('shown.bs.tab', function(e) {
            google.maps.event.trigger(map, 'resize');
        });
    }

    (function($) {
        if ($('#calendario-ocupacional').length != 0) {
            $.noConflict();
            $("#calendario-ocupacional").datepick({
                onShow: $.datepick.monthOnly,
                showTrigger: '#calImg',
                pickerClass: 'cal-ocupacional',
                changeMonth: false,
                changeYear: false,
                selectOtherMonths: false,
                showOtherMonths: true,
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>',
                rangeSelect: false,
                monthsToShow: 3,
                monthsToStep: 1,
                monthsToJump: 1,
                minDate: 1,
                monthsOffset: 0,
                showTrigger: '#calImg',
                multiSelect: 100,
                onSelect: function (dates) {}
            });
            $('#calendario-ocupacional').datepick(
                'setDate', ['11/01/2016', '12/01/2016', '13/01/2016', '14/01/2016', '15/01/2016', '16/01/2016', '17/01/2016', '21/01/2016', '22/01/2016', '23/01/2016', '24/01/2016', '25/01/2016', '26/01/2016', '27/01/2016', '28/01/2016', '29/01/2016', '30/01/2016', '31/01/2016', '01/02/2016', '02/02/2016', '03/02/2016', '04/02/2016', '05/02/2016', '06/02/2016', '07/02/2016', '08/02/2016', '09/02/2016', '10/02/2016', '11/02/2016', '12/02/2016', '13/02/2016', '14/02/2016', '15/02/2016', '16/02/2016', '17/02/2016', '18/02/2016', '19/02/2016', '20/02/2016', '21/02/2016', '22/02/2016', '23/02/2016', '24/02/2016', '25/02/2016', '26/02/2016', '06/03/2016', '07/03/2016', '08/03/2016', '09/03/2016', '10/03/2016', '11/03/2016', '12/03/2016', '13/03/2016', '14/03/2016', '15/03/2016', '16/03/2016', '17/03/2016', '18/03/2016', '19/03/2016', '20/03/2016', '21/03/2016', '22/03/2016', '23/03/2016', '24/03/2016', '25/03/2016', '26/03/2016', '27/03/2016', '28/03/2016', '29/03/2016', '30/03/2016', '31/03/2016', '01/04/2016', '02/04/2016', '03/04/2016', '04/04/2016', '05/04/2016', '06/04/2016', '07/04/2016', '08/04/2016', '09/04/2016', '10/04/2016', '11/04/2016', '12/04/2016', '13/04/2016', '14/04/2016', '15/04/2016', '16/04/2016', '17/04/2016', '18/04/2016', '19/04/2016', '20/04/2016', '21/04/2016', '22/04/2016']
            );
        }
    })(jQuery);

    (function($) {
        if ($('#calendario-ocupacional-admin').length != 0) {
            $.noConflict();
            $("#calendario-ocupacional-admin").datepick({
                onShow: $.datepick.monthOnly,
                showTrigger: '#calImg',
                pickerClass: 'cal-ocupacional',
                changeMonth: false,
                changeYear: false,
                selectOtherMonths: false,
                showOtherMonths: true,
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>',
                rangeSelect: false,
                monthsToShow: 6,
                monthsToStep: 2,
                monthsToJump: 1,
                minDate: 1,
                monthsOffset: 0,
                showTrigger: '#calImg',
                multiSelect: 100
            });
            $('#calendario-ocupacional-admin').datepick(
                'setDate', ['11/01/2016', '12/01/2016', '13/01/2016', '14/01/2016', '15/01/2016', '16/01/2016', '17/01/2016', '21/01/2016', '22/01/2016', '23/01/2016', '24/01/2016', '25/01/2016', '26/01/2016', '27/01/2016', '28/01/2016', '29/01/2016', '30/01/2016', '31/01/2016', '01/02/2016', '02/02/2016', '03/02/2016', '04/02/2016', '05/02/2016', '06/02/2016', '07/02/2016', '08/02/2016', '09/02/2016', '10/02/2016', '11/02/2016', '12/02/2016', '13/02/2016', '14/02/2016', '15/02/2016', '16/02/2016', '17/02/2016', '18/02/2016', '19/02/2016', '20/02/2016', '21/02/2016', '22/02/2016', '23/02/2016', '24/02/2016', '25/02/2016', '26/02/2016', '06/03/2016', '07/03/2016', '08/03/2016', '09/03/2016', '10/03/2016', '11/03/2016', '12/03/2016', '13/03/2016', '14/03/2016', '15/03/2016', '16/03/2016', '17/03/2016', '18/03/2016', '19/03/2016', '20/03/2016', '21/03/2016', '22/03/2016', '23/03/2016', '24/03/2016', '25/03/2016', '26/03/2016', '27/03/2016', '28/03/2016', '29/03/2016', '30/03/2016', '31/03/2016', '01/04/2016', '02/04/2016', '03/04/2016', '04/04/2016', '05/04/2016', '06/04/2016', '07/04/2016', '08/04/2016', '09/04/2016', '10/04/2016', '11/04/2016', '12/04/2016', '13/04/2016', '14/04/2016', '15/04/2016', '16/04/2016', '17/04/2016', '18/04/2016', '19/04/2016', '20/04/2016', '21/04/2016', '22/04/2016']
            );
        }
    })(jQuery);


    (function($) {
        $('#dpd1,#dpd2').datepick({
            changeMonth: false,
            changeYear: false,
            prevText: '<i class="fa fa-angle-left"></i>',
            nextText: '<i class="fa fa-angle-right"></i>',
            onSelect: customRange,
            showTrigger: '#calImg'
        });

        function customRange(dates) {
            if (this.id == 'dpd1') {
                $('#dpd2').datepick('option', 'minDate', dates[0] || null);
            } else {
                $('#dpd1').datepick('option', 'maxDate', dates[0] || null);
            }
        }

        if ($(".label-tooltip").length != 0) {
            $('.label-tooltip').tooltip();
        }

        if ($(".btn-tooltip").length != 0) {
            $('.btn-tooltip').tooltip();
        }

        // Carousel
        if ($(".carousel").length != 0) {
            $('.carousel').carousel({
                interval: 4000
            });
        }

        $('.form-control').on("focus", function() {
            $(this).parent('.input-group').addClass("input-group-focus");
        }).on("blur", function() {
            $(this).parent(".input-group").removeClass("input-group-focus");
        });


        gsdk = {
                misc:{
        navbar_menu_visible: 0
    },
    initRightMenu: function(){
         if(!navbar_initialized){
             $navbar = $('nav').find('.navbar-collapse').first().clone(true);

             ul_content = '';

             $navbar.children('ul').each(function(){
                content_buff = $(this).html();
                ul_content = ul_content + content_buff;
             });

             ul_content = '<ul class="nav navbar-nav">' + ul_content + '</ul>';
             $navbar.html(ul_content);

             $('body').append($navbar);

             background_image = $navbar.data('nav-image');
             if(background_image != undefined){
                $navbar.css('background',"url('" + background_image + "')")
                       .removeAttr('data-nav-image')
                       .css('background-size',"cover")
                       .addClass('has-image');
             }


             $toggle = $('.navbar-toggle');

             $navbar.find('a').removeClass('btn btn-round btn-default');
             $navbar.find('button').removeClass('btn-round btn-fill btn-info btn-primary btn-success btn-danger btn-warning btn-neutral');
             $navbar.find('button').addClass('btn-simple btn-block');

            $toggle.click(gsdk.toggleSidebarMenu);

            navbar_initialized = true;
        }

    },

    toggleSidebarMenu: function(){
        if(gsdk.misc.navbar_menu_visible == 1) {
            $('html').removeClass('nav-open');
            gsdk.misc.navbar_menu_visible = 0;
            $('.body-click').remove();
             setTimeout(function(){
                $toggle.removeClass('toggled');
             }, 400);

        } else {
            setTimeout(function(){
                $toggle.addClass('toggled');
            }, 430);

            div = '<div class="body-click"></div>';
            $(div).appendTo("body").click(function() {
                $('html').removeClass('nav-open');
                gsdk.misc.navbar_menu_visible = 0;
                $('.body-click').remove();
                 setTimeout(function(){
                    $toggle.removeClass('toggled');
                 }, 400);
            });

            $('html').addClass('nav-open');
            gsdk.misc.navbar_menu_visible = 1;
        }
    },

    checkScrollForTransparentNavbar: debounce(function() {
            if($(document).scrollTop() > 260 ) {
                if(transparent) {
                    transparent = false;
                    $('nav[role="navigation"]').removeClass('navbar-transparent');
                }
            } else {
                if( !transparent ) {
                    transparent = true;
                    $('nav[role="navigation"]').addClass('navbar-transparent');
                }
            }
    }, 17),

            fitBackgroundForCards: function() {
                $('.card').each(function() {
                    if (!$(this).hasClass('card-product') && !$(this).hasClass('card-user')) {
                        image = $(this).find('.image img');

                        image.hide();
                        image_src = image.attr('src');

                        $(this).find('.image').css({
                            "background-image": "url('" + image_src + "')",
                            "background-position": "center center",
                            "background-size": "cover"
                        });
                    }
                });
            },
            initPopovers: function() {
                if ($('[data-toggle="popover"]').length != 0) {
                    $('body').append('<div class="popover-filter"></div>');

                    //    Activate Popovers
                    $('[data-toggle="popover"]').popover().on('show.bs.popover', function() {
                        $('.popover-filter').click(function() {
                            $(this).removeClass('in');
                            $('[data-toggle="popover"]').popover('hide');
                        });
                        $('.popover-filter').addClass('in');
                    }).on('hide.bs.popover', function() {
                        $('.popover-filter').removeClass('in');
                    });

                }
            },
    initCollapseArea: function(){
        $('[data-toggle="gsdk-collapse"]').each(function () {
            var thisdiv = $(this).attr("data-target");
            $(thisdiv).addClass("gsdk-collapse");
        });

        $('[data-toggle="gsdk-collapse"]').hover(function(){
            var thisdiv = $(this).attr("data-target");
            if(!$(this).hasClass('state-open')){
                $(this).addClass('state-hover');
                $(thisdiv).css({
                    'height':'30px'
                });
            }

        },
        function(){
            var thisdiv = $(this).attr("data-target");
            $(this).removeClass('state-hover');

            if(!$(this).hasClass('state-open')){
                $(thisdiv).css({
                    'height':'0px'
                });
            }
        }).click(function(event){
                event.preventDefault();

                var thisdiv = $(this).attr("data-target");
                var height = $(thisdiv).children('.panel-body').height();

                if($(this).hasClass('state-open')){
                    $(thisdiv).css({
                        'height':'0px',
                    });
                    $(this).removeClass('state-open');
                } else {
                    $(thisdiv).css({
                        'height':height + 30,
                    });
                    $(this).addClass('state-open');
                }
            });
    },
            initSliders: function() {
                // Sliders for demo purpose in refine cards section
                if ($('#slider-range').length != 0) {
                    $("#slider-range").slider({
                        range: true,
                        min: 0,
                        max: 500,
                        values: [75, 300],
                    });
                }

                function addCommas(nStr) {
                    nStr += '';
                    x = nStr.split('.');
                    x1 = x[0];
                    x2 = x.length > 1 ? '.' + x[1] : '';
                    var rgx = /(\d+)(\d{3})/;
                    while (rgx.test(x1)) {
                        x1 = x1.replace(rgx, '$1' + ',' + '$2');
                    }
                    return x1 + x2;
                }

                if ($('#refine-price-range').length != 0) {
                    $("#refine-price-range").slider({
                        range: true,
                        min: 10000,
                        max: 100000,
                        values: [10000, 60000],
                        slide: function(event, ui) {
                            min_price = ui.values[0];
                            max_price = ui.values[1];
                            $(".price-left").val("£" + addCommas(ui.values[0].toString()));
                            $(".price-right").val("£" + addCommas(ui.values[1]));
                            $(this).siblings('.price-left').html('CLP ' + min_price);
                            $(this).siblings('.price-right').html('CLP ' + max_price)
                        }
                    });
                }
                if ($('#slider-default').length != 0 || $('#slider-default2').length != 0) {
                    $("#slider-default, #slider-default2").slider({
                        value: 70,
                        orientation: "horizontal",
                        range: "min",
                        animate: true
                    });
                }
            },
            initVideoCards: function() {
                $('[data-toggle="video"]').click(function() {
                    id_video = $(this).data('video');
                    video = $('#' + id_video).get(0);

                    card_parent = $(this).closest('.card');

                    if (video.paused) {
                        video.play();
                        $(this).html('<i class="fa fa-pause"></i> Pause');
                        card_parent.addClass('state-play');
                    } else {
                        video.pause();
                        $(this).html('<i class="fa fa-play"></i> Play');
                        card_parent.removeClass('state-play');
                    }
                });
            },
            initNavbarSearch: function() {
                $('[data-toggle="search"]').click(function() {
                    if (searchVisible == 0) {
                        searchVisible = 1;
                        $(this).parent().addClass('active');
                        $('.navbar-search-form').fadeIn(function() {
                            $('.navbar-search-form input').focus();
                        });
                    } else {
                        searchVisible = 0;
                        $(this).parent().removeClass('active');
                        $(this).blur();
                        $('.navbar-search-form').fadeOut(function() {
                            $('.navbar-search-form input').blur();
                        });
                    }
                });
            }
        }

        // Init navigation toggle for small screens
        if(window_width < 768 || burger_menu){
            gsdk.initRightMenu();
        }

        // activate collapse right menu when the windows is resized
        $(window).resize(function(){
            if($(window).width() < 768){
                gsdk.initRightMenu();
            } else if(!burger_menu && gsdk.misc.navbar_menu_visible){
                gsdk.toggleSidebarMenu();
            }
        });

        $(document).load().scrollTop(0);

    })(jQuery);


    // Make the images from the card fill the hole space
    gsdk.fitBackgroundForCards();

    // Init icon search action for the navbar
    gsdk.initNavbarSearch();

    // Init popovers 
    gsdk.initPopovers();

    // Init Collapse Areas
    gsdk.initCollapseArea();

    // Init Sliders
    gsdk.initSliders();

    //  Init video card actions
    gsdk.initVideoCards();

});


var myLatlng = new google.maps.LatLng(-33.0102757, -71.5526893);
var mapOptions = {
    draggable: false,
    zoom: 14,
    center: myLatlng,
    scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);

var marker = new google.maps.Marker({
    position: myLatlng,
    title: "Hello World!"
});

// To add the marker to the map, call setMap();
marker.setMap(map);


var map;
var myCenter = new google.maps.LatLng(-33.0102757, -71.5526893);
var marker = new google.maps.Marker({
    position: myCenter
});

function initialize() {
    var mapProp = {
        center: myCenter,
        zoom: 14,
        draggable: false,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("map-canvas-alojamiento"), mapProp);
    marker.setMap(map);

    google.maps.event.addListener(marker, 'click', function() {

        infowindow.setContent(contentString);
        infowindow.open(map, marker);

    });
};
google.maps.event.addDomListener(window, 'load', initialize);

google.maps.event.addDomListener(window, "resize", resizingMap());

$('#myMapModal').on('show.bs.modal', function() {
    //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!! ;-)
    resizeMap();
})

function resizeMap() {
    if (typeof map == "undefined") return;
    setTimeout(function() {
        resizingMap();
    }, 400);
}

function resizingMap() {
    if (typeof map == "undefined") return;
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center);
}


// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
    var timeout;
    return function() {
        var context = this,
            args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        }, wait);
        if (immediate && !timeout) func.apply(context, args);
    };
};

