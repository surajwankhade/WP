//for sticky top
$(function(){
        var stickyHeaderTop = $('.header').offset().top;
 
        $(window).scroll(function(){
                if( $(window).scrollTop() > stickyHeaderTop ) {
                        $('.header').css({position: 'fixed', top: '0px'});
                        $('#sticky').css('display', 'block');
                } else {
                        $('.header').css({position: 'static', top: '0px'});
                        $('#sticky').css('display', 'none');
                }
        });
  });