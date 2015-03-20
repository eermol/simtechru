jQuery('document').ready(function() {

    jQuery('.content-tabs').height(jQuery('.content-tabs > .selected').height());
    jQuery("#work .openmenu-nav").menuAim({
     activate: function(a){
        var idx = jQuery(a).index();
        jQuery('#work .openmenu-text > div').eq(idx).show();
    },  // fired on row activation
    deactivate: function(a){
        var idx = jQuery(a).index();
        jQuery('#work .openmenu-text > div').eq(idx).hide();
    }
    });

    jQuery("#about .openmenu-nav").menuAim({
     activate: function(a){
        var idx = jQuery(a).index();
        jQuery('#about .openmenu-text > div').eq(idx).show();
    },  // fired on row activation
    deactivate: function(a){
        var idx = jQuery(a).index();
        jQuery('#about .openmenu-text > div').eq(idx).hide();

    }
    });
    jQuery("#products .openmenu-nav").menuAim({
     activate: function(a){
        var idx = jQuery(a).index();
        jQuery('#products .openmenu-text > div').eq(idx).show();
    },  // fired on row activation
    deactivate: function(a){
        var idx = jQuery(a).index();
        jQuery('#products .openmenu-text > div').eq(idx).hide();
    }
    });


    jQuery('.openmenu-nav li').hover(function(){
        jQuery('.openmenu-nav li').removeClass('selected');
        jQuery(this).addClass('selected');
        jQuery('.openmenu-text > div').removeClass('selected');
        jQuery('.'+jQuery(this).attr('id')).addClass('selected');
    });
   jQuery('nav > li').mouseenter(function(){
       jQuery('.openmenu-nav li').removeClass('selected');
       jQuery('.openmenu-text > div').removeClass('selected');
        jQuery('.openmenu-nav li:nth-child(1) ').addClass('selected');
        jQuery('.openmenu-text > div:nth-child(1) ').addClass('selected');

   });

    jQuery('.tab-img').click(function(){
        jQuery('.tab-img').removeClass('selected');
        jQuery(this).addClass('selected');
        jQuery('.content-tabs > .content').removeClass('selected');
        jQuery('.'+jQuery(this).attr('id')).addClass('selected');
        var tabH = jQuery('.'+jQuery(this).attr('id')).height();
        jQuery('.content-tabs').animate({height: tabH},300);
    });


});

function jobsDown(){
    var ul = jQuery('.job ul').offset();
    var job = jQuery('.job').offset();
    var val1 = ul.top+jQuery('.job ul').height();
    var val2 = job.top+ jQuery('.job').height();
    if (val1 < val2){
        jQuery('.job ul').animate({top:"0"},700,'easeInOutBack');
    } else {
        jQuery('.job ul').animate({top:"-=35"},300);
    }

}
