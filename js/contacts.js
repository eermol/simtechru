var map;
    DG.then(function () {
        map = DG.map('map', {
            "center": [54.3494538996953,48.5324266352685],
            "zoom": 16,
            "zoomControl": false,
            "fullscreenControl":false,
            "scrollWheelZoom":false
        });
        DG.marker([54.3494538996953,48.5324266352685]).addTo(map).bindPopup('Вы кликнули по мне!');
    });

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



jQuery('document').ready(function(){



});
