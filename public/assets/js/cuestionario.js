

$(document).ready(function(){

    // console.log(['c', 'b', 'd', 'b', 'a', 'c', 'a', 'd', 'b', 'c']);

    let currentFrame =  $( ".--b_prueba_frame[data-show='1']" ).attr('data-frame');
    $('.--state-current').html(currentFrame);
    let height = Array();
    for ( var i = 0; i < $( ".--b_prueba_frame-question" ).length; i++ ) {
    //    console.log( $( `.--b_prueba_frame[data-frame='${i}']` ).height() );
    height.push($( `.--b_prueba_frame[data-frame='${i}']` ).height());
      }
      let maxHeight = Math.max(...height);
    //   console.log(height);
    if($( document ).width() > 980){
        $('.--b_prueba_frame-question').css('min-height', maxHeight-60);
    }


      


    $('.--cta.--next').on('click', function(){
        let data = $(this).attr('data');
        if (data == '0' ){
            if($('#phone_1').val() == ""){
                $('.--error').css('display','block');
                return null;
            }else{
                $('.--error').css('display','none');
            }
        }
        
        // console.log($( ".--b_prueba_frame[data-show='1']" ).attr('data-frame'));
       let currentFrame =  $( ".--b_prueba_frame[data-show='1']" ).attr('data-frame');
       currentFrame = parseInt(currentFrame);
    //    console.log(currentFrame+1);
    $( ".--b_prueba_frame[data-show='1']" ).addClass('opacity');
    setTimeout(function(){
        $( ".--b_prueba_frame[data-show='1']" ).attr('data-show', "0");
        $( `.--b_prueba_frame[data-frame='${currentFrame+1}']` ).attr('data-show', "1");
        setTimeout(function(){
            $( `.--b_prueba_frame[data-frame='${currentFrame+1}']` ).removeClass('opacity');
            $('.--process').attr('data',currentFrame+1);
            $('.--state-current').html(currentFrame+1);
        },500);
    }, 500);
    });
    $('.--cta.--prev').on('click', function(){
        let data = $(this).attr('data');
        // $('.--b_prueba_frame').get().forEach(element => {
        //     console.log(element);
        //     // if(element.attr('data-show') == "1"){
        //     // }
        // });
        
        // console.log($( ".--b_prueba_frame[data-show='1']" ).attr('data-frame'));
       let currentFrame =  $( ".--b_prueba_frame[data-show='1']" ).attr('data-frame');
       currentFrame = parseInt(currentFrame);
    //    console.log(currentFrame+1);
    $( ".--b_prueba_frame[data-show='1']" ).addClass('opacity');
    setTimeout(function(){
        $( ".--b_prueba_frame[data-show='1']" ).attr('data-show', "0");
        $( `.--b_prueba_frame[data-frame='${currentFrame-1}']` ).attr('data-show', "1");
        setTimeout(function(){
            $( `.--b_prueba_frame[data-frame='${currentFrame-1}']` ).removeClass('opacity');
            $('.--process').attr('data',currentFrame-1);
            $('.--state-current').html(currentFrame-1);
        },500);
    }, 500);
    });
    $('#__sendQuiz').on('click', function(e){
        e.preventDefault();
        $(this).html('Enviando...');
        $(this).prop('disabled', true);
        const form = document.forms['resultados']
        var currentdate = new Date(); 
        var datetime = currentdate.getDate() + "/"
                    + (currentdate.getMonth()+1)  + "/" 
                    + currentdate.getFullYear() + " "  
                    + currentdate.getHours() + ":"  
                    + currentdate.getMinutes() + ":" 
                    + currentdate.getSeconds();
        $('#__timestamp').val(datetime);
        if($('#email_1').val() || $('#phone_1').val()){
            $('#__email').val($('#email_1').val());
            $('#__phone').val($('#phone_1').val());
        }

        let respuestas = respuestasQuiz();
        // console.log( respuestas );
        let validado = Array();
        let scriptURL;
        switch ($('#lanzamiento-page').attr('data')) {
            case '1':
                validado = ['c', 'b', 'd', 'b', 'a', 'c', 'a', 'd', 'b', 'c'];
                resultados(respuestas, validado);
                scriptURL = 'https://script.google.com/macros/s/AKfycbxGtjbwuxLQGgw5TkrY3I332jYZUEfIdEl9Fhas4lCbf6BFCs6mZyZnOqcVthYCl-yEsQ/exec';
                break;
            case '2':
                validado = ['b', 'a', 'c', 'a', 'd', 'a', 'b', 'c', 'd', 'b'];
                resultados(respuestas, validado);
                scriptURL = 'https://script.google.com/macros/s/AKfycbwq4eOa52o59QjG9EWUF04zRGB0NfNgdcsvsTDH8-X6Xqxv4yi6lO5zk_kGJheL5trCtQ/exec';
                break;
            case '3':
                validado = ['c', 'a', 'a', 'c', 'c', 'a', 'd', 'b', 'c', 'a'];
                resultados(respuestas, validado);
                scriptURL = 'https://script.google.com/macros/s/AKfycbwDVhnojvimjtn-yxnE-tZJZTYm_XKQkKDxWNWyiSoi_VzrdntAkVEL_wkHnibpMjGW/exec';
                break;
        }
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => {
                    let currentFrame =  $( ".--b_prueba_frame[data-show='1']" ).attr('data-frame');
                    currentFrame = parseInt(currentFrame);
                    //    console.log(currentFrame+1);
                    $( ".--b_prueba_frame[data-show='1']" ).addClass('opacity');
                    setTimeout(function(){
                        $( ".--b_prueba_frame[data-show='1']" ).attr('data-show', "0");
                        $( `.--b_prueba_frame[data-frame='${currentFrame+1}']` ).attr('data-show', "1");
                        setTimeout(function(){
                            $( `.--b_prueba_frame[data-frame='${currentFrame+1}']` ).removeClass('opacity');
                            $('.--process').attr('data',currentFrame+1);
                            $('.--state-current').html(currentFrame+1);
                            $('.--process').addClass('d-none');
                            $('.--state').addClass('d-none');
                            tsParticles.load("lanzamiento-page", {
                                "fullScreen": {
                                  "zIndex": 1
                                },
                                "particles": {
                                  "number": {
                                    "value": 0
                                  },
                                  "color": {
                                    "value": [
                                      "#00FFFC",
                                      "#FC00FF",
                                      "#fffc00"
                                    ]
                                  },
                                  "shape": {
                                    "type": [
                                      "circle",
                                      "square",
                                      "triangle"
                                    ],
                                    "options": {}
                                  },
                                  "opacity": {
                                    "value": 1,
                                    "animation": {
                                      "enable": true,
                                      "minimumValue": 0,
                                      "speed": 2,
                                      "startValue": "max",
                                      "destroy": "min"
                                    }
                                  },
                                  "size": {
                                    "value": 4,
                                    "random": {
                                      "enable": true,
                                      "minimumValue": 2
                                    }
                                  },
                                  "links": {
                                    "enable": false
                                  },
                                  "life": {
                                    "duration": {
                                      "sync": true,
                                      "value": 5
                                    },
                                    "count": 1
                                  },
                                  "move": {
                                    "enable": true,
                                    "gravity": {
                                      "enable": true,
                                      "acceleration": 10
                                    },
                                    "speed": {
                                      "min": 10,
                                      "max": 20
                                    },
                                    "decay": 0.1,
                                    "direction": "none",
                                    "straight": false,
                                    "outModes": {
                                      "default": "destroy",
                                      "top": "none"
                                    }
                                  },
                                  "rotate": {
                                    "value": {
                                      "min": 0,
                                      "max": 360
                                    },
                                    "direction": "random",
                                    "move": true,
                                    "animation": {
                                      "enable": true,
                                      "speed": 60
                                    }
                                  },
                                  "tilt": {
                                    "direction": "random",
                                    "enable": true,
                                    "move": true,
                                    "value": {
                                      "min": 0,
                                      "max": 360
                                    },
                                    "animation": {
                                      "enable": true,
                                      "speed": 60
                                    }
                                  },
                                  "roll": {
                                    "darken": {
                                      "enable": true,
                                      "value": 25
                                    },
                                    "enable": true,
                                    "speed": {
                                      "min": 15,
                                      "max": 25
                                    }
                                  },
                                  "wobble": {
                                    "distance": 30,
                                    "enable": true,
                                    "move": true,
                                    "speed": {
                                      "min": -15,
                                      "max": 15
                                    }
                                  }
                                },
                                "emitters": {
                                  "life": {
                                    "count": 0,
                                    "duration": 0.1,
                                    "delay": 0.4
                                  },
                                  "rate": {
                                    "delay": 0.1,
                                    "quantity": 150
                                  },
                                  "size": {
                                    "width": 0,
                                    "height": 0
                                  }
                                }
                              });
                        },500);
                    }, 500);
                })
                .catch(error => {
                    $(this).html('Finalizar prueba >');
                    alert('error');
                });
    });
});

function respuestasQuiz(){
    let respuestas = Array();
    for ( var i = 1; i < $( ".--b_prueba_frame-question" ).length-1; i++ ) {
        respuestas.push($( `input[name="p${i}"]:checked` ).val());
    }
   return respuestas;
}

function resultados( respuestas, validado ) {
    let resultados = 0;
        var i = validado.length;
        while (i--) {
          if (validado[i] == respuestas[i]) resultados++;
        }
        $('#__nota').val(resultados);
}