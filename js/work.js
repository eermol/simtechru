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


 var checkIfFlashEnabled = function() {
       var isFlashEnabled = false;
       if (typeof(navigator.plugins)!="undefined"
           && typeof(navigator.plugins["Shockwave Flash"])=="object"
       ) {
          isFlashEnabled = true;
       } else if (typeof  window.ActiveXObject !=  "undefined") {
          try {
             if (new ActiveXObject("ShockwaveFlash.ShockwaveFlash")) {
                isFlashEnabled = true;
             }
          } catch(e) {};
       };
        return isFlashEnabled;
}





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
            jQuery('.opened-dialog').addClass('flash');
        }
    });

    $(document).mouseup(function (e) {
        var container = $(".input-friend");
        if (container.has(e.target).length === 0){
            jQuery('.input-friend').removeClass('visible');
        }
    });

    jQuery('.send-to-friend').click(function(){

                if (jQuery('.opened-dialog').hasClass('open-block')){
                    jQuery('.opened-dialog').removeClass('open-block');
                } else {
                    jQuery('.opened-dialog').addClass('open-block');
                }
    });

        if (checkIfFlashEnabled() == true ){
            jQuery('.copy-in-bufer').zclip({
                    path:'js/ZeroClipboard.swf',
                    copy:jQuery('.animate').text()
            });
        }

        jQuery('.opened-dialog .close').click(function(){
            jQuery('.opened-dialog').removeClass('open-block');
    });
});

