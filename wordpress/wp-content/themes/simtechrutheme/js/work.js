jQuery('document').ready(function(){


   //flash validation
   jQuery('.areuready').click(function(){
       elementClick = jQuery(this).attr("href");
     destination = jQuery(elementClick).offset().top;
     if(jQuery.browser.safari){
       jQuery('body').animate( { scrollTop: destination }, 1100 );
     }else{
       jQuery('html').animate( { scrollTop: destination }, 1100 );
     }
     return false;
   });








    jQuery('.send-mail input[type="file"]').bind('change', function(){
        if (this.files[0].size > 20000000){
            jQuery('.error').addClass('visible');
            jQuery(this).val('');
        } else {
            jQuery('.error').removeClass('visible');
            jQuery('.loadfile').addClass('hide');
            jQuery('.selectedfile').addClass('visible');
            jQuery('.deletefile').addClass('visible');
            var size = this.files[0].size / 1000000;

            jQuery('.selectedfile').html('<img src="work/icon-file.png" alt=""> '+this.files[0].name+' <span class="filesize">('+size.toFixed(1)+' МБ)</span>');
        }
    });
    jQuery('.deletefile').click(function(){
            jQuery('.send-mail input[type="file"]').val('');
            jQuery('.loadfile').removeClass('hide');
            jQuery('.selectedfile').removeClass('visible');
            jQuery('.selectedfile').html();
            jQuery(this).removeClass('visible');
    });
    jQuery(".slides").owlCarousel({
            itemsDesktop:[2000,4],
            itemsDesktopSmall:[1300,4],
            itemsTablet:[1150,2],
            itemsMobile:[767,1],
            navigation : true,
            pagination:false,
            navigationText : ['<i class="bx-prev icon-car-left"></i>','<i class="bx-next icon-car-right"></i>'],
            rewindNav : true,
            slideSpeed : 500,
            paginationSpeed : 800,
            rewindSpeed : 500,scrollPerPage : false,

     });


    jQuery('.copy-in-bufer').click(function(){
        if (checkIfFlashEnabled() == true ){
            jQuery('.animate').addClass('animation').delay(800);
            setTimeout(function(){
                jQuery('.animate').removeClass('animation');
            },500);
        } else {
            jQuery('.input-friend').addClass('visible');
            focus('.input-firend');
            jQuery('.input-friend').select();

        }
        });







});
