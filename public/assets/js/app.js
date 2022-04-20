$(document).ready(function(){
    init();
  
  });
  
  const init = () => {
    const windowWidth = $(window).width();
    hoverMenu();
    moveSelect();
    openMenu();
    moveCarrousel();
    moveTransition();
    moveProfesores();
    scrollAnimation();
    desplegableMobile();
  
    formCabecera();
    formBecas();
  
    let cookie_consent = getCookie("user_cookie_consent");
    if(cookie_consent != ""){
        document.getElementById("cookies").style.display = "none";
    }else{
        document.getElementById("cookies").style.display = "block";
    }
  
    $('#imgAlma').attr('src', '/images/svg/bubble_2.svg');
  
    let idSesion = getCookie('ID-session');
    if(idSesion){
    console.log(idSesion)
    }else{
    setCookie('ID-session', guid(), 30);
    }
  
    var swiper = new Swiper(".--testimonio_1", {
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: ".--testimonio_1_button_next",
        prevEl: ".--testimonio_1_button_prev",
        },
    });
    var swiper = new Swiper(".--testimonio_2", {
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: ".--testimonio_2_button_next",
        prevEl: ".--testimonio_2_button_prev",
        },
    });
    var swiper = new Swiper(".--testimonio_mobile", {
      spaceBetween: 30,
      loop: true,
      navigation: {
        nextEl: ".--testimonio_mobile_button_next",
        prevEl: ".--testimonio_mobile_button_prev",
        },
    });
  }
  
  
  const scrollAnimation = function(){
      $('.--go_form').on('click', function(){
          $('body, html').animate({
              scrollTop: $('#b_cabecera').offset().top
          }, 1000);
      });
      $('.--go_form_down').on('click', function(){
          $('body, html').animate({
              scrollTop: $('#b_formulario_footer').offset().top
          }, 1000);
      });
      $('.--bottom').on('click', function(){
          $('body, html').animate({
              scrollTop: $('body').offset().top
          }, 1000);
      });
      $('.--arrow').on('click', function(){
          $('body, html').animate({
              scrollTop: $('#b_creamos').offset().top
          }, 1000);
      });
      var lastScrollTop = 0;
  
      $(window).scroll(function(event){
         var st = $(this).scrollTop();
         const navHeight = Math.round($('#nav').outerHeight());
         
         $('#nav').css('top', `0px`);
         $('.--icon_menu').css('top', `10px`);
         if(st > navHeight){
             if (st > lastScrollTop){
              $('#nav').css('top', `-${navHeight}px`);
              $('.--icon_menu').css('top', `-${navHeight}px`);
              }
              else {
                  $('#nav').css('top', `0px`);
                  $('.--icon_menu').css('top', `10px`);
             }
          }else{
              $('#nav').css('top', `0px`);
              $('.--icon_menu').css('top', `10px`);
          }
         lastScrollTop = st;
      });
  }
  
  function acceptCookieConsent(){
      deleteCookie('user_cookie_consent');
      setCookie('user_cookie_consent', 1, 30);
      document.getElementById("cookies").style.display = "none";
    }
    
  
  const moveProfesores = function(){
    $('.--profesorado').on('click', function(){
        var page = $('.--profesorado').attr('data');
        var oldPage = page;
        page = parseInt(page);
        page++;
        if(page > 6){
            page = 1;
        }
        $('.--profesorado').attr('data', page);
        $('.--profesorado_franja').attr('data', page);
        $('.--profesorado_bloque').attr('data', page);
        if(page == 1){
            $(`.--profesorado_mascara_img_principal`).css('left', '0').css('right', '0');
            $(`.--profesorado_mascara_img_secundaria`).css('left', '0').css('right', '0');
        }else{
            $(`.--profesorado_mascara_img_principal[data="${oldPage}"]`).css('left', '-100%').css('right', '100%');
            $(`.--profesorado_mascara_img_secundaria[data="${oldPage}"]`).css('left', '-100%').css('right', '100%');
        }
        $(`.--profesorado_copy[data="${oldPage}"]`).fadeOut();
        $(`.--profesorado_copy[data="${page}"]`).fadeIn();
        $(`.--profesorado_texto[data="${oldPage}"]`).fadeOut();
        $(`.--profesorado_texto[data="${page}"]`).fadeIn();
  
        setTimeout(function(){
            
        }, 500);
    });
        let el = document.getElementById('__profesorado');
        if(el){
            el.addEventListener('touchstart', handleTouchStart, false);        
            el.addEventListener('touchmove', handleTouchMove, false);
        }

    var xDown = null;  

    function getTouches(evt) {
    return evt.touches ||             // browser API
        evt.originalEvent.touches; // jQuery
    }                                                     
                                                                        
    function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];                                      
    xDown = firstTouch.clientX;                                      
    };                                                
                                                                        
    function handleTouchMove(evt) {
    if ( ! xDown) {
        return;
    }

    var xUp = evt.touches[0].clientX;  

    var xDiff = xDown - xUp;
                                                                        

        if ( xDiff > 0 ) {
            var page = $('.--profesorado').attr('data');
            var oldPage = page;
            page = parseInt(page);
            page++;
            if(page > 6){
                page = 1;
            }
            $('.--profesorado').attr('data', page);
            $('.--profesorado_franja').attr('data', page);
            $('.--profesorado_bloque').attr('data', page);
            if(page == 1){
                $(`.--profesorado_mascara_img_principal`).css('left', '0').css('right', '0');
                $(`.--profesorado_mascara_img_secundaria`).css('left', '0').css('right', '0');
            }else{
                $(`.--profesorado_mascara_img_principal[data="${oldPage}"]`).css('left', '-100%').css('right', '100%');
                $(`.--profesorado_mascara_img_secundaria[data="${oldPage}"]`).css('left', '-100%').css('right', '100%');
            }
            $(`.--profesorado_copy[data="${oldPage}"]`).fadeOut();
            $(`.--profesorado_copy[data="${page}"]`).fadeIn();
            $(`.--profesorado_texto[data="${oldPage}"]`).fadeOut();
            $(`.--profesorado_texto[data="${page}"]`).fadeIn();
        }                      
            
    /* reset values */
    xDown = null;                                           
    };
  }
  
  
  const contador = function(el, sumatoria){
    var contentContador = el.html();
    contentContador = parseInt(contentContador);
    for (let i = 0; i <= contentContador; i ++) {
        setTimeout(() => {
            el.html(i);
        }, 10);
    }
  }
  
  const moveTransition = function(){
    if($( window ).width() >= 980){
        $('.--transition_niveles').on('click', function(){
            $('.--mascara_transition').addClass('--transition');
            var lastPage = $('.--b_title_transition h3:nth-last-child(1)').attr('data');
            lastPage = parseInt(lastPage);
            var page = $('.--content_transition').attr('data');
            page = parseInt(page);
            page++;
            if(page > lastPage){
                page = 1;
            }
            $('.--content_transition').attr('data', page);
            $('.--progress_transition').attr('data', page);
            setTimeout(function(){
                $('.--b_date_transition p').removeClass('--active');
                $(`.--b_date_transition p[data="${page}"]`).addClass('--active');
                $('.--b_foto_transition img').removeClass('--active');
                $(`.--b_foto_transition img[data="${page}"]`).addClass('--active');
                $('.--b_title_transition h3').removeClass('--active');
                $(`.--b_title_transition h3[data="${page}"]`).addClass('--active');
                $('.--b_copy_transition p').removeClass('--active');
                $(`.--b_copy_transition p[data="${page}"]`).addClass('--active');
            }, 450);
            setTimeout(function(){
                $('.--mascara_transition').removeClass('--transition');
            }, 500);
        });
    }
    let el = document.getElementById('__transition_niveles');
    if(el){
        el.addEventListener('touchstart', handleTouchStart, false);        
        el.addEventListener('touchmove', handleTouchMove, false);
    }
    var xDown = null;  

    function getTouches(evt) {
    return evt.touches ||             // browser API
            evt.originalEvent.touches; // jQuery
    }                                                     
                                                                            
    function handleTouchStart(evt) {
        const firstTouch = getTouches(evt)[0];                                      
        xDown = firstTouch.clientX;                                      
    };                                                
                                                                            
    function handleTouchMove(evt) {
        if ( ! xDown) {
            return;
        }

        var xUp = evt.touches[0].clientX;  

        var xDiff = xDown - xUp;
                                                                            
        
            if ( xDiff > 0 ) {
                $('.--mascara_transition').addClass('--transition');
                var lastPage = $('.--b_title_transition h3:nth-last-child(1)').attr('data');
                lastPage = parseInt(lastPage);
                var page = $('.--content_transition').attr('data');
                page = parseInt(page);
                page++;
                if(page > lastPage){
                    page = 1;
                }
                $('.--content_transition').attr('data', page);
                $('.--progress_transition').attr('data', page);
                setTimeout(function(){
                    $('.--b_date_transition p').removeClass('--active');
                    $(`.--b_date_transition p[data="${page}"]`).addClass('--active');
                    $('.--b_foto_transition img').removeClass('--active');
                    $(`.--b_foto_transition img[data="${page}"]`).addClass('--active');
                    $('.--b_title_transition h3').removeClass('--active');
                    $(`.--b_title_transition h3[data="${page}"]`).addClass('--active');
                    $('.--b_copy_transition p').removeClass('--active');
                    $(`.--b_copy_transition p[data="${page}"]`).addClass('--active');
                }, 450);
                setTimeout(function(){
                    $('.--mascara_transition').removeClass('--transition');
                }, 500);
            }                      
                
        /* reset values */
        xDown = null;                                           
    };
  }
  
  const moveCarrousel = function(){
    if($( window ).width() >= 980){
        $('#__container_carrousel').on('click', function(){
            $('.--franja_carrousel').addClass('--transition');
            var page = $('#__page_carrousel span').html();
            page = parseInt(page);
            page++;
            if(page > 4){
                page = 1;
            }
            $('.--franja_carrousel').attr('data', page);
            $('#__page_carrousel span').html(page);
            setTimeout(function(){
                $('.--b_title_carrousel h3').removeClass('--active');
                $(`.--b_title_carrousel h3[data="${page}"]`).addClass('--active');
                $('.--b_copy_carrousel p').removeClass('--active');
                $(`.--b_copy_carrousel p[data="${page}"]`).addClass('--active');
            }, 450);
            setTimeout(function(){
                $('.--franja_carrousel').removeClass('--transition');
            }, 500);
        });
    }
    let el = document.getElementById('__container_carrousel');
    if(el){
        el.addEventListener('touchstart', handleTouchStart, false);        
        el.addEventListener('touchmove', handleTouchMove, false);
    }

    var xDown = null;  

    function getTouches(evt) {
    return evt.touches ||             // browser API
            evt.originalEvent.touches; // jQuery
    }                                                     
                                                                            
    function handleTouchStart(evt) {
        const firstTouch = getTouches(evt)[0];                                      
        xDown = firstTouch.clientX;                                      
    };                                                
                                                                            
    function handleTouchMove(evt) {
        if ( ! xDown) {
            return;
        }

        var xUp = evt.touches[0].clientX;  

        var xDiff = xDown - xUp;
                                                                            
        
            if ( xDiff > 0 ) {
                $('.--franja_carrousel').addClass('--transition');
            var page = $('#__page_carrousel span').html();
            page = parseInt(page);
            page++;
            if(page > 4){
                page = 1;
            }
            $('.--franja_carrousel').attr('data', page);
            $('#__page_carrousel span').html(page);
            setTimeout(function(){
                $('.--b_title_carrousel h3').removeClass('--active');
                $(`.--b_title_carrousel h3[data="${page}"]`).addClass('--active');
                $('.--b_copy_carrousel p').removeClass('--active');
                $(`.--b_copy_carrousel p[data="${page}"]`).addClass('--active');
            }, 450);
            setTimeout(function(){
                $('.--franja_carrousel').removeClass('--transition');
            }, 500);
            }                      
                
        /* reset values */
        xDown = null;                                           
    };
  }
  
  
  const moveSelect = function(){
    $('.--menu_list_item').on('mouseenter', function(){
        let itemMarcado = $('.--select');
        let dataItemMarcado = itemMarcado.attr('data-order');
        $('.--menu_list_item').removeClass('--select');
        $(this).addClass('--select');
        $('.--menu_list_item').removeClass('--go_left');
        $('.--menu_list_item').removeClass('--go_right');
        if($(this).attr('data-order') < dataItemMarcado){
            $(this).addClass('--go_left');
            $(itemMarcado).addClass('--go_right');
            // console.log('left')
        }else{
            $(this).addClass('--go_right');
            $(itemMarcado).addClass('--go_left');
            // console.log('right');
        }
    });
  }
  
  const hoverMenu = function(){
        $('.--menu_list_item_desp span').on('mouseenter', function(){
            // console.log('desplegar');
            let attrItemMenu = $(this).attr('data');
            $('.--desplegable').addClass('--desplegado');
            $(`.--deplegable_list`).removeClass('--visible');
            $(`.--deplegable_list[data="${attrItemMenu}"]`).addClass('--visible');
            if(attrItemMenu == "rrss"){
                $('.--desplegable').addClass('--deplegable_list_rrss');
            }else{
                $('.--desplegable').removeClass('--deplegable_list_rrss');
            }
        });
        $('.--desplegable').on('mouseenter', function(){
            // console.log('desplegar');
            $('.--desplegable').addClass('--desplegado');
        });
        $('.--menu_list_item_desp, .--desplegable').on('mouseleave', function(){
            // console.log('plegar');
    
            $('.--desplegable').removeClass('--desplegado');
        });
  }
  
  const marginTop = () => {
    let navHeight = $('.--nav_primary').height();
    $('body').css('margin-top', navHeight+'px');
  }
  
  
  function isTouchDevice() {
    return (('ontouchstart' in window) ||
       (navigator.maxTouchPoints > 0) ||
       (navigator.msMaxTouchPoints > 0));
  }
  
  const openMenu = function(){
    $('.--icon_menu').on('click', function(e){
        e.preventDefault();
        console.log('open');
        $('.--nav_primary').toggleClass('--open');
        $('.--content_menu').fadeToggle();
        if($('.--links[data-select="1"]').hasClass('__current')){
            $('.--links[data-select="1"]').toggleClass('--content_menu_visible');
        }
        $('body').toggleClass('--overflow');
      });
  
  // menu display mobile
  $('.--return').on('click', function(){
    let parent = $(this).parent().attr('data-select');
          $('.--open_menu').removeClass('--open_menu');
          $('.--links[data-select="1"]').addClass('--open_menu');
          $('.--links[data-select="1"]').addClass('--content_menu_visible');
  });
  $('.__cambio_seccion').on('click', function(){
    let dataLink = $(this).attr('data-link');
    $('.--links[data-select="1"]').removeClass('--content_menu_visible');
    setTimeout(function(){
        $('.--open_menu]').removeClass('--open_menu');
    }, 400)
    $(`.--links[data-select="${dataLink}"]`).addClass('--open_menu');
  });
  }
  
//   function swipedetect(el, callback){
  
//     var touchsurface = el,
//     swipedir,
//     startX,
//     startY,
//     distX,
//     distY,
//     threshold = 150, //required min distance traveled to be considered swipe
//     restraint = 100, // maximum distance allowed at the same time in perpendicular direction
//     allowedTime = 300, // maximum time allowed to travel that distance
//     elapsedTime,
//     startTime,
//     handleswipe = callback || function(swipedir){}
  
//     touchsurface.addEventListener('touchstart', function(e){
//         var touchobj = e.changedTouches[0]
//         swipedir = 'none'
//         dist = 0
//         startX = touchobj.pageX
//         startY = touchobj.pageY
//         startTime = new Date().getTime() // record time when finger first makes contact with surface
//         e.preventDefault()
//     }, false)
  
//     touchsurface.addEventListener('touchmove', function(e){
//         e.preventDefault() // prevent scrolling when inside DIV
//     }, false)
  
//     touchsurface.addEventListener('touchend', function(e){
//         var touchobj = e.changedTouches[0]
//         distX = touchobj.pageX - startX // get horizontal dist traveled by finger while in contact with surface
//         distY = touchobj.pageY - startY // get vertical dist traveled by finger while in contact with surface
//         elapsedTime = new Date().getTime() - startTime // get time elapsed
//         if (elapsedTime <= allowedTime){ // first condition for awipe met
//             if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint){ // 2nd condition for horizontal swipe met
//                 swipedir = (distX < 0)? 'left' : 'right' // if dist traveled is negative, it indicates left swipe
//             }
//             else if (Math.abs(distY) >= threshold && Math.abs(distX) <= restraint){ // 2nd condition for vertical swipe met
//                 swipedir = (distY < 0)? 'up' : 'down' // if dist traveled is negative, it indicates up swipe
//             }
//         }
//         handleswipe(swipedir)
//         e.preventDefault()
//     }, false)
//   }
  
  // Generar id random
  let guid = () => {
      let s4 = () => {
          return Math.floor((1 + Math.random()) * 0x10000)
              .toString(16)
              .substring(1);
      }
      //return id of format 'aaaaaaaa'-'aaaa'-'aaaa'-'aaaa'-'aaaaaaaaaaaa'
      return s4() + s4() + '-' + s4() + s4();
  }
  
  // Cookies
  
      // Create cookie
  function setCookie(cname, cvalue, exdays) {
      const d = new Date();
      d.setTime(d.getTime() + (exdays*24*60*60*1000));
      let expires = "expires="+ d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
      // Delete cookie
  function deleteCookie(cname) {
      const d = new Date();
      d.setTime(d.getTime() + (24*60*60*1000));
      let expires = "expires="+ d.toUTCString();
      document.cookie = cname + "=;" + expires + ";path=/";
  }
  
      // Read cookie
  function getCookie(cname) {
      let name = cname + "=";
      let decodedCookie = decodeURIComponent(document.cookie);
      let ca = decodedCookie.split(';');
      for(let i = 0; i <ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') {
              c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
          }
      }
      return "";
  }
  
  // GET GClid cookie
  
  // Get gclid de localstorage
  
  function getParam(p) {
      var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
      return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
  }
  
  function getExpiryRecord(value) {
      var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // caducidad de 90 días, en milisegundos
  
      var expiryDate = new Date().getTime() + expiryPeriod;
      return {value: value, expiryDate: expiryDate};
  }
  
  function addGclid() {
      var gclidParam = getParam('gclid');
      // var gclidFormFields = ['gclid_field', 'gclid_field_footer']; // aquí se especifican todas las formas posibles de ID de campo de formulario
      var gclidRecord = null;
      // var currGclidFormField;
  
      var gclsrcParam = getParam('gclsrc');
      var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;
  
      // gclidFormFields.forEach(function (field) {
      //     if (document.getElementById(field)) {
      //         currGclidFormField = document.getElementById(field);
      //     }
      // });
  
      if (gclidParam && isGclsrcValid) {
          gclidRecord = getExpiryRecord(gclidParam);
          localStorage.setItem('gclid', JSON.stringify(gclidRecord));
      }
  
      var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
      var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;
  
      if (isGclidValid) {
          return gclid.value;
      }else{
          return " ";
      }
  }
  
  // window.addEventListener('load', addGclid);
  
  // Forms
  
  const formCabecera = function(){
      $('#cursos_form .--cta_submit').on('click', function(e){
          e.preventDefault();
          let validMail = false;
          let validPhone = false;
          let validAgree = false;
          let expregPhone = new RegExp('[0-9]{9}');
  
          let name = $('#cursos_form input[name="name_input"]');
          let phone = $('#cursos_form input[name="phone_input"]');
          let email = $('#cursos_form input[name="email_input"]');
          let agree = $('#cursos_form input[name="aviso_input"]');
          let notificaciones = $('#cursos_form input[name="notificaciones_input"]');
          let enterprise = $('#cursos_form input[name="enterprise_input"]');
          let canal = "Web";
  
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);
      
          if(urlParams.get('gclid')){
              canal = "Adwords";
          }
          if(urlParams.get('utm_source')){
              canal = urlParams.get('utm_source');
          }
          console.log(canal);
          if(email){
              if(email.val().indexOf('@', 0) == -1 || email.val().indexOf('.', 0) == -1) {
                  $('.--alert_cabecera_email').fadeIn();
              }else{
                  $('.--alert_cabecera_email').fadeOut();
                  validMail = true;
              }
          }else{
              $('.--alert_cabecera_email').fadeOut();
              validMail = true;
          }
  
          if(!phone.val().match(expregPhone) || !phone){
              $('.--alert_cabecera_phone').fadeIn();
          }else{
              $('.--alert_cabecera_phone').fadeOut();
              validPhone = true;
          }
  
          if(!agree.prop('checked')){
              $('.--alert_cabecera_agree').fadeIn();
          }else{
              $('.--alert_cabecera_agree').fadeOut();
              validAgree = true;
          }    
  
          if(notificaciones.prop('checked')){
              notificaciones = 1;
          }else{
              notificaciones = 0
          }
  
          if(validMail && validPhone && validAgree){
              console.log('validación ok');
              let datos = {
                  "_token": $("meta[name='csrf-token']").attr("content"),
                  'name': name.val(),
                  'phone': phone.val(),
                  'email': email.val(),
                  'notificaciones': notificaciones,
                  'canal': canal,
                  'url': window.location.href,
                  'idEnterprise': enterprise.val(),
                  'idAnalytics': getCookie('ID-session'),
                  'gclid': addGclid()
              };
              console.log(datos);
              $.ajax({
                  type: "GET",
                  url: "/send-email",
                  datatype: "text",
                  data: datos,
                  beforeSend: function() {
                      $('#cursos_form .--cta_submit').attr('disabled');
                      $('#cursos_form .--cta_submit').addClass('--spinner');
                    },
                  success: function(result){
                      $('#cursos_form .--cta_submit').removeAttr("disabled");
                      $('#cursos_form').trigger("reset");
                      $('#cursos_form .--cta_submit').removeClass('--spinner');
                      // result = JSON.parse(JSON.stringify(result));
                      console.log(result);
                      if(result == 1){
                          $('.--alert_cabecera_sucess').fadeIn();
                          fbq('track', 'CompleteRegistration');
                            var cookieSesion = getCookie('ID-session');
                            ttq.track('SubmitForm');
                            window.lintrk('track', { conversion_id: 6105324 });
                            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                  })(window,document,'script','//www.google-analytics.com/analytics.js','__gaCustomTracker');
                
                                  if (typeof gaData !== 'undefined') {
                
                                __gaCustomTracker('create', Object.keys(gaData)[0] , 'auto');
                                  }
                                 __gaCustomTracker('send', 'event', 'formulario', 'envio', 'cabecera', {'dimension3' : cookieSesion});
                      }else{
                          $('.--alert_cabecera_error').fadeIn();
                      }
                      
                     
                  },  error: function(jqXHR, textStatus, errorThrown) {
                                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
  
                        }
              });
          }
      });
          // console.log(datos);
      $('#cursos_form_footer .--cta_submit').on('click', function(e){
          e.preventDefault();
          let validMail = false;
          let validPhone = false;
          let validAgree = false;
          let expregPhone = new RegExp('[0-9]{9}');
  
          let name = $('#cursos_form_footer input[name="name_input"]');
          let phone = $('#cursos_form_footer input[name="phone_input"]');
          let email = $('#cursos_form_footer input[name="email_input"]');
          let agree = $('#cursos_form_footer input[name="aviso_input"]');
          let notificaciones = $('#cursos_form_footer input[name="notificaciones_input"]');
          let enterprise = $('#cursos_form_footer input[name="enterprise_input"]');
          let canal = "Web";
          let action = $('#cursos_form_footer input[name="action"]');
  
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);
      
          if(urlParams.get('gclid')){
              canal = "Adwords";
          }
          if(urlParams.get('utm_source')){
              canal = urlParams.get('utm_source');
          }
          console.log(canal);
          if(email){
              if(email.val().indexOf('@', 0) == -1 || email.val().indexOf('.', 0) == -1) {
                  $('.--alert_footer_email').fadeIn();
              }else{
                  $('.--alert_footer_email').fadeOut();
                  validMail = true;
              }
          }else{
              $('.--alert_footer_email').fadeOut();
              validMail = true;
          }
  
          if(!phone.val().match(expregPhone) || !phone){
              $('.--alert_footer_phone').fadeIn();
          }else{
              $('.--alert_footer_phone').fadeOut();
              validPhone = true;
          }
  
          if(!agree.prop('checked')){
              $('.--alert_footer_agree').fadeIn();
          }else{
              $('.--alert_footer_agree').fadeOut();
              validAgree = true;
          }    
  
          if(notificaciones.prop('checked')){
              notificaciones = 1;
          }else{
              notificaciones = 0
          }
  
          if(validMail && validPhone && validAgree){
              console.log('validación ok');
              let datos = {
                  "_token": $("meta[name='csrf-token']").attr("content"),
                  'name': name.val(),
                  'phone': phone.val(),
                  'email': email.val(),
                  'notificaciones': notificaciones,
                  'canal': canal,
                  'url': window.location.href,
                  'idEnterprise': enterprise.val(),
                  'idAnalytics': getCookie('ID-session'),
                  'gclid': addGclid()
              };
  
              $.ajax({
                  type: "GET",
                  url: "/send-email",
                  datatype: "text",
                  data: datos,
                  beforeSend: function() {
                      $('#cursos_form_footer .--cta_submit').attr('disabled');
                      $('#cursos_form_footer .--cta_submit').addClass('--spinner');
                    },
                  success: function(result){
                      $('#cursos_form_footer .--cta_submit').removeAttr("disabled");
                      $('#cursos_form_footer').trigger("reset");
                      $('#cursos_form_footer .--cta_submit').removeClass('--spinner');
                      // result = JSON.parse(JSON.stringify(result));
                      console.log(result);
                      if(result == 1){
                          $('.--alert_footer_sucess').fadeIn();
                          fbq('track', 'CompleteRegistration');
                            var cookieSesion = getCookie('ID-session');
                            ttq.track('SubmitForm');
                            window.lintrk('track', { conversion_id: 6105324 });
                            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                  })(window,document,'script','//www.google-analytics.com/analytics.js','__gaCustomTracker');
                
                                  if (typeof gaData !== 'undefined') {
                
                                __gaCustomTracker('create', Object.keys(gaData)[0] , 'auto');
                                  }
                                 __gaCustomTracker('send', 'event', 'formulario', 'envio', 'footer', {'dimension3' : cookieSesion});
                                 if(action.val()){
                                    window.location.href = action.val();
                                 }
                      }else{
                          $('.--alert_footer_error').fadeIn();
                      }
                      
                     
                  },  error: function(jqXHR, textStatus, errorThrown) {
                                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
  
                        }
              });
          }
  
          // console.log(datos);
      })
  
  }
  
  const formBecas = function(){
          // console.log(datos);
      $('#admision_form .--cta_submit').on('click', function(e){
          e.preventDefault();
          let validMail = false;
          let validPhone = false;
          let validAgree = false;
          let validEstudios = false;
          let validPrevia = false;
          let validObjetivo = false;
          let expregPhone = new RegExp('[0-9]{9}');
  
          let name = $('#admision_form input[name="name_input"]');
          let phone = $('#admision_form input[name="phone_input"]');
          let email = $('#admision_form input[name="email_input"]');
          let estudios = $('#admision_form select[name="plan_estudios_input"]');
          let previa = $('#admision_form input[name="formacion_previa_input"]:checked');
          let objetivo = $('#admision_form input[name="objetivo_input"]:checked');
  
          let agree = $('#admision_form input[name="aviso_input"]');
          let enterprise = $('#admision_form input[name="enterprise_input"]');
          let canal = "Web";
  
          const queryString = window.location.search;
          const urlParams = new URLSearchParams(queryString);
      
          if(urlParams.get('gclid')){
              canal = "Adwords";
          }
          if(urlParams.get('utm_source')){
              canal = urlParams.get('utm_source');
          }
  
          if(email){
              if(email.val().indexOf('@', 0) == -1 || email.val().indexOf('.', 0) == -1) {
                  $('.--alert_becas_email').fadeIn();
              }else{
                  $('.--alert_becas_email').fadeOut();
                  validMail = true;
              }
          }else{
              $('.--alert_becas_email').fadeOut();
              validMail = true;
          }
  
          if(!phone.val().match(expregPhone) || !phone){
              $('.--alert_becas_phone').fadeIn();
          }else{
              $('.--alert_becas_phone').fadeOut();
              validPhone = true;
          }
  
          if(!estudios.val() || estudios.val() == 'null' || estudios.val() == '0'){
              $('.--alert_becas_estudios').fadeIn();
          }else{
               $('.--alert_becas_estudios').fadeOut();
              validEstudios = true;
          }
  
          if(!previa.val()){
              $('.--alert_becas_previa').fadeIn();
          }else{
               $('.--alert_becas_previa').fadeOut();
              validPrevia = true;
          }
  
          if(!objetivo.val()){
              $('.--alert_becas_objetivo').fadeIn();
          }else{
               $('.--alert_becas_objetivo').fadeOut();
              validObjetivo = true;
          }
  
          if(!agree.prop('checked')){
              $('.--alert_becas_agree').fadeIn();
          }else{
              $('.--alert_becas_agree').fadeOut();
              validAgree = true;
          }    
  
  
  
          if(validMail && validPhone && validAgree && validEstudios && validPrevia && validObjetivo){
              console.log('validación ok');
              var consulta = `{
    Plan de estudios : ${estudios.val()},
    Experiencia previa : ${previa.val()},
    Objetivo : ${objetivo.val()},
  }`;
              // var consulta = {
              //     'Plan de estudios' : estudios.val(),
              //     'Experiencia previa' : previa.val(),
              //     'Objetivo' : objetivo.val(),
              // };
              let datos = {
                  "_token": $("meta[name='csrf-token']").attr("content"),
                  'name': name.val(),
                  'phone': phone.val(),
                  'email': email.val(),
                  'notificaciones': 1,
                  'consulta': consulta,
                  'canal': canal,
                  'url': window.location.href,
                  'idEnterprise': enterprise.val(),
                  'idAnalytics': getCookie('ID-session'),
                  'gclid': addGclid()
              };
  
              console.log(datos);
  
              $.ajax({
                  type: "GET",
                  url: "/send-email-becas",
                  datatype: "text",
                  data: datos,
                  beforeSend: function() {
                      $('#admision_form .--cta_submit').attr('disabled');
                    },
                  success: function(result){
                      $('#admision_form .--cta_submit').removeAttr("disabled");
                      $('#admision_form').trigger("reset");
                      // result = JSON.parse(JSON.stringify(result));
                      console.log(result);
                      if(result == 1){
                          $('.--alert_becas_sucess').fadeIn();
                          fbq('track', 'CompleteRegistration');
                            var cookieSesion = getCookie('ID-session');
                            ttq.track('SubmitForm');
                            window.lintrk('track', { conversion_id: 6105324 });
                            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                  })(window,document,'script','//www.google-analytics.com/analytics.js','__gaCustomTracker');
                
                                  if (typeof gaData !== 'undefined') {
                
                                __gaCustomTracker('create', Object.keys(gaData)[0] , 'auto');
                                  }
                                 __gaCustomTracker('send', 'event', 'formulario', 'envio', 'becas', {'dimension3' : cookieSesion});
                      }else{
                          $('.--alert_becas_error').fadeIn();
                      }
                      
                     
                  },  error: function(jqXHR, textStatus, errorThrown) {
                                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
  
                        }
              });
          }
  
          // console.log(datos);
      })
  
  }
  
  
  const desplegableMobile = () => {
      $('.--vida_bloque_img').on('click', function(){
          $('.--vida_bloque_img').removeClass('--active');
          $(this).addClass('--active');
      })
  }