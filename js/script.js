$('document').ready(function() {
    
    $('.content-tabs').height($('.content-tabs > .selected').height()); 
    $("#work .openmenu-nav").menuAim({
     activate: function(a){
        var idx = $(a).index();
        $('#work .openmenu-text > div').eq(idx).show();
    },  // fired on row activation
    deactivate: function(a){
        var idx = $(a).index();
        $('#work .openmenu-text > div').eq(idx).hide();
    } 
    });
    
    $("#about .openmenu-nav").menuAim({
     activate: function(a){
        var idx = $(a).index();
        $('#about .openmenu-text > div').eq(idx).show();
    },  // fired on row activation
    deactivate: function(a){
        var idx = $(a).index();
        $('#about .openmenu-text > div').eq(idx).hide();

    } 
    });
    $("#products .openmenu-nav").menuAim({
     activate: function(a){
        var idx = $(a).index();
        $('#products .openmenu-text > div').eq(idx).show();
    },  // fired on row activation
    deactivate: function(a){
        var idx = $(a).index();
        $('#products .openmenu-text > div').eq(idx).hide();
    } 
    });
    
    
    $('.openmenu-nav li').hover(function(){
        $('.openmenu-nav li').removeClass('selected');
        $(this).addClass('selected');
        $('.openmenu-text > div').removeClass('selected');
        $('.'+$(this).attr('id')).addClass('selected');
    });
   $('nav > li').mouseenter(function(){
       $('.openmenu-nav li').removeClass('selected');
       $('.openmenu-text > div').removeClass('selected');
        $('.openmenu-nav li:nth-child(1) ').addClass('selected');
        $('.openmenu-text > div:nth-child(1) ').addClass('selected');

   });
    
    $('.tab-img').click(function(){
        $('.tab-img').removeClass('selected');
        $(this).addClass('selected');
        $('.content-tabs > .content').removeClass('selected');
        $('.'+$(this).attr('id')).addClass('selected');
        var tabH = $('.'+$(this).attr('id')).height();
        $('.content-tabs').animate({height: tabH},300);
    });

    
});

function jobsDown(){    
    var ul = $('.job ul').offset();
    var job = $('.job').offset();
    var val1 = ul.top+$('.job ul').height();
    var val2 = job.top+ $('.job').height(); 
    if (val1 < val2){
        $('.job ul').animate({top:"0"},700,'easeInOutBack');
    } else {
        $('.job ul').animate({top:"-=35"},300);
    }
    
} 
