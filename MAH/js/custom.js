$().saModal()

$('.go_to_top').click(function (){
    $('html,body').animate({
            scrollTop: $('header').offset().top - 50},
        "slow",'linear');
})

$(document).ready(function(){
    $(".testimonialOwl").owlCarousel();
});
$('.testimonialOwl').owlCarousel({
    loop:true,
    margin:10,
//     animateOut: 'animate__bounceOutRight',
//     animateIn: 'animate__bounceInRight',
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1,

        }
    }
})

$('.our_team').owlCarousel({
    loop:true,
    margin:10,
//     animateOut: 'animate__bounceOutRight',
//     animateIn: 'animate__bounceInRight',
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3,

        }
    }
})





$('.ourhospitalOwl').owlCarousel({
    loop:true,
    margin:10,
    animateOut: 'animate__bounceOutRight',
    animateIn: 'animate__bounceInRight',
    nav:true,
    dots: false,

    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2,
        }
    }
})






$('.menu_mobile_btn').click(function (){
    $('.open_menu').fadeIn()
    $('.open_menu2').addClass('open_menu_content')
	$('#wrap2').css('top','-375px')
	$('header').css('height','500px')
	$('body').css('overflow','hidden')
})
$('.close_menu').click(function (){
    $('.open_menu').fadeOut()
    $('.open_menu2').removeClass('open_menu_content')
	$('#wrap2').css('top','unset')
	$('header').css('height','unset')
	$('body').css('overflow','unset')
	
})



function saAlert(errorMsg){
    Swal.fire({
        title: "Oops..",
        text: errorMsg,
        icon: 'error',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    })
}





$("#request_phone").inputmask({"mask": "(999) 999-9999"});
$('#submit_form_request').click(function (e){
    e.preventDefault()

    var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;

    if ($('#request_name').val() === ''){
        $('#request_name').addClass('border_error blink').attr('placeholder','Please fill this!')
    }else if($('#request_phone').val() === ''){
        $('#request_name').removeClass('border_error blink').attr('placeholder','')
        $('#request_phone').addClass('border_error blink').attr('placeholder','Please fill this!')
    }else if($('#request_email').val() === ''){
        $('#request_phone').removeClass('border_error blink').attr('placeholder','')
        $('#request_email').addClass('border_error blink').attr('placeholder','Please fill this!')
    }else if(!testEmail.test($('#request_email').val())){
        $('#request_email').val('')
        $('#request_email').addClass('border_error blink').attr('placeholder','Please enter valid email!')
    }else if ($('#request_date').val() === ''){
        $('#request_email').removeClass('border_error blink').attr('placeholder','')
        $('#request_date').addClass('border_error blink').attr('placeholder','Please choose a date!')
    }else if($('#request_comment').val() === ''){
        $('#request_date').removeClass('border_error blink').attr('placeholder','')
        $('#request_comment').addClass('border_error blink').attr('placeholder','Please fill this!')
    }else {
        $('#request_comment').removeClass('border_error blink').attr('placeholder','')
		$('#submit_form_request').prop('disabled', true).attr('value','Loading...').addClass('disabled_button')
        $.ajax({
            type: "post",
            dataType: "json",
            data:{
                action: 'request_appointment',
                name:$('#request_name').val(),
                patient_type:$('#PatientType').val(),
                phone:$('#request_phone').val(),
                email:$('#request_email').val(),
                date:$('#request_date').val(),
                time_of_day:$('#PreferredTimeOfDay').val(),
                comment:$('#request_comment').val()
            },
            url: window.location.origin + "/wp-admin/admin-ajax.php",
            success: function(msg){
                console.log(msg);
				$('#submit_form_request').prop('disabled', false).attr('value','Send again').removeClass('disabled_button')
				$('.request_modal_form input:not("#submit_form_request") , .request_modal_form textarea').val('');
				
				$('.saModalWrapper,.saModal').fadeOut()
				 Swal.fire({
								title: 'Your Request Send!',
								icon: 'success',
								showClass: {
									popup: 'animate__animated animate__fadeInDown'
								},
								hideClass: {
									popup: 'animate__animated animate__fadeOutUp'
								}
				})
            }
        });
    }

})



		   $(".message_phone").inputmask({"mask": "(999) 999-9999"});
           $('.submit_form_message').click(function (e){
                e.preventDefault();
                var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                var testPhone = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
                var name = $('.message_name').val();
                var phone = $('.message_phone').val();
                var email = $('.message_email').val();
                var message = $('.message_message').val();
                if ( name === '' ){
                    $('.message_name').addClass('border_error blink').attr('placeholder','Please fill this!')
                }else if(phone === ''){
                    $('.message_name').removeClass('border_error blink').attr('placeholder','')
                    $('.message_phone').addClass('border_error blink').attr('placeholder','Please fill this!')
					
					
					
					
                }else if(!testPhone.test(phone)){
                    $('.message_phone').removeClass('blink').val('')
                    $('.message_phone').addClass('blink').attr('placeholder','Please enter valid phone!')
                }else if(email === ''){
                    $('.message_phone').removeClass('border_error blink').attr('placeholder','')
                    $('.message_email').addClass('border_error blink').attr('placeholder','Please fill this!')
                }else if(!testEmail.test(email)){
                    $('.message_email').removeClass('blink').val('')
                    $('.message_email').addClass('blink').attr('placeholder','Please enter correct email!')
                }else if(message === ''){
                    $('.message_email').removeClass('border_error blink').attr('placeholder','')
                    $('.message_message').addClass('border_error blink').attr('placeholder','Please fill this!')
                }else {
                    $('.message_message').removeClass('border_error blink').attr('placeholder','')
					$('.submit_form_message').prop('disabled', true).attr('value','Loading...').addClass('disabled_button')
                    $.ajax({
                        type: "post",
                        dataType: "json",
                        data:{
                            action: 'message_form',
                            name : name,
                            phone : phone,
                            email : email,
                            message : message
                        },
                        url: window.location.href + "/wp-admin/admin-ajax.php",
                        success: function(msg){
                            console.log(msg);
							$('.submit_form_message').prop('disabled', false).attr('value','Send again').removeClass('disabled_button')
							$('.message_content_form input:not(".submit_form_message") , .message_content_form textarea').val('');
							
							$('.saModalWrapper,.saModal').fadeOut()
							 Swal.fire({
								title: 'Your Message Send!',
								icon: 'success',
								showClass: {
									popup: 'animate__animated animate__fadeInDown'
								},
								hideClass: {
									popup: 'animate__animated animate__fadeOutUp'
								}
							})
                        }
                    });
                }
            });




		/*  Open or Close?  */

        let currentdate = new Date();
        let day = currentdate.getDay();
        switch (day){
            case 0:
                day = 'Sunday';
                $('.Sunday').addClass('current_day_row_select')
                break;
            case 1:
                day = 'Monday'
                $('.Monday').addClass('current_day_row_select')
                break;
            case 2:
                day = 'Tuesday'
                $('.Tuesday').addClass('current_day_row_select')
                break;
            case 3:
                day = 'Wednesday'
                $('.Wednesday').addClass('current_day_row_select')
                break;
            case 4:
                day = 'Thursday'
                $('.Thursday').addClass('current_day_row_select')
                break;
            case 5:
                day = 'Friday'
                $('.Friday').addClass('current_day_row_select')
                break;
            case 6:
                day = 'Saturday'
                $('.Saturday').addClass('current_day_row_select')
                break;
        }
        /*
        function formatAMPM(date) {
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var ampm = hours >= 12 ? 'pm' : 'am';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0'+minutes : minutes;
            var strTime = hours + ':' + minutes + ' ' + ampm;
            return strTime;
        }*/
        let day_open = ['Monday','Tuesday','Wednesday','Thursday','Friday'];
        let current_hour = currentdate.getHours();
        if ($.inArray(day,day_open) !== -1 && current_hour >= 10 && current_hour <= 18 || day === "Saturday" & current_hour >= 9 && current_hour <= 16){
            $('#open_close').html('Open')
        }else {
            $('#open_close').html('Close')
        }






