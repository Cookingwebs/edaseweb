$(document).ready(function(){
    var currentdate = new Date(); 
        var datetime = currentdate.getDate() + "/"
                    + (currentdate.getMonth()+1)  + "/" 
                    + currentdate.getFullYear() + " "  
                    + currentdate.getHours() + ":"  
                    + currentdate.getMinutes() + ":" 
                    + currentdate.getSeconds();
        $('#__date').val(datetime);
        var scriptURL;
        if(!$('#mail2').val()){
            scriptURL = 'https://script.google.com/macros/s/AKfycbz8o0kHKOOTbZEhMBIZMLgVtGFfqaPief6BmcONhnbdN9UbjCLmzcTgiFNix4y50IlY/exec';
        }else{
            scriptURL = 'https://script.google.com/macros/s/AKfycbxLU0sLdnK05S6jSidlHG8PiR8e9ELbT-rdf8Le1EotRp59CAzW0uCLQS3EXu6SrCXl/exec';
        }
        const form = document.forms['confirmacion'];
        
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
              console.log(response);
              $('.--aula-abierta-gracias').fadeIn();
            })
            .catch(error => console.error('Error!', error.message));


});