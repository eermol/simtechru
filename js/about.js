function loadmodule(moduleFileName){
    jQuery('.geo-module').load(moduleFileName, function(responseText, textStatus, XMLHttpRequest){
            jQuery(".geo-module").animate({ height: 'auto' }, 1000);
        jQuery.ajaxSetup({cache: false});
    });
        
}

jQuery(document).ready(function(){
    
    jQuery('.geoactiveusers').addClass('selected');
    
    jQuery(".mobile").owlCarousel({
            singleItem:true,
            autoHeight:true,
            navigation : true,
            navigationText : ['<i class="bx-prev icon-car-left"></i>','<i class="bx-next icon-car-right"></i>'],
             rewindNav : true,
            pagination:false,
            slideSpeed : 500,
            paginationSpeed : 800,
            rewindSpeed : 500,scrollPerPage : false,

    });
    jQuery(".boss").owlCarousel({
            singleItem:true,
            autoHeight:true,
            navigation : true,
        pagination:true,
            navigationText : ['<i class="bx-next icon-car-right"></i>','<i class="bx-prev icon-car-left"></i>'],
             rewindNav : true,
            slideSpeed : 500,
            paginationSpeed : 800,
            rewindSpeed : 500,scrollPerPage : false,

    });
        jQuery(".events").owlCarousel({
            itemsDesktop:[2000,4],
            itemsTablet:[768,2],
            itemsMobile:[767,1],
            navigation : true,
            pagination:false,
            navigationText : ['<i class="bx-prev icon-car-left"></i>','<i class="bx-next icon-car-right"></i>'],
             rewindNav : true,
            slideSpeed : 500,
            paginationSpeed : 800,
            rewindSpeed : 500,scrollPerPage : false,

         });
     jQuery(".team-slide ul").owlCarousel({
            itemsDesktop:[2000,7],
            itemsDesktopSmall:[1300,6],
            itemsTablet:[1150,4],
            itemsMobile:[767,1],
            navigation : true,
         pagination:false,
            navigationText : ['<i class="bx-prev icon-car-left"></i>','<i class="bx-next icon-car-right"></i>'],
             rewindNav : true,
         
            slideSpeed : 500,
            paginationSpeed : 800,
            rewindSpeed : 500,scrollPerPage : false,

     });
    
    
    jQuery('.geo-tabs span').click(function(){
        jQuery('.geo-tabs span').removeClass('selected');
        jQuery(this).addClass('selected');
        var moduleattr = jQuery(this).attr('id');
        loadmodule(moduleattr);
    });
    
    
});
