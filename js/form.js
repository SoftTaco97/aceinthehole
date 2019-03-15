$(function(){
    "use strict";

    /* Form Submission */
    $('form').submit(function(event){
        // Stopping the form from posting
        event.preventDefault();

        let $form = $('form').attr('id');

        // Grabbing the form values
        let $name = $('#name').val();
        let $email = $('#email').val();
        let $number = $('#telephone').val();
        let $message = $('#message').val();

        let error = formValidation($name, $email, $number, $form);
        if(error){
            formMessage(error, false);
            return;
        }

        /* AJAX Info */
        let data = { 
            'form': $form,
            'name': $name, 
            'email': $email,
            'telephone': $number,
            'message': $message,
        }  
        
        if($form !== "contactForm"){
            data.ecName = $('#ecName').val();
            data.age = $('#age').val();
            data.gender = $('#gender').val();
            data.satRegister = ($('#satRegisterType').val())? $('#satRegisterType').val(): 'N/A';
            data.sunRegister = ($('#sunRegisterType').val())? $('#sunRegisterType').val(): 'N/A';
            data.satEvent = ($('#satEvent').val())? $('#satEvent').val(): 'N/A';
            data.sunEvent = ($('#sunEvent').val())? $('#sunEvent').val(): 'N/A';
        }

        /* Sending the info to the server */
        $.ajax({
            data: data,
            url: ($form == "contactForm")? './form.php': '../form.php',
            method: 'POST',
            success: function(response){
                var data = JSON.parse(response); 
                if(data.status == 200){
                    formMessage(data.message, true);
                    $('input, textarea, select').val("");
                    return;
                }
                formMessage(data.message, false);
            },
            error: function(xhr, desc, err){
                console.log(xhr, desc, err);
            }
        });
    });
});

/* Helper Functions */

function formValidation($name, $email, $number, $form){
    /* Validation */ 
    let valEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/g;
    let valNum = /^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$/g;
    let error = null;

    if(!$name){
        error = "Please enter your name";
    } else if(!valEmail.test(String($email).toLowerCase())){
        error = "Please enter a valid email";
    } else if(!valNum.test($number)){
        error = "Please enter a valid number";
    } else if($form !== 'contactForm'){
        if(!$('#ecName').val()){
            error = "Please enter an Emergency Contact Name";
        } else if($('#gender').val() == 'Gender'){
            error = "Please select a gender";
        } else if(!$('#age').val()){
            error = "Please enter your age";
        }  else if(!$('#satEvent').val() && !$('#sunEvent').val()){
            error = "Please enter an event";
        } else if(!$('#satRegisterType').val() && !$('#sunRegisterType').val()){
            error = "Please select a registration type";
        }
    }
    return error;
}

function formMessage(msg, success){
    removeMes(false);
    let style = (success)? 
        'style="border: 1px solid green; color: green; display: none;"': 
        'style="border: 1px solid red; color: red; display: none;"';

    $('.card').append(
        '<div id="frmMes"' + style + '>' + msg + '</div>'
        );
    $('#frmMes').slideDown();

    $('input, textarea').on('focus', function(){
        removeMes(true);
    });
}

function removeMes(value){
    if($('#frmMes')){
        $('#frmMes').slideUp();
        if(value){
            setTimeout(function(){
                $('#frmMes').remove();
            }, 200);
        }
    }
}