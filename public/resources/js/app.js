"use strict";
String.prototype.strPad = function (len, c) {
    var s = this, c = c || '0';
    while (s.length < len) s = c + s;
    return s;
}
String.prototype.capitalize = function() {
    return this.replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
};
function RaoViecAppClass(){
    var app = {
        $route : null,
        $view : {}
    };
    var $body = $('body');
    var api = $body.data('api');
    var config = {
        max_width : $('.content-wrapper').css('max-width').replace('px', '')
    };
    var head_token = $('meta[name="csrf-token"]').attr('content');
    var auth_token = localStorage.getItem('author_session');
    console.log(auth_token);
    var notify_status = false;
    if( auth_token ){
        $.ajaxSetup({
            headers: {
                'Authorization': 'Bearer ' + auth_token
            }
        });
    }

    var current_path = '';
    var $el_route = $('#route-app');
    if($el_route.length){
        app.$header = new Vue({
            el : '#route-app',
            data : {
                user : null
            },
            methods : {
                loadView : function( view_name ){
                    $(".preloading").fadeIn("slow");
                    var link = window.location.protocol + '//' + window.location.hostname + '/' + view_name;
                    window.history.pushState(link, null, link);
                   $.get( api + '/view/' + view_name, function(view){
                      $('#page-content-loader').html( view);
                      var $page_content = $('#page-content');
                      if( $page_content.length && $page_content.data('title') != undefined ) {
                          document.title = $page_content.data('title');
                      }
                      $('.side-nav').each(function(){
                         var $side = $(this);
                         if( $side.hasClass('right-aligned') ){
                             $side.css({
                                 transform: 'translateX(100%)'
                             });
                         }else{
                             $side.css({
                                 transform: 'translateX(-100%)'
                             });
                         }
                         $('#sidenav-overlay').remove();
                         $('.drag-target').remove();
                         $('body').css({
                             width : '',
                             overflow : ''
                         });
                      });
                       app.$view.materializeInit();
                        $(".preloading").fadeOut("slow");
                   }, 'html');
                },
                /** Auth me */
                whoIs : function(){
                    var _this = this;
                    if( sessionStorage.getItem('me') ){
                        $.post(api + '/me')
                            .done(function(res){
                                if( res.success ){
                                    _this.user = res.data;
                                    _this.$forceUpdate();
                                }
                            })
                            .fail(function (error) {
                                _this.user = null;
                                sessionStorage.removeItem('me');
                                localStorage.removeItem('author_session');
                                _this.$forceUpdate();
                            });
                    }

                },
                /** do logout */
                logout : function(){
                    var _this;
                    $.post( api + '/logout' )
                        .done(function(res){
                            if( res.success ){
                                sessionStorage.removeItem('me');
                                localStorage.removeItem('author_session');
                                _this.user = null;
                            }
                        });
                }
            },
            mounted: function(){
                this.whoIs();
            }
        });
    }
    app.$view.materializeInit = function(){
        // $('select').material_select();
        $('.tabs').tabs();
        $('.slider').slider({
            height: 250
        });
    }
    app.$view.init = function(){
        /*=================== PRELOADER ===================*/
        $(window).on('load',function() {
            $(".preloading").fadeOut("slow");
        });

        /*=================== SIDENAV CATEGORY ===================*/
        $('.button-collapse').each(function(){
            var $btn = $(this);
            var edge = $btn.data('edge');
            if( edge == undefined ){
                edge ='left';
            }
            var width = $btn.data('width');
            if( width == undefined ){
                width = 250;
            }
            $btn.sideNav({
                    menuWidth: width,
                    edge: edge,
                    closeOnClick: true,
                    draggable: true,
                    onOpen: function(el) {},
                    onClose: function(el) {},
                }
            );
        });

        /*=================== SIDENAV ACCOUNT ===================*/
        $('#button-collapse-account').sideNav({
                menuWidth: 250,
                edge: 'right',
                closeOnClick: true,
                draggable: true,
                onOpen: function(el) {},
                onClose: function(el) {},
            }
        );

        /*=================== FOOTER ===================*/
        $('#page-content').css('min-height',$(document).height() - ($('#header').height() + $('#footer').height() )  );

        /*=================== CAROUSEL SLIDER  ===================*/
        $('.carousel.carousel-slider').carousel({fullWidth: true},setTimeout(autoplay, 4500));
        function autoplay() {
            $('.carousel').carousel('next');
            setTimeout(autoplay, 4500);
        }

        /*=================== QTY INPUT ===================*/
        $('<div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div>').insertAfter('.quantity input');
        $('.quantity').each(function() {
            var spinner = jQuery(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down'),
                min = input.attr('min'),
                max = input.attr('max');

            btnUp.on("click", function() {
                var oldValue = parseFloat(input.val());
                if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.on("click", function() {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });

        /*=================== GALLERY FILTERING FUCTION  ===================*/
        $(".filter-button").on("click", function() {
            var value = $(this).attr('data-filter');

            if(value == "gallery-no-filter")
            {
                $('.gallery-img-box').removeClass("gallery-hidden");
            }
            else
            {
                $(".gallery-img-box").not('.'+value).addClass("gallery-hidden");
                $('.gallery-img-box').filter('.'+value).removeClass("gallery-hidden");

            }
        });

        $('.filter-gallery .filter-button').on("click", function() {
            $('.filter-gallery').find('.filter-button.active').removeClass('active');
            $(this).addClass('active');
        });

        /*=================== MAGNIFICPOPUP GALLERY  ===================*/
        $(".gallery-list").magnificPopup({
            type: "image",
            removalDelay: 300
        });

        /*======================= PROMO  =======================*/
        if($('#promo-item').length > 0){
            $("#promo-item").owlCarousel({
                dots: false,
                loop: true,
                autoplay: true,
                slideSpeed : 2000,
                margin: 0,
                responsiveClass: true,
                nav: false,
                navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        margin: 0
                    }
                }

            });
        }

        // ======================= TESTIMONIAL  ======================= //
        if($('#testimonial-item').length > 0){
            $("#testimonial-item").owlCarousel({
                dots: true,
                loop: true,
                autoplay: true,
                slideSpeed : 2000,
                margin: 0,
                responsiveClass: true,
                nav: false,
                navText: ["<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>", "<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>"],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        margin: 0
                    }
                }

            });
        }

        /*=================== SLICK CAROUSEL FEATURED PRODUCT ===================*/
        $("#featured-product").slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2
        });

        /*=================== SLICK CAROUSEL POPULER PRODUCT ===================*/
        $("#populer-product").slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2
        });

        /*=================== SLICK CAROUSEL PRODUCT IMAGE ===================*/
        $("#product-image").slick({
            arrows: false,
            dots: true
        });
        /** init tab */
        $('.tabs').tabs();
        $('.slider').slider({
            height: 250
        });
        var $left_side = $('#nav-mobile-category');
        var $page_load_content = $('#page-content-loader');
        var $header = $('#header');
        var window_width = parseFloat( $(window).width() );
        $page_load_content.css({
            'min-height' : $(window).height() - $header.height() - 30
        });
        var remain = window_width - config.max_width;
        // if( remain > 0 ){
        //     $left_side.css({
        //         left : remain / 2
        //     });
        // }
        if( window_width > 1024 ){
            // $left_side.addClass('open');
        }

        // $(window).resize(function(){
        //     var w = parseFloat( $(this).width() );
        //     if( w > 1024 ){
        //         $left_side.addClass('open');
        //     }else{
        //         $left_side.removeClass('open');
        //     }
        // });
        // $('select').material_select();
        $(".preloading").fadeOut("slow");
        window.addEventListener('popstate', function(event) {
            event.preventDefault();
            var path_name = window.location.pathname.substr(1);
            if( path_name != current_path ){
                current_path = path_name;
                $(".preloading").fadeIn("slow");
                var link = window.location.protocol + '//' + window.location.hostname + '/' + current_path;
                $.get( api + '/view/' + current_path, function(view){
                    $('#page-content-loader').html( view);
                    var $page_content = $('#page-content');
                    if( $page_content.length && $page_content.data('title') != undefined ) {
                        document.title = $page_content.data('title');
                    }
                    $(".preloading").fadeOut("slow");
                }, 'html');
            }
        }, false);
       setTimeout(function () {
           app.$view.materializeInit();
       }, 10);

    }

    app.$view.mappingResource = function(response, resource){
        for( var key in resource ){
            if( response.hasOwnProperty(key) ){
                resource[key] = response[key];
            }
        }
    };
    return app;
}
function RaoViecComponentClass(){
    if( typeof Vue == 'undefined' ){
        return null;
    }
    var vue = Vue;
    vue.component('rSelect',{
        props : {
            value : {
                required : true
            },
            options : {
                type : Array
            },
            placeholder : {
                type: String,
                default: 'Select an option'
            },
            multiple: {
                type: Boolean,
                default: false,
            },
        },
        template: '<select :multiple="multiple"><option disabled>{{ placeholder }}</option><option v-for="item in data" :value="item.id">{{item.text}}</option></select>',
        data : function(){
            return {
                data : [],
                config: {},
                selected : this.value
            }
        },
        methods : {
            convert : function(callback){
                var _this = this;
                var data = [];
                if( typeof _this.options === 'object'){
                    data = _this.options.map(function(item){
                        var el = {};
                        el['id'] = item.hasOwnProperty('id') ? item['id'] : (item.hasOwnProperty('_id') ? item['_id'] : '');
                        var text = '';
                        if (item.hasOwnProperty('text')) {
                            text = item['text'];
                        } else if (item.hasOwnProperty('name')) {
                            text = item['name'];
                        } else if (item.hasOwnProperty('code')) {
                            text = item['code'];
                        }
                        el['text'] = String(text).capitalize();
                        return el;

                    });
                }
                _this.data = data;
               if( typeof callback  === 'function'){
                   callback();
                }
            },
            init : function(){
                var _this = this;
                setTimeout(function(){
                    $(_this.$el).material_select('destroy');
                    $(_this.$el).material_select();
                }, 10);
                $(_this.$el).on('change', function(){
                   _this.$emit('input', $(this).val());
                });

            },
            destroy : function(){

            }
        },
        created : function(){
            this.convert();
        },
        mounted: function(){
           this.init();
        },
        watch: {
            'options': function (newval) {
                var _this = this;
                this.convert(function(){
                    _this.init();
                });
                // this.init();
                // this.destroy();
                // $(this.$el).material_select();
            }
        },
    });
    return vue;
}
window.RaoViecComponent = new RaoViecComponentClass();
window.RaoViecApp = new RaoViecAppClass();
window.RaoViecApp.$view.init();
