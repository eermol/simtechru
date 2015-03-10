function loadmodule(moduleFileName){
    $('.geo-module').load(moduleFileName, function(responseText, textStatus, XMLHttpRequest){
            $(".geo-module").animate({ height: 'auto' }, 1000);
        $.ajaxSetup({cache: false});
    });
        
}

$(document).ready(function(){
    
    $('.geoactiveusers').addClass('selected');
    
    $(".mobile").owlCarousel({
            singleItem:true,
            autoHeight:true,
            navigation : true,
            navigationText : ['<i class="bx-next icon-car-right"></i>','<i class="bx-prev icon-car-left"></i>'],
             rewindNav : true,
            pagination:false,
            slideSpeed : 500,
            paginationSpeed : 800,
            rewindSpeed : 500,scrollPerPage : false,

    });
    $(".boss").owlCarousel({
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
        $(".events").owlCarousel({
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
     $(".team-slide ul").owlCarousel({
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
    
    
    $('.geo-tabs span').click(function(){
        $('.geo-tabs span').removeClass('selected');
        $(this).addClass('selected');
        var moduleattr = $(this).attr('id');
        loadmodule(moduleattr);
    });
    
    
});
